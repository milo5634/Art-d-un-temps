<?php  

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
        $container->loadFromExtension('framework', [
            // ...
            'mailer' => [
                'envelope' => [
                    'sender' => 'fabien@example.com',
                    'recipients' => ['foo@example.com', 'bar@example.com'],
                ],
                'headers' => [
                    'from' => 'Fabien <fabien@example.com>',
                    'bcc' => 'baz@example.com',
                    'X-Custom-Header' => 'foobar',
                ],
            ],
]);
};


?>