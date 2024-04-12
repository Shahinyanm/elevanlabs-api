# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shahinyanm/elevenlabs-api.svg?style=flat-square)](https://packagist.org/packages/shahinyanm/elevenlabs-api)
[![Total Downloads](https://img.shields.io/packagist/dt/shahinyanm/elevenlabs-api.svg?style=flat-square)](https://packagist.org/packages/shahinyanm/elevenlabs-api)
![GitHub Actions](https://github.com/shahinyanm/elevenlabs-api/actions/workflows/main.yml/badge.svg)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require hyperspace/elevenlabs-api
```

```bash
php artisan vendor:publish
```
## Configuration 

```bash
 cp .env.example .env And add required values
 ```

You need to write ``` ELEVEAN_LAB_API_KEY ``` in .env with the value
You need to write ``` ELEVEAN_LAB_API_BASE_URL ``` in .env with the value
You need to write ``` ELEVEAN_LAB_STORAGE_DISK ``` in .env with the value for default file system disk name 

## Usage

```php
use Hyperspace\ElevenlabsConvertService;

$elevanLabService = new ElevenlabsConvertService();
$voiceId = 'someVoiceId';
$modelId = 'SomeId';
$text='Some text  for convert'
$elevanLabService->convertTextToSpeech($voiceId,$modelId,$text);
```
