<?php

use Illuminate\Support\Facades\Route;
use Spatie\Visit\Client;

beforeEach(function () {
    Route::get('get-route', function () {
        return 'get result';
    });

    Route::post('post-route', function () {
        return request()->all();
    });
});

it('can perform a get request', function () {
    $content = Client::make()->get('/get-route')->content();

    expect($content)->toBe('get result');
});

it('can perform a post request', function () {
    $statusCode = Client::make()->post('/post-route')->getStatusCode();
    expect($statusCode)->toBe(200);
});

it('can perform a post request with data', function () {
    $content = Client::make()->post('/post-route', $data = [
        "username" => "cemil",
        "email" => "cemil@akko.cc"
    ])->getOriginalContent();
    
    expect($content)->toBe($data);
});
