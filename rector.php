<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\ValueObject\PhpVersion;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {

    $rectorConfig->paths([
        __DIR__ . '/config',
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    // Apply sets for general code quality
    $rectorConfig->sets(sets: [
        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
        SetList::PHP_82,
        SetList::TYPE_DECLARATION,
        SetList::CARBON,
    ]);

    // Define PHP version for Rector
    $rectorConfig->phpVersion(phpVersion: PhpVersion::PHP_82);
};
