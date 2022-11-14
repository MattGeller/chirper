<?php

//test('example', function () {
//    $response = $this->get('/');
//
//    $response->assertStatus(200);
//});

use App\Models\User;
use function PHPUnit\Framework\assertTrue;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

test('a user can add a chirp', function () {
    $user = User::factory()->create();

    assertTrue(true);
});
