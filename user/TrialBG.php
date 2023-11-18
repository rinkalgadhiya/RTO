<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trial</title>
    <style>
    .img1
    {
        position: absolute;
        top: 10px;
        left: 10px;
        animation-name:fall;
        animation-duration: 2s;
        animation-iteration-count: infinite;
    }
    @keyframes fall
    {
        0%{top: 10px}
        100%{bottom: 700px}
    }
    </style>
</head>

<body>
    <div class="img1">
        <img src="car.png" height="100px" width="100px">
    </div>
</body>
</html>