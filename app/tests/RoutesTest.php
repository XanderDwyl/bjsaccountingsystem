<?php

class RoutesTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testRoutes()
	{
		$crawler = $this->client->request('GET', '/home');
		$this->assertTrue($this->client->getResponse()->isOk());

		$crawler = $this->client->request('GET', '/about_us');
		$this->assertTrue($this->client->getResponse()->isOk());

		$crawler = $this->client->request('GET', '/contact_us');
		$this->assertTrue($this->client->getResponse()->isOk());

		$crawler = $this->client->request('GET', '/dashboard');
		$this->assertTrue($this->client->getResponse()->isOk());

		$crawler = $this->client->request('GET', '/login');
		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
