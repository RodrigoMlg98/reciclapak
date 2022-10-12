<?= $this->extend('template/plantilla') ?>
<?= $this->section('content') ?>
    <div class="section section-header" style="min-height: 120px;"></div>
    <div class="section">
        <div class="container">
            <div class="row" style="padding-top:30px">
                <div class="col-md-12" style="text-align:center"><h2><?= $categoria ?></h2></div>
                <div class="col-md-12" style="text-align:center"><h2>Por el momento no contamos con productos en esta categoria</h2></div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>