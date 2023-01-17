# PHP Temporary FileSystem (Simple local interface to work with temporary files and directories)

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]][link-license]
[![Total Downloads][ico-downloads]][link-downloads]

## Introduction 

This is a simple implemenetation of [DNJ\FileSystem][repo-dnj-filesystem] for working with temporary disk based file system.
* Latest versions of PHP and PHPUnit and PHPCsFixer
* Best practices applied:irenweb.com
  * [`README.md`][link-readme] (badges included)
  * [`LICENSE`][link-license]
  * [`composer.json`][link-composer-json]
  * [`phpunit.xml`][link-phpunit]
  * [`.gitignore`][link-gitignore]
  * [`.php-cs-fixer.php`][link-phpcsfixer]
* Some useful resources to start coding

## How To Use
Working with this filesystem is same as working with [DNJ\local-filesystem][repo-dnj-local-filesystem] \
But you don't need to specify `$path` in the constructor of the Nodes.
Because the file or directory is created in the temporary path of the operationg system.


For more information to how deal with this filesystem, you can read [DNJ\local-filesystem README.md][repo-dnj-local-filesystem-readme]

Also, you don't need to delete temporary file and directories manually, because they have been automatically deleted when there is no pointer to them. (technically, when the `__destruct` method of object called.)
### Create temporary file:
```php
<?php
use dnj\Filesystem\Tmp\File;

$tmpFile = new File();
echo $tmppFile->getPath(); // prints the path of temporary file, in linux, it's may something like this: /tmp/qyiuqgi
```

### Create temporary directory:
```php
<?php
use dnj\Filesystem\Tmp\Directory;

$tmpDirectory = new Directory();
echo $tmpDirectory->getPath(); // prints the path of temporary directory, in linux, it's may something like this: /tmp/qyiuqgi
```

## About
We'll try to maintain this project as simple as possible, but Pull Requests are welcomed!

## License

The MIT License (MIT). Please see [License File][link-license] for more information.

[ico-version]: https://img.shields.io/packagist/v/dnj/tmp-filesystem.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/dnj/tmp-filesystem.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/dnj/tmp-filesystem
[link-license]: https://github.com/dnj/tmp-filesystem/blob/master/LICENSE
[link-downloads]: https://packagist.org/packages/dnj/tmp-filesystem
[link-readme]: https://github.com/dnj/tmp-filesystem/blob/master/README.md
[link-composer-json]: https://github.com/dnj/tmp-filesystem/blob/master/composer.json
[link-phpunit]: https://github.com/dnj/tmp-filesystem/blob/master/phpunit.xml
[link-gitignore]: https://github.com/dnj/tmp-filesystem/blob/master/.gitignore
[link-phpcsfixer]: https://github.com/dnj/tmp-filesystem/blob/master/.php-cs-fixer.php

[repo-dnj-filesystem]: https://github.com/dnj/filesystem
[repo-dnj-tmp-filesystem]: https://github.com/dnj/tmp-filesystem
[repo-dnj-local-filesystem]: https://github.com/dnj/local-filesystem
[repo-dnj-local-filesystem-readme]: https://github.com/dnj/local-filesystem/blob/master/README.md
