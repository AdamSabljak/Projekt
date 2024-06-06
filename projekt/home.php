<?php
$mange = json_decode(file_get_contents('mange.json'), true);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Manga</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        h6{
            transform: scale(1.05);
        }
        h6:hover{
            transform: scale(1.1);
            -webkit-transition: transform 0.5s ease-out;
            -moz-transition:    transform 0.5s ease-out;
            -ms-transition:     transform 0.5s ease-out;
            -o-transition:      transform 0.5s ease-out;
            transition:         transform 0.5s ease-out;
        }
        h1{
            transform: scale(2);
        }
    </style>
    </head>
    <body class="bg-body-tertiary">
        <div class="position-absolute p-4 pt-5 pb-5 top-50 start-50 translate-middle bg-secondary-subtle">
            <figure class="text-center">
                <blockquote class="blockquote pt-4 pb-4">
                    <h1 class="display-1">MANGA</h1>
                </blockquote>
                <figcaption class="blockquote-footer pt-4">
                    Some of the best manga I have read
                </figcaption>
            </figure>
            <nav class="navbar navbar-expand-lg pb-4">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <?php foreach($mange as $m) { ?>
                            <li class="nav-item">
                                <a class="nav-link ps-3" href="<?php echo $m["link"]; ?>"><h6><?php echo $m["name"]; ?></h6></a>
                            </li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>