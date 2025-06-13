<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>AR</title>
    <link rel="shortcut icon" href="{{ Vite::asset('resources/favicon/favicon.png') }}" type="image/x-icon">
    @include('layouts.styles')
</head>

<body>
    @include('layouts.header')

    {{ $slot }}

    @extends('layouts.footer')
</body>

</html>
