<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="mx-auto py-8 px-6 max-w-5xl">

        @yield('content')
        
    </div>
</body>
</html>