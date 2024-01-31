<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo App</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('scripts')
    @yield('styles')

</head>

<body>
    <nav>
        <img src="./" class="brand" />
        <span> Fancy TODO App </span>
    </nav>
    <main>
        <div class="sidebar">
            <ul>
                <li class="checked"><a href="#">All</a></li>
                <li><a href="#">Complete</a></li>
                <li><a href="#">Incomplete</a></li>
                <li><a href="#">Due Soon</a></li>
                <li><a href="#">Overdue</a></li>
            </ul>
        </div>
        <div>
            <div class="error">
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            @yield('content')
        </div>
    </main>
</body>

</html>
