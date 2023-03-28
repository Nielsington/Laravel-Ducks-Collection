<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>LaraBlade</title>
</head>

<body class="bg-emerald-700 flex flex-col min-h-screen"> 

    @yield('header')
    @yield('nav')

    <main class="flex-grow">
        @yield('form')
    </main>
    
    <footer class="bg-slate-500	mt-auto text-center">
        <p>&copy; 2023 - LaraBlade</p>
    </footer>
</body>
</html>