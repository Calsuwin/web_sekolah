<!DOCTYPE html>
<html lang="en">
<style>
  body {
    zoom: 0.9;
  }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Layouts')</title>
<link rel="icon" type="image/png" href="{{ asset('storage/images/smk.png') }}">
    {{-- Tambahkan CSS & JS di sini --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style></style>
</head>

<body>

    {{-- Header --}}
    @include('layouts.header')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
