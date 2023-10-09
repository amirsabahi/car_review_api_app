<?php

namespace App\Tests;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;

class CarTest extends ApiTestCase
{
    public function testFetchAPI(): void
    {
        $response = static::createClient()->request('GET', '/api/cars');

        $this->assertResponseIsSuccessful();
        $this->assertJsonContains(['@id' => '1']);
    }
}
