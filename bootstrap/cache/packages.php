<?php return array (
  'barryvdh/laravel-debugbar' => 
  array (
    'providers' => 
    array (
      0 => 'Barryvdh\\Debugbar\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'Debugbar' => 'Barryvdh\\Debugbar\\Facade',
    ),
  ),
  'facade/ignition' => 
  array (
    'providers' => 
    array (
      0 => 'Facade\\Ignition\\IgnitionServiceProvider',
    ),
    'aliases' => 
    array (
      'Flare' => 'Facade\\Ignition\\Facades\\Flare',
    ),
  ),
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'fruitcake/laravel-cors' => 
  array (
    'providers' => 
    array (
      0 => 'Fruitcake\\Cors\\CorsServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'laravel/ui' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Ui\\UiServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'nunomaduro/collision' => 
  array (
    'providers' => 
    array (
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
  'tenancy/tenancy' => 
  array (
    'providers' => 
    array (
      0 => 'Tenancy\\Providers\\TenancyProvider',
      1 => 'Tenancy\\Affects\\Broadcasts\\Provider',
      2 => 'Tenancy\\Affects\\Cache\\Provider',
      3 => 'Tenancy\\Affects\\Configs\\Provider',
      4 => 'Tenancy\\Affects\\Connections\\Provider',
      5 => 'Tenancy\\Affects\\Filesystems\\Provider',
      6 => 'Tenancy\\Affects\\Logs\\Provider',
      7 => 'Tenancy\\Affects\\Mails\\Provider',
      8 => 'Tenancy\\Affects\\Models\\Provider',
      9 => 'Tenancy\\Affects\\Routes\\Provider',
      10 => 'Tenancy\\Affects\\URLs\\Provider',
      11 => 'Tenancy\\Affects\\Views\\Provider',
      12 => 'Tenancy\\Identification\\Drivers\\Console\\Providers\\IdentificationProvider',
      13 => 'Tenancy\\Identification\\Drivers\\Environment\\Providers\\IdentificationProvider',
      14 => 'Tenancy\\Identification\\Drivers\\Http\\Providers\\IdentificationProvider',
      15 => 'Tenancy\\Identification\\Drivers\\Queue\\Providers\\IdentificationProvider',
    ),
    'aliases' => 
    array (
      'Tenancy' => 'Tenancy\\Facades\\Tenancy',
    ),
  ),
);