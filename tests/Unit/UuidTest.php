<?php

namespace CleaniqueCoders\LaravelUuid\Tests\Unit;

use CleaniqueCoders\LaravelUuid\Tests\TestCase;

class UuidTest extends TestCase
{
    /** @test */
    public function it_has_uuid_helper()
    {
        $this->assertHasHelper('uuid');
    }

    /** @test */
    public function it_has_valid_uuid_helper()
    {
        $this->assertHasHelper('validUuid');
    }

    /** @test */
    public function uuid_helper_return_valid_uuid()
    {
        $this->assertTrue(validUuid(uuid()));
    }

    /** @test */
    public function it_has_uuid_observer_class()
    {
        $this->assertTrue(class_exists(\CleaniqueCoders\LaravelUuid\Observers\UuidObserver::class));
    }
}
