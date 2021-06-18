<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Movies Project</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">

    <style>
        header nav a.current {
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('partials.header', [
        'current' => $current_menu_item ?? null
    ])
    
    <h1>Movies Project</h1>
    
    @include('partials.messages')
    @yield('content')
</body>
</html>