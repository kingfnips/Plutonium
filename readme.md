# Mining Plutonium

All the plutonium are belong to us. Pluto is a planet.

## Installation

### With Composer

```
$ composer require kingfnips/Plutonium
```

composer.json
```json
{
    "require": {
        "kingfnips/Plutonium": "0.0.*"
    }
}
```

```
$ composer install
```

```
$ composer dump-autoload
```

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use kingfnips\Plutonium\Plutonium;

$miner = new Plutonium;
```