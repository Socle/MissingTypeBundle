SocleMissingTypeBundle
====================

This bundle aims to provide missing form type in Symfony2.

Documentation
-------------

For now, this bundle provide the following types:

    - hidden_boolean: Keep boolean value in hidden field

Installation
------------

Add SocleMissingTypeBundle in your composer.json:

```javascript
{
    "require": {
        "socle/missing-type-bundle": "dev-master"
    }
}
```

Now tell composer to download the bundle by running the command:

```bash
$ php composer.phar update
# OR
$ php composer.phar update socle/missing-type-bundle # to only update the bundle
```

Enable the bundle in the kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Socle\Bundle\MissingTypeBundle\SocleMissingTypeBundle(),
    );
}
```
