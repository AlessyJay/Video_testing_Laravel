<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <div>
        <h1>Cute tiger video with controls</h1>
        <video height={"850"} width={"1200"} controls>
            <source src="{{ URL::asset('sources/Cute_Tiger_Meow.mp4') }}" type="video/mp4" />
            Your browser does not support HTML video.
        </video>

        <h2>This is the "controls" function of video</h2>

        <h1>Cute tiger video with autoplay muted</h1>
        <video height={"850"} width={"1200"} autoplay muted>
            <source src="{{ URL::asset('sources/Cute_Tiger_Meow.mp4') }}" type="video/mp4" />
            Your browser does not support HTML video.
        </video>

        <h2>This is the "autoplay and muted" function of video</h2>

        <h1>Cute tiger video with custom buttons</h1>
        <video id="tigerVideo">
            <source src="{{ URL::asset('sources/Cute_Tiger_Meow.mp4') }}" type="video/mp4" />
            Your browser does not support HTML video.
        </video>
        <br>
        <button id="playPauseBtn">Play</button>

        <h2>This is the "custom buttons" function of video</h2>

        <hr>
    </div>

    <script src='{{ URL::asset('Services/Button.js') }}'></script>
</body>

</html>
