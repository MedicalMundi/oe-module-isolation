<?php declare(strict_types=1);

use Symplify\MonorepoBuilder\Config\MBConfig;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\PushTagReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\TagVersionReleaseWorker;

return static function (MBConfig $mbConfig): void {
    $mbConfig->workers([
        TagVersionReleaseWorker::class,
        PushTagReleaseWorker::class,
    ]);
};
