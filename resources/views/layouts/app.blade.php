<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBlog  | Modern Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="bg-gray-50 font-sans">

@include('layouts._header')

@yield('content')

@include('layouts._footer')

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
