<?php
include 'common.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mediastar</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div id="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $base_url;?>mediastar/">
                    <img src="<?php echo $base_url;?>mediastar/assets/mediastar-logo.jpg" alt="mediastar" width="85"
                        height="70">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="navbar-nav">
                        <a href="<?php echo $base_url;?>mediastar/reporter-registration/" class="btn btn-dark m-1" type="button">Registration</a>
                        <a href="<?php echo $base_url;?>mediastar/card-download/" class="btn btn-dark m-1" type="button">Card Download</a>
                        <a href="<?php echo $base_url;?>mediastar/letter-download/" class="btn btn-dark m-1" type="button">PRO Letter Download</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <hr class="border border-danger border-2 opacity-50 m-0">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

