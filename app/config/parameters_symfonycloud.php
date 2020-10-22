<?php

// Don't forget to add the import in your `app/config/config.yml`:
// imports:
//      - { resource: parameters.yml }
// +    - { resource: parameters_symfonycloud.php }
//      - { resource: security.yml }
//      - { resource: services.yml }

// Not running in a SymfonyCloud runtime
if (!isset($_SERVER['SYMFONY_ENVIRONMENT'])) {
    return;
}

/*
  /!\ This file is not evaluated at runtime. This does not replace a proper
  runtime parameter evaluation usage with Symfony >= 3.4 and DotEnv.
*/

$container->setParameter('secret', $_SERVER['APP_SECRET'] ?? $_SERVER['SECRET']);
$container->setParameter('kernel.environment', $_SERVER['APP_ENV'] ?? $_SERVER['SYMFONY_ENV']);
$container->setParameter('kernel.debug', (bool) ($_SERVER['APP_DEBUG'] ?? $_SERVER['SYMFONY_DEBUG']));
$container->setParameter('router.request_context.host', $_SERVER['SYMFONY_APPLICATION_DEFAULT_ROUTE_HOST']);
$container->setParameter('router.request_context.scheme', $_SERVER['SYMFONY_APPLICATION_DEFAULT_ROUTE_SCHEME']);

$envMapping = [
    // You need to adapt this list to match your application configuration.
    // Please refer to https://symfony.com/doc/master/cloud/services/intro.html
    // for environment variable names.
    /*'database_host' => 'DATABASE_HOST',
    'database_port' => 'DATABASE_PORT',
    'database_name' => 'DATABASE_NAME',
    'database_user' => 'DATABASE_USER',
    'database_password' => 'DATABASE_PASSWORD',*/
    'mailer_transport' => 'MAILER_TRANSPORT',
    'mailer_user' => 'MAILER_USER',
    'mailer_password' => 'MAILER_PASSWORD',
    'mailer_host' => 'MAILER_HOST',
    'mailer_port' => 'MAILER_PORT',
];

foreach ($envMapping as $parameter => $env) {
    if (!isset($_SERVER[$env])) {
        continue;
    }

    $container->setParameter($parameter, $_SERVER[$env]);
}
