<?= $this->extend('template/plantilla') ?>
<?= $this->section('content') ?>
<div class="section" style="min-height: 16.5vh;background-color:rgb(255,255,255)"></div>
        <!--  <div class="owl-carousel owl-theme">
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
          </div> -->
        <!--  <difv class="section ">
            <div class="container"> 
                <h1 class="recicla">Reciclapak</h1>
                <h3><b>Reciclapak, fabricante de poliburbuja y distribuidor, con más de 15 años de experiencia en la industria del empaque.</b></h3>
        </div>
        </difv> -->
        <div class="owl-carousel owl-theme">
          <div class="owl-slide d-flex align-items-center cover" style="background-image: url(/images/carrusel/reciclapak1.png) ">
            <div class="container">
              <div class="row justify-content-center justify-content-md-start">
                <div class="col-10 col-md-6 static">
                  <div class="owl-slide-text">
                    <h1 class="owl-slide-animated owl-slide-title"><br>
                    <br>
                    <br> <br>
                    <br>
                    <br> <br>Cintas especializadas</h1>
                    <div class="owl-slide-animated owl-slide-subtitle mb-3">
                  <p><h2>Tus productos estaran seguros</h2></p>  
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>
          </div><!--/owl-slide-->

          <div class="owl-slide d-flex align-items-center cover" style="background-image: url(/images/carrusel/marca.jpg);">
            <div class="container">
              <div class="row justify-content-center justify-content-md-start">
                <div class="col-10 col-md-6 static">
                  <div class="owl-slide-text">
                    <h1 class="owl-slide-animated owl-slide-title"> <br>
                    <br>
                    <br> <br>
                    <br>
                    <br> <br>Plastico de burbujas.</h1>
                    <div class="owl-slide-animated owl-slide-subtitle mb-3">
                  <p> <h2>Para embalaje, empaque y mudanzas</h2></p> 
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div><!--/owl-slide-->

          <div class="owl-slide d-flex align-items-center cover" style="background-image: url(/images/carrusel/reciclapak1.png);">
            <div class="container">
              <div class="row justify-content-center justify-content-md-start">
                <div class="col-10 col-md-6 static">
                  <div class="owl-slide-text">
                    <h1 class="owl-slide-animated owl-slide-title"> <br>
                    <br>
                    <br> <br>
                    <br>
                    <br> <br>Pelicula estirable</h1>
                    <div class="owl-slide-animated owl-slide-subtitle mb-3">
                        <p> <h2>Recubrimiento y proteccion de productos envasados, con la mejor calidad y precio</h2> </p>
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>
          </div><!--/owl-slide-->
        </div>
        <br>
        <br>
<!--         <div class="section" style="padding-top: 2em">
        <section class="showcase" >
            <img src="/images/carrusel/marca.jpg" alt="Picture">

          </section> -->
  </div>






<div class="section " >
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
            <?php foreach ($productos as $cat): ?>
                <div onclick="myFunction('Productos')" >
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
                      <h4 class="card-title boxp">
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
                  </div>
                  <div class="parallax">
    
    <h1 class="conthom">  Reciclapak</h1>
    <h3  class="conthom">Reciclapak, fabricante de poliburbuja y distribuidor, con más de 15 años de experiencia en la industria del empaque.</h3>
     
    </div>

<div>

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
</div>

<?= $this->endSection() ?>







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