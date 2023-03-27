<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-emerald-700">
    <h1 class="text-center text-[2.5rem]">This is Blade!</h1>
    <ul>
        <li><a href="{{route('contact')}}">Contact page</a></li>
        <li><a href="{{route('product')}}">Product page</a></li>
        <li><a href="{{route('about')}}">About page</a></li>
    </ul>
</body>
</html>