<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('CSS/__global.css') }}">
    <title>Final Project 5</title>
</head>

<body>
    <div class="container">
        <?php
        echo view('firstTask');
        echo view('secondTask');
        echo view('thirdTask');
        echo view('forthTask');
        ?>
    </div>
</body>

</html>
