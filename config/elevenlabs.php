<?php

/**
 * Configuration for Elevenlabs API integration.
 *
 * This configuration manages settings related to integrating
 * with the Elevenlabs API for your Laravel application.
 *
 * @package App
 * @subpackage Config
 */
return [

    /*
    |--------------------------------------------------------------------------
    | Elevenlabs API Base URL
    |--------------------------------------------------------------------------
    |
    | Here you may specify the base URL for the Elevenlabs API.
    | This is the root URL where all API requests will be directed.
    |
    */
    'base_url' => env('ELEVEAN_LAB_API_BASE_URL', 'https://api.elevenlabs.io'),

    /*
    |--------------------------------------------------------------------------
    | Elevenlabs API Key
    |--------------------------------------------------------------------------
    |
    | This key is required to authenticate with the Elevenlabs API.
    | You should obtain this key from Elevenlabs and securely store it here.
    |
    */
    'api_key' => env('ELEVEAN_LAB_API_KEY'),

    'storage' => [
        'disk' => env('ELEVEAN_LAB_STORAGE_DISK', config('filesystems.default')),
        'path' => [
            'textToSpeech' => 'envelope/text-to-speech',

            'textToSpeechStream' => 'envelope/text-to-speech-stream',

            'speechToSpeech' => 'envelope/speech-to-speech',
        ],
    ],
];
