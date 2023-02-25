<?php

namespace CleaniqueCoders\LaravelUuid\Tests\Feature;

use CleaniqueCoders\LaravelUuid\Contracts\HasUuid as HasUuidContract;
use CleaniqueCoders\LaravelUuid\Tests\Stubs\Models\User;
use CleaniqueCoders\LaravelUuid\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UuidTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Setup the test environment.
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->loadLaravelMigrations();

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    /** @test */
    public function is_an_instance_of_uuid_contract()
    {
        $user = User::create([
            'name' => 'Laravel Uuid',
            'email' => 'unittest@laravel.uuid',
            'password' => 'password',
        ]);
        $this->assertTrue($user instanceof HasUuidContract);
    }

    /** @test */
    public function has_valid_uuid_on_created_record()
    {
        $user = User::create([
            'name' => 'Laravel Uuid',
            'email' => 'unittest@laravel.uuid',
            'password' => 'password',
            'uuid' => uuid(),
        ]);
        $this->assertTrue($user instanceof HasUuidContract);
        $this->assertTrue(validUuid($user->uuid));
    }

    /** @test */
    public function has_valid_uuid_on_created_record_using_uuid_observer()
    {
        $user = User::create([
            'name' => 'Laravel Uuid',
            'email' => 'unittest@laravel.uuid',
            'password' => 'password',
        ]);
        $this->assertTrue($user instanceof HasUuidContract);
        $this->assertTrue(validUuid($user->uuid));
    }
}
