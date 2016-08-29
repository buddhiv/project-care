<?php

namespace DonorBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AjaxControllerTest extends WebTestCase
{
    public function testDonate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'donor/donate');
    }

    public function testProfile()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'donor/profile');
    }

    public function testHistory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'donor/history');
    }

    public function testSettings()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'donor/settings');
    }

}
