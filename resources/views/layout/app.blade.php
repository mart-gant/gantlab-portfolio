<!DOCTYPE html>
<html lang="pl" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Marcin Gant – Portfolio')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="@yield('description', 'Portfolio programisty – Laravel, Flutter, aplikacje webowe')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 antialiased">

@include('components.header')

<main>
    @yield('content')
</main>

@include('components.footer')

</body>
</html>
