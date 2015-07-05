<?php

namespace MDN\TodoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    /**
     * 
     * @param type $value
     */
    public function testIncrement()
    {
        $client = static::createClient();
        
        $crawler = $client->request('GET', '/default/increment');
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Counter value now is")')->count());
        
    }
    
    public function testIndex()
    {
//        $client = static::createClient();
//
//        $crawler = $client->request('GET', '/hello/Fabien');
//
//        $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
}
