<?php

namespace Switchvox\Test;

use Switchvox\SwitchvoxClient;

class SwitchvoxDirectoriesTest extends \PHPUnit_Framework_TestCase
{
	private $client;

	private $prepend = 'switchvox.directories.';

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

	public function testGetExtensionList()
	{
		$params = [
			'sort_field' => 'number',
			'sort_order' => 'ASC',
			'items_per_page' => '9999',
			'page_number' => '1'
		];

		$response = $this->client->send($this->prepend . 'getExtensionList', $params);

		$this->assertEquals($response->code, 200);
	}

	public function testGetInfo()
	{
		$response = $this->client->send($this->prepend . 'getInfo');

		$this->assertEquals($response->code, 200);
	}
}
