<?php

declare(strict_types=1);

namespace Utils\Rector\Tests\Rector\RuleAddCommentRector;

use Iterator;
use Symplify\RuleDocGenerator\Tests\AbstractRectorTestCase;
use Utils\Rector\Rector\RuleAddCommentRector;

final class RuleAddCommentRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     * @param string $fileBefore
     * @param string $fileAfter
     */
    public function test(string $fileBefore, string $fileAfter): void
    {
        $this->doTest($fileBefore, $fileAfter);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return RuleAddCommentRector::class;
    }
}
