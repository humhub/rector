<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

$moduleRootDir = dirname(__DIR__, 3);

return RectorConfig::configure()
    ->withPaths([
        $moduleRootDir,
    ])
    ->withSkip([
        \Rector\Php81\Rector\Array_\FirstClassCallableRector::class,
        \Rector\TypeDeclaration\Rector\ClassMethod\ReturnNeverTypeRector::class,
        $moduleRootDir . '/vendor/*',
        $moduleRootDir . '/docs/*',
    ])
    ->withPhpSets(php82: true)
    ->withTypeCoverageLevel(0)
    ->withDeadCodeLevel(0)
    ->withCodeQualityLevel(0);
