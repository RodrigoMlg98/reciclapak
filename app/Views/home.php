<?= $this->extend('template/plantilla') ?>
<?= $this->section('content') ?>
 <div class="section" style="min-height: 16.5vh;background-color:rgb(255,255,255)"></div>

 <div class="owl-carousel owl-theme">
      <div class="item">
      
        <h4 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOutDown">Cintas especializadas</h4>
        <p data-animation-in="rollIn" data-animation-out="animate-out rollOut">Tus productos estaran seguros</p>
        
      </div>
      <div class="item">
        <h4 data-animation-in="flipInY" data-animation-out="animate-out fadeOutUp">Plastico de burbujas</h4>
        <p data-animation-in="flipInX" data-animation-out="animate-out fadeOutLeft">Para embalaje, empaque y mudanzas</p>
        
      </div>
      <div class="item">
        <h4 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOutUp">Pelicula estirable</h4>
        <p data-animation-in="rollIn" data-animation-out="animate-out fadeOut">Recubrimiento y proteccion de productos envasados, con la mejor calidad y precio</p>
       
      </div>
  </div>
 <!--  <difv class="section ">
    <div class="container"> 
        <h1 class="recicla">Reciclapak</h1>
        <h3><b>Reciclapak, fabricante de poliburbuja y distribuidor, con más de 15 años de experiencia en la industria del empaque.</b></h3>

</div>
</difv> -->
<section class="showcase">
    <img src="/images/carrusel/marca.jpg" alt="Picture">
    <div class="overlay">
      <h2>Reciclapak</h2>
      <p>
      Reciclapak, fabricante de poliburbuja y distribuidor, con más de 15 años de experiencia en la industria del empaque.
      </p>
    </div>
  </section>



<div class="section ">
    <div class="container">
        <div class="row">
            <h2 class="home-titles">Catalogo de Productos</h2>
             <!-- <?php foreach ($categorias as $cat): ?>
                <div onclick="myFunction('<?= ucfirst(strtolower(htmlentities($cat['nombre']))) ?>')" class="col-md-4" >
                        <div class="panel panel-default producto ">
                            <div class="panel-heading" style="padding:0">
                                <?php if ($cat['img']==null): ?>
                                    <img class="img-thumbnail producto_imagen" src="<?= base_url() ?>/images/productos/no_photo.png" alt="" srcset="">
                                <?php else: ?>
                                    <img class="img-thumbnail producto_imagen" src="<?= base_url() ?>/images/productos/<?= $cat['img'] ?>" alt="Reciclapak - <?= ucfirst(strtolower(htmlentities($cat['nombre']))) ?>" srcset="">
                                <?php endif ?>
                            </div>
                            <div class="panel-body">
                                <h3><?= ucfirst(strtolower(htmlentities($cat['nombre']))) ?></h3>
                            </div>
                        </div>
                </div>
            <?php endforeach ?> -->
            <?php foreach ($categorias as $cat): ?>
                <div onclick="myFunction('<?= ucfirst(strtolower(htmlentities($cat['nombre']))) ?>')" >
            <div class="col-xs-3 ">
            <div class="card">
                  <a class="img-card" href="<?= base_url() ?>/Productos">
                  <?php if ($cat['img']==null): ?>
                  <img class="img-thumbnail producto_imagen" src="<?= base_url() ?>/images/productos/no_photo.png" alt="" srcset="" />
                  <?php else: ?>
                    <img class="img-thumbnail producto_imagen" src="<?= base_url() ?>/images/productos/<?= $cat['img'] ?>" alt="Reciclapak - <?= ucfirst(strtolower(htmlentities($cat['nombre']))) ?>" srcset="">
                                <?php endif ?>
                </a>
                  <div class="card-content">
                      <h4 class="card-title">
                          <a href="<?= base_url() ?>/Productos"><?= ucfirst(strtolower(htmlentities($cat['nombre']))) ?>
                        </a>
                      </h4>
                     
                      <div class="clearfix"></div>
                  </div>
                 
              </div>

        </div>
    </div>
    <?php endforeach ?>
</div>
                                </div>

<div class="section">
    <div class="container">
        <div class="row">
            <h2 class="recicla">POR QUÉ ELEGIRNOS</h2>
            <br>
            <br>
           <div class="row">
            <div>
        
            <div class="col-md-5">
                <div class="info-icon" >
                    <div class="icon text-danger">
                        <i class="fa fa-money" style="color: #cc1000;"></i>
                    </div>
                    <h3 style="color: #333333;"><b>Pecios competitivos </b></h3>
                    <ul class="description" style="list-style:none;padding-left: 0px;">
                        <li>Nuestros precios se ajustan a tu presupuesto</li>
                                </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="info-icon">
                    <div class="icon text-danger">
                        <i class="	fas fa-box-open" style="color: #cc1000;"></i>
                    </div>
                    <h3 style="color: #333333;"><b>Variedad de Productos</b></h3>
                    
                    <ul class="description" style="list-style:none;padding-left: 0px;">
                        <li>Contamos con lo que necesitas</li>
                                </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="info-icon">
                    <div class="icon text-danger">
                        <i class="fas fa-shipping-fast" style="color: #cc1000;"></i>
                    </div>
                    <h3 style="color: #333333;"><b>Envío Rapido y Seguro</b></h3>
                   
                    <ul class="description" style="list-style:none;padding-left: 0px;">
                        <li>Envios gratis a todo CDMX</li>
                                </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="info-icon">
                    <div class="icon text-danger">
                        <i class="fas fa-money-bill-wave-alt" style="color: #cc1000;"></i>
                    </div>
                    <h3 style="color: #333333;"><b>Diversas Formas de Pago</b></h3>
                    <ul class="description" style="list-style:none;padding-left: 0px;">
                        <li>Transferencia</li>
                        <li>Depósito Bancario</li>
                        <li>Tarjetas de Débito y Crédito (cobro con terminal)</li>
                    </ul>
                </div>
            </div>
            </div> 
        
        </div>
    </div>
</div>

<?= $this->endSection() ?>


</div>




<?= $this->section('footer') ?>
<script src="<?= base_url() ?>/js/home.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/js/axios.js"></script>
<script>
    const contacto = $('#contacto');
    contacto.on('submit', (e) => {
        e.preventDefault();
        let data = $('#contacto').serialize();
        axios.post('/send', data).then(resp => {
            let status = resp.data.result;
            if (status == "succesfull") {
                alert('Mensaje enviado correctamente');
                location.reload();
            } else {
                alert('Ocurrio un error al mandar el mensaje');
            }
        });
    })
</script>
<?= $this->endSection() ?>