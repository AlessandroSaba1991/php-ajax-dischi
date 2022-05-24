<?php
require __DIR__ . '/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AJAX Dischi</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header class="d-flex py-3 px-4">
        <div class="logo">
            <img src="./assets/img/spotify.png" alt="logo spotify" />
        </div>
    </header>
    <main class="py_5">
        <section class="albums py-3">
            <div class="container">
                <div class="row gy-4 gx-5 row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xxl-5">
                    <?php foreach ($data['response'] as $disc) : ?>
                    <div class="col">
                        <div class="card_album text-center p-4">
                            <div class="img">
                                <img src="<?= $disc['poster']?>" alt="<?= $disc['title']?>" />
                            </div>
                            <div class="text">
                                <h4><?= $disc['title']?></h4>
                                <h5><?= $disc['author']?></h5>
                                <h6><?= $disc['year']?></h6>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
</body>

</html>