# Digium Switchvox API

[![Build Status](https://secure.travis-ci.org/shrimpwagon/digium-switchvox-api.png?branch=master)](http://travis-ci.org/shrimpwagon/digium-switchvox-api) [![Latest Stable Version](https://poser.pugx.org/shrimpwagon/digium-switchvox-api/v/stable)](https://packagist.org/packages/shrimpwagon/digium-switchvox-api) [![Total Downloads](https://poser.pugx.org/shrimpwagon/digium-switchvox-api/downloads)](https://packagist.org/packages/shrimpwagon/digium-switchvox-api) [![License](https://poser.pugx.org/shrimpwagon/digium-switchvox-api/license)](https://packagist.org/packages/shrimpwagon/digium-switchvox-api)

PHP wrapper for the Digium Switchvox API.

[Digium Doc: Get Started](http://developers.digium.com/switchvox/?pageView=getStarted)

[Digium Doc: Test Suite](http://developers.digium.com/switchvox/?pageView=testSuite)

# Features
This makes simple Switchvox's requests.

Digium's [PHP client library](http://developers.digium.com/switchvox/?pageView=phpLibrary) requires a PEAR and PECL package whereas this implementation does not require them.

# Usage
...coming soon

# Requirements
- PHP >= 5.0
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

## 0.1.0

 - Initialized project

