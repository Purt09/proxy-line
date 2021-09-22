## installing the package
SDK for working with proxyline. He is not full for api methods
### From CLI
```$xslt
$ composer config repositories.apirone vcs https://github.com/purt09/proxyline.git
$ composer require purt09/proxyline:dev-main
```
## Unit testing

### Install in your local
```$xslt
$ composer install
```
### Run Tests
First step change token in files fo tests.
```$xslt
$ php vendor/bin/phpunit --bootstrap vendor/autoload.php tests/unit/Services/IpsTest.php
$ php vendor/bin/phpunit --bootstrap vendor/autoload.php tests/unit/Services/UserTest.php
$ php vendor/bin/phpunit --bootstrap vendor/autoload.php tests/unit/Services/OrderTest.php
```
or
```$xslt
$ "vendor/bin/phpunit" --bootstrap vendor/autoload.php tests/unit/Services/IpsTest.php
$ "vendor/bin/phpunit" --bootstrap vendor/autoload.php tests/unit/Services/UserTest.php
$ "vendor/bin/phpunit" --bootstrap vendor/autoload.php tests/unit/Services/OrderTest.php
```
