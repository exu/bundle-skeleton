<?php

namespace SkeletonNamespace\SkeletonBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/BadMotherFucker');

        $this->assertTrue($crawler->filter('html:contains("Hello BadMotherFucker")')->count() > 0);
    }
}
