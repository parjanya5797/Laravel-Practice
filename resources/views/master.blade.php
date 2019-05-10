<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/app.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="image/1.jpeg" alt="image">
                <nav>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </nav>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                &copy; 2019,merosite.com, All rights reserved.
            </div>
        </div>
    </div>
</body>
</html>