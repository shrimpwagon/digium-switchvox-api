<?php

namespace Switchvox;

use Httpful\Request;

class SwitchvoxClient
{
	public $strict_ssl = false;

	public $user = 'admin';

	public $password = '';

	public $uri = 'https://switchvoxdemo1.digiumcloud.net';

	public $data_type = 'json';

	public $timeout = null;

	public function send($method, $params = [])
	{
		$request = Request::post($this->uri . '/' . $this->data_type)

			->authenticateWithDigest($this->user, $this->password)

			->timeout($this->timeout);

		if( ! $this->strict_ssl ) $request->withoutStrictSsl();

		if( $this->data_type == 'json' )
		{
			$request->sendsJson()->expectsJson();

			$body = json_encode(['request' => ['method' => $method, 'parameters' => $params]]);
		}

		elseif( $this->data_type = 'xml' )
		{
			$request->sendsXml()->expectsXml();
		}

		else
		{
			throw new Exception('Invalid data type: ' . $this->data_type);
		}

		return $request->body($body)->send();
	}
}
