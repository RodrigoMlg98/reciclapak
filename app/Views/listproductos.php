<?= $this->extend('template/plantilla') ?>
<?= $this->section('content') ?>
    <div class="section section-header" style="min-height: 120px;"></div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align:center"><h2><?= $categoria ?></h2></div>
                <?php foreach($productos as $listProductos): ?>
                    <div class="col-md-4">
                        <?php if( isset($listProductos['modelo']) ): ?>
                            <div onclick="myFunction('/productos?q=<?= ucfirst(strtolower(htmlentities($listProductos['nombre']))) ?>&m=<?= ucfirst(strtolower(htmlentities($listProductos['modelo']))) ?>')" >
                        <?php else: ?>
                            <div onclick="myFunction('/productos?q=<?= ucfirst(strtolower(htmlentities($listProductos['nombre']))) ?>')"  >
                        <?php endif ?>
                            <div class="panel panel-default producto">
                                <div class="panel-heading" style="padding:0">
                                    <?php if($listProductos['img']==NULL): ?>
                                        <img class="img-thumbnail producto_imagen" src="<?= base_url() ?>/images/productos/no_photo.png" alt="" srcset="">
                                    <?php else: ?>
                                        <img class="img-thumbnail producto_imagen" src="<?= base_url() ?>/images/productos/<?= $listProductos['img'] ?>" alt="" srcset="">
                                    <?php endif ?>
                                </div>
                                <div class="panel-body">
                                    <h3 class="mp-1">
                                        <?= ucfirst(strtolower(htmlentities($listProductos['nombre']))) ?>
                                        <?php if($listProductos['modelo']) : ?>
                                            <?= ' - Modelo '.ucfirst(strtoupper($listProductos['modelo'])) ?>
                                        <?php endif ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div> 
                <?php endforeach ?>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>