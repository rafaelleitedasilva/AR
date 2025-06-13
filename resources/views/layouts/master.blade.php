<!DOCTYPE html>
<html lang="pt-br">
    <!-- Site dedicado para a mulher mais linda desse mundo. -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>AR</title>
    <link rel="shortcut icon" href="{{ Vite::asset('resources/favicon/favicon.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    @include('layouts.styles')
</head>


<body>
    @include('layouts.header')
    @yield('content')

    @extends('layouts.footer')
</body>

</html>
