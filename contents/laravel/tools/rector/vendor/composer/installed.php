<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => null,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => null,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'driftingly/rector-laravel' => array(
            'pretty_version' => '1.1.0',
            'version' => '1.1.0.0',
            'reference' => '47c7de91bb07c0a97df8dd1fe677c6c154608549',
            'type' => 'rector-extension',
            'install_path' => __DIR__ . '/../driftingly/rector-laravel',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'phpstan/phpstan' => array(
            'pretty_version' => '1.10.66',
            'version' => '1.10.66.0',
            'reference' => '94779c987e4ebd620025d9e5fdd23323903950bd',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpstan/phpstan',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'rector/rector' => array(
            'pretty_version' => '1.0.4',
            'version' => '1.0.4.0',
            'reference' => '6e04d0eb087aef707fa0c5686d33d6ff61f4a555',
            'type' => 'library',
            'install_path' => __DIR__ . '/../rector/rector',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);