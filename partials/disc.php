<div class="row gy-4 gx-5 row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xxl-5">
    <?php foreach ($data['response'] as $disc) : ?>
        <div class="col">
            <div class="card_album text-center p-4">
                <div class="img">
                    <img src="<?= $disc['poster'] ?>" alt="<?= $disc['title'] ?>" />
                </div>
                <div class="text">
                    <h4><?= $disc['title'] ?></h4>
                    <h5><?= $disc['author'] ?></h5>
                    <h6><?= $disc['year'] ?></h6>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>