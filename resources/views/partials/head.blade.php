{{-- Partials / head.blade.php --}}

<head>
    <meta charset="utf-8">

    {{-- Title --}}
    <title>
      @yield("title")
    </title>
    {{-- Title --}}

    {{-- Viewport --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Google fonts --}}
    {{-- -> Roboto --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
