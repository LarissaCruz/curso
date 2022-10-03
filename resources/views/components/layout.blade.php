<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>{{$title}}</title>

    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark " style="padding-left:20px;  ">
            <a class="navbar-brand d-flex" style="align-items: inherit;" href="#">
                <img src="/logo.png" width="45" height="45" alt="">
                <span style="font-size: 24px; font-weight: 500;">SUAP</suap>
            </a>
        </nav>
        <div class="container pt-5">
            {{$slot}}
        </div>

    </body>
</html>
