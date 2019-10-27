<?php
namespace MyVendor\MyProject\Module;

use BEAR\Package\AbstractAppModule;
use BEAR\Package\PackageModule;
use BEAR\Package\Provide\Router\AuraRouterModule;
use BEAR\Resource\Module\JsonSchemaModule;
use Ray\CakeDbModule\CakeDbModule;
use Ray\Validation\ValidateModule;

class AppModule extends AbstractAppModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $appDir = $this->appMeta->appDir;
        require_once $appDir . '/env.php';
        $this->install(new AuraRouterModule($appDir . '/var/conf/aura.route.php'));
        $this->install(new CakeDbModule(getenv('DB_DSN')));
        $this->install(new ValidateModule);
        $this->install(new JsonSchemaModule(
            $appDir . '/var/json_schema',
            $appDir . '/var/json_validate'
        ));
        $this->install(new PackageModule);
    }
}
