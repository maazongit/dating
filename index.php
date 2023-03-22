<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loader</title>
    <link rel="stylesheet" href="preloder.css">
    <script src="script.js"></script>
</head>

<body>

    <div class="flex-container" id="overlay">
        <div class="unit">
            <div class="heart">
                <div class="heart-piece-0"></div>
                <div class="heart-piece-1"></div>
                <div class="heart-piece-2"></div>
                <div class="heart-piece-3"></div>
                <div class="heart-piece-4"></div>
                <div class="heart-piece-5"></div>
                <div class="heart-piece-6"></div>
                <div class="heart-piece-7"></div>
                <div class="heart-piece-8"></div>
            </div>
            <p>loading...</p>
        </div>
    </div>

    <div class="container" id="main" style="display: none;">
        <h1>HELLO WORLD</h1>
    </div>

    <script>
        var overlay = document.getElementById("overlay");
        setTimeout(() => {
            overlay.style.display = 'none';
            document.getElementById("main").style.display = 'block';
        }, 3000);
    </script>
</body>

</html>