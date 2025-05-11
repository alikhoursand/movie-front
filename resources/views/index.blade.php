<!doctype html>
<html lang="fa" dir="rtl" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.site_name')}}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-base-100">
@include('components.navbar')

@yield('content')

@include('components.footer')
</body>
</html>
