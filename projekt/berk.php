<?php
$mange = json_decode(file_get_contents('mange.json'), true);
$stranice = simplexml_load_file('stranice.xml');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berserk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        h1:hover{
            transform: scale(1.10);
            -webkit-transition: transform 0.5s ease-out;
            -moz-transition:    transform 0.5s ease-out;
            -ms-transition:     transform 0.5s ease-out;
            -o-transition:      transform 0.5s ease-out;
            transition:         transform 0.5s ease-out;
        }
        h4:hover{
            transform: scale(1.10);
            -webkit-transition: transform 0.5s ease-out;
            -moz-transition:    transform 0.5s ease-out;
            -ms-transition:     transform 0.5s ease-out;
            -o-transition:      transform 0.5s ease-out;
            transition:         transform 0.5s ease-out;
        }
        div.s{
            transform: scale(1.7);
            float: right;
            margin-right: 100px;
            margin-top: 140px;
        }
        div.p{
            width: 60%;
        }
    </style>
  </head>
  <body class="bg-body-tertiary">
    <nav class="navbar navbar-expand-lg bg-secondary-subtle">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/projekt/home.php"><h1 class="display-4 ps-5">MANGA</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php foreach($mange as $m) { ?>
                        <li class="ps-5 nav-item">
                            <a class="nav-link" href="<?php echo $m["link"]; ?>"><h4><?php echo $m["name"]; ?></h4></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <section class="container container-fluid s-1">
        <?php foreach ($stranice->mange->berk as $s): ?>
        <div class="container container-fluid mt-5">
            <div class="s" class="container container-fluid">
                <img src="slike/<?php echo $s->pic; ?>.jpg" alt="o">
            </div>
            <div>
            <h3><b>Name: </b><?php echo $s->name; ?></h3>
            <h3><b>Author: </b><?php echo $s->author; ?></h3>
            <h3><b>Genre: </b><?php echo $s->genre; ?></h3>
            <h3><b>Demographic: </b><?php echo $s->demographic; ?></h3>
            <h3><b>Status: </b><?php echo $s->status; ?></h3>
            <h3><b>Published: </b><?php echo $s->published; ?></h3>
            <h3><b>Volumes: </b><?php echo $s->volumes; ?></h3>
            <h3><b>Chapters: </b><?php echo $s->chapters; ?></h3>
            </div>
        </div>
        <div class="p" class="container container-fluid pb-4">
            <h3 class="pb-2 ps-2 ms-1"><b>Synopsis: </b></h3>
            <h5 class="ps-2 ms-1"><?php echo $s->synopsis; ?></h5>
        </div>
        <?php endforeach; ?>
    </section>
    <footer class="pt-5">
        <br>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>