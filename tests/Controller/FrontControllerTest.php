<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class FrontControllerTest extends WebTestCase
{
    public function testHomepage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertResponseHeaderSame('Content-Type', 'text/html; charset=UTF-8');
        $this->assertResponseFormatSame('html');

        $this->assertSelectorTextContains('title', 'Hello from Symfony, Doctrine and PostgreSQL!👋');
        $this->assertSelectorTextContains('h1', 'Hello from Symfony, Doctrine and PostgreSQL!👋');
        $this->assertEquals(1, $crawler->filter('hr')->count());
        $this->assertEquals(3, $crawler->filter('main ul li')->count());
        $this->assertEquals('Foo', $crawler->filter('main ul li')->eq(0)->text());
        $this->assertEquals('Bar', $crawler->filter('main ul li')->eq(1)->text());
        $this->assertEquals('Baz', $crawler->filter('main ul li')->eq(2)->text());
    }
}
