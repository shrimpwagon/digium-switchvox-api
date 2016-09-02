<?php

namespace Switchvox\Test;

use Switchvox\SwitchvoxClient;

class SwitchvoxProvidersTest extends \PHPUnit_Framework_TestCase
{
	private $client;

	private $prepend = 'switchvox.providers.';

	public function __construct()
	{
		parent::__construct();

		$this->client = new SwitchvoxClient();

		$this->client->user = getenv('SWITCHVOX_USER');

		$this->client->password = getenv('SWITCHVOX_PASSWORD');

		$this->client->timeout = getenv('SWITCHVOX_TIMEOUT');

		$this->client->uri = getenv('SWITCHVOX_URI');

		$this->client->data_type = getenv('SWITCHVOX_DATA_TYPE');
	}

	public function testGetList()
	{
		$response = $this->client->send($this->prepend . 'getList');

		$this->assertEquals($response->code, 200);
	}
}
