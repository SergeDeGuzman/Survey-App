<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div>
                <a href="/login">
                
                <img src="/Logo.png" width="170" 
                height="170" >
                </a>
                
                    
            </div>
            <h4>
                    QuickSurvey
                </h4>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
<html>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: "Goudy Bookletter 1911", sans-serif;
    background: linear-gradient(to right, #b92b27, #1565c0)
}


h4 {
            font-size: 2em;
            color: #F68200;
            text-transform: uppercase;
            letter-spacing: 5px;
            position: relative;
        }
        h4::before {
            content: 'QuickSurvey';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            color: #00B9FF ;
            overflow: hidden;
            width: 0;
            transition: width 2s ease;
            border-right: 2px solid white;
            white-space: nowrap;
        }
        h4:hover::before {
            width: 100%;
        }
    </style>
</html>

