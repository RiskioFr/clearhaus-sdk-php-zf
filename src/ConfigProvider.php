<?php
declare(strict_types=1);

namespace ClearhausModule;

class ConfigProvider
{
    public function __invoke() : array
    {
        $config = (new Module())->getConfig();

        return [
            'clearhaus_sdk' => $config['clearhaus_sdk'],
            'dependencies' => $config['service_manager'],
        ];
    }
}
