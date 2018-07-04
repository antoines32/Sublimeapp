<?php

namespace WebsiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TicketControllerTest extends WebTestCase
{
    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ticket/create');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ticket/list');
    }

}
