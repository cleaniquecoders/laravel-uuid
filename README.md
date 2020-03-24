
[![Build Status](https://travis-ci.org/cleaniquecoders/laravel-uuid.svg?branch=master)](https://travis-ci.org/cleaniquecoders/laravel-uuid) [![Latest Stable Version](https://poser.pugx.org/cleaniquecoders/laravel-uuid/v/stable)](https://packagist.org/packages/cleaniquecoders/laravel-uuid) [![Total Downloads](https://poser.pugx.org/cleaniquecoders/laravel-uuid/downloads)](https://packagist.org/packages/cleaniquecoders/laravel-uuid) [![License](https://poser.pugx.org/cleaniquecoders/laravel-uuid/license)](https://packagist.org/packages/cleaniquecoders/laravel-uuid)

## Laravel Uuid

This package allows you to use UUID as primary key.

## Installation

In order to install `cleaniquecoders/laravel-uuid` in your Laravel project, just run the *composer require* command from your terminal:

```
$ composer require cleaniquecoders/laravel-uuid
```

## Usage

First, you need to define in your migration the uuid field you want to use:

```php 
$table->uuid('uuid')->default('-');
```

Configure your model to include `\CleaniqueCoders\LaravelUuid\Traits
HasUuid` trait and implement `\CleaniqueCoders\LaravelUuid\Contracts\HasUuid` contract.

```php 
use Illuminate\Database\Eloquent\Model;
use CleaniqueCoders\LaravelUuid\Contracts\HasUuid as HasUuidContract;
use CleaniqueCoders\LaravelUuid\Traits\HasUuid;

class User extends Model implements HasUuidContract
{
    use HasUuid;
}
```

By using the trait, you are able to use `uuid($uuid)` scope. Additional setup, you may want to define `protected $uuid_column = 'user_uuid'` if you have different UUID column name.

```php 
$user = User::uuid($uuid)->first();
```

Next, you can use `\CleaniqueCoders\LaravelUuid\Observers\UuidObserver` to automatically set the `uuid` value for you before save into database. You need to register in the `App\Providers\AppServiceProvider` in `boot` method:

```php 
use CleaniqueCoders\LaravelUuid\Observers\UuidObserver;
use App\User;
...
public function boot()
{
    User::observe(UuidObserver::class);
}
```

Alternatively, you can utilise the [Laravel Observer](https://github.com/cleaniquecoders/laravel-observers) package.



## Test

Run the following command:

```
$ vendor/bin/phpunit  --testdox --verbose
```

## Contributing

Thank you for considering contributing to the `cleaniquecoders/laravel-uuid`!

### Bug Reports

To encourage active collaboration, it is strongly encourages pull requests, not just bug reports. "Bug reports" may also be sent in the form of a pull request containing a failing test.

However, if you file a bug report, your issue should contain a title and a clear description of the issue. You should also include as much relevant information as possible and a code sample that demonstrates the issue. The goal of a bug report is to make it easy for yourself - and others - to replicate the bug and develop a fix.

Remember, bug reports are created in the hope that others with the same problem will be able to collaborate with you on solving it. Do not expect that the bug report will automatically see any activity or that others will jump to fix it. Creating a bug report serves to help yourself and others start on the path of fixing the problem.

## Coding Style

`cleaniquecoders/laravel-uuid` follows the PSR-2 coding standard and the PSR-4 autoloading standard. 

You may use PHP CS Fixer in order to keep things standardised. PHP CS Fixer configuration can be found in `.php_cs`.

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).