<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laracars</title>
    @vite(["resources/css/app.scss", "resources/js/app.js"])
    <style>

    </style>
</head>
<body>
        <div class="wrapper">
            @include("layouts.partials.header")
            @yield("content")
        </div>
</body>
</html>
