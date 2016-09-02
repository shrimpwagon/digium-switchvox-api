# Digium Switchvox API

[![Build Status](https://secure.travis-ci.org/shrimpwagon/digium-switchvox-api.png?branch=master)](http://travis-ci.org/shrimpwagon/digium-switchvox-api) [![Latest Stable Version](https://poser.pugx.org/shrimpwagon/digium-switchvox-api/v/stable)](https://packagist.org/packages/shrimpwagon/digium-switchvox-api) [![Total Downloads](https://poser.pugx.org/shrimpwagon/digium-switchvox-api/downloads)](https://packagist.org/packages/shrimpwagon/digium-switchvox-api) [![License](https://poser.pugx.org/shrimpwagon/digium-switchvox-api/license)](https://packagist.org/packages/shrimpwagon/digium-switchvox-api)

PHP wrapper for the Digium Switchvox API.

# Features
This makes simple Switchvox's requests in JSON or XML.

Digium's [PHP client library](http://developers.digium.com/switchvox/?pageView=phpLibrary) requires a PEAR and PECL package whereas this implementation does not require them.

# Usage

	$client = new Switchvox\SwitchvoxClient();
	$client->user = 'admin';
	$client->password = '1234';
	$client->uri = 'https://somedigiumendpoint.com';

	// By default it will not care if the SSL cert is valid, to change:
	$client->strict_ssl = true;

	// Timeout in seconds, default is 10 seconds
	$client->timeout = 15;

	// If JSON is preferred (default):
	$client->data_type = 'json';

	// If XML is preferred:
	$client->data_type = 'xml';

	// Request a method with parameters
	$params = [
		'sort_field' => 'number',
		'sort_order' => 'ASC',
		'items_per_page' => '9999',
		'page_number' => '1'
	];

	$response = $client->send('switchvox.directories.getExtensionList', $params);

	// Request without parameters
	$response = $client->send('switchvox.directories.getInfo');

# Notes
The `strict_ssl` feature correlates to the [Httpful\Request timeout](http://phphttpclient.com/docs/class-Httpful.Request.html#_withoutStrictSSL).

All Digium Switchvox web service methods can be found [here](http://developers.digium.com/switchvox/wiki/index.php/WebService_methods).

The `send` method returns a [Httpful\Response object](http://phphttpclient.com/docs/class-Httpful.Response.html).

# Testing
To run tests in phpunit you must use your own environment variables for user and password:

	$ SWITCHVOX_USER=<user> SWITCHVOX_PASSWORD=<password> phpunit -v --debug

For development you can get a [free demo Digium Switchbox account](https://www.digium.com/products/switchvox/free-demo).

They will send you a user name and passowrd to your email address.

Once you log into the admin portal take note of the domain name and use that as the uri.

The `uri` property for this client and the phpunit.xml file is pre-populated with:

`https://switchvoxdemo1.digiumcloud.net`

# Requirements
- PHP >= 5.4
- XMLWriter, if using XML, bundled and enabled as of PHP 5.1.2

# Installation

## Composer

Digium Switchvox API is PSR-0 compliant and can be installed using [composer](http://getcomposer.org/).  Simply add `shrimpwagon/digium-switchvox-api` to your composer.json file.  _Composer is the sane alternative to PEAR.  It is excellent for managing dependencies in larger projects_.

    {
        "require": {
            "shrimpwagon/digium-switchvox-api": "*"
        }
    }

# Contributing

Digium Switchvox API highly encourages sending in pull requests.  When submitting a pull request please:

 - All pull requests should target the `dev` branch (not `master`)
 - Make sure your code follows the [coding conventions](http://pear.php.net/manual/en/standards.php)
 - Please use soft tabs (four spaces) instead of hard tabs
 - Make sure you add appropriate test coverage for your changes
 - Run all unit tests in the test directory via `phpunit ./tests`
 - Include commenting where appropriate and add a descriptive pull request message

# Changelog

## 1.0.0

 - Basic funcationality to call API methods with XML or JSON

