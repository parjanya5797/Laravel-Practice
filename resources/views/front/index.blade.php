<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Hello {{ $name }} ,Welcome to Our site</h1>
    <p>This website is under construction and only for educational purpose</p>
    <!--using traditional php-->
    <?php
    echo"<h1>Hello again ,".$name."</h1>";
    ?>
    <!--using for in laravel-->
    @for($i=1;$i<=10;$i++)
    {{ $i }}
    @endfor
    <!-- For controller-->
</body>
</html>