<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>ASSA Stock System</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
    <style>
        .bg-light {
            background-color: #eae9e9 !important;
        }
    </style>
</head>

<body>
    <div id="app" class="wrapper">
        <header id="appHeader" class="app-header">
            <app-header></app-header>

        </header>
        <main id="appMain" class="app-main">
            <router-view></router-view>
        </main>
        <footer id="appFooter" class="app-footer">
            <app-footer>

            </app-footer>
        </footer>
    </div>

    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>


</html>
