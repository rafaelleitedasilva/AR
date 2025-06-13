<?php

use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('make:user', function () {
    $email    = $this->ask('Digite um e-mail');
    $name     = $this->ask('Digite o nome');
    $password = $this->secret('Digite a senha');

User::create(['email' => $email, 'name' => $name, 'password' => Hash::make($password)]);

$this->info('Usuário criado com sucesso!');
})->describe('Comando de teste');
