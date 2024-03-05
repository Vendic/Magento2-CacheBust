<?php declare(strict_types=1);

namespace Absolute\CacheBust\Setup\Patch\Data;

use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class EnableCacheBustForStaticContent implements DataPatchInterface
{
    public function __construct(private WriterInterface $configWriter)
    {
    }

    public static function getDependencies() : array
    {
        return [];
    }

    public function getAliases(): array
    {
        return [];
    }

    public function apply() : DataPatchInterface
    {
        $this->configWriter->save('absolute_cachebust/static/is_enabled', '1');

        return $this;
    }
}
