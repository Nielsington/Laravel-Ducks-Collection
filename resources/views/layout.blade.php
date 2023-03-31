<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraBlade</title>
    @vite('resources/css/app.scss')
</head>

<body class="bg-cyan-900 flex flex-col min-h-screen"> 
    
    @yield('header')
    <x-navigation />
    <main class="flex-grow">
        @yield('form')
        @yield('about')
    </main>
    
    <footer class="bg-slate-500	mt-auto text-center">
        <p>&copy; 2023 - LaraBlade</p>
    </footer>
</body>
</html>