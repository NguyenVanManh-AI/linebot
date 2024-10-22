<?php

namespace App\Http\Controllers;

use App\Traits\APIResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Aws\S3\S3Client;

class UploadFileS3Controller extends Controller
{

    use APIResponse;

    public function uploadFileToS3(Request $request)
    {
        if ($request->hasFile('file')) {

            /**test permission read ans write file in app container docker 

            // http://localhost:99/storage/avatars/avatar.jpg
            // linebot/contents/storage/app/public/avatars/avatar.jpg

            // $file = $request->file('file');
            // $filename = $file->getClientOriginalName();
            // $path = $file->storeAs('avatars', $filename, 'public');
            // $url = $path;
            
            **/

            $file = $request->file('file');
            $name = time() . $file->getClientOriginalName();
            $filePath = 'linebot/' . $name;
            
            // Upload file to S3
            $data = Storage::disk('s3')->put($filePath, file_get_contents($file));
    
            // Set ACL to public-read
            Storage::disk('s3')->setVisibility($filePath, 'public');
    
            $url = Storage::disk('s3')->url($filePath);
        }
    
        $data = [
            'url' => $url ?? null
        ];
    
        return $this->responseSuccessWithData($data, 'Upload file to S3 successfully !');
    }

    public function deleteFileS3(Request $request)
    {
        // linebot/1710318263_bachkhoa.png
        Storage::disk('s3')->delete($request->key_image);

        return $this->responseSuccess('Image was deleted successfully !');
    }

    public function downloadFileS3(Request $request)
    {
        if ($request->has('file_url')) {
            $fileUrl = $request->file_url;
            $fileContent = file_get_contents($fileUrl);
            $fileName = basename($fileUrl);
            return response()->streamDownload(function () use ($fileContent) {
                echo $fileContent;
            }, $fileName)
            ->setStatusCode(200);
        } else return $this->responseError('File URL is missing !');
    }
    // goto : http://localhost:99/api/s3/download?file_url=https://linebotpro.s3.us-east-2.amazonaws.com/linebot/17138820951680405782.jpg

}
