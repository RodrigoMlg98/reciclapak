<?= $this->extend('template/plantilla') ?>
<?= $this->section('content') ?>
<div class="section section-header" style="min-height: 120px;"></div>
<div class="sectiomnenu">
<h1 class="contapa">Contacto</h1>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Formulario de Cotización</h2>
                <form action="#" class="form-horizontal" id="contacto">
                    <div class="form-group">
                        <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                <input class="form-control" type="text" name="nombre" id="nombre" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Correo electrónico</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-at"></i></span>
                                <input class="form-control" type="email" name="email" id="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label">Teléfono</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-phone"></i></span>
                                <input class="form-control" type="tel" name="phone" id="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="coment" class="col-sm-2 control-label">Mensaje</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="coment" id="coment" cols="30" rows="10" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control btn btn-primary" style="background-color: #ff2320;color: #000;" type="submit" value="Enviar" id="enviar">
                    </div>
                </form>
                
            </div>
            <div class="col-md-6">
                <div class="row">
                    
                    <div class="col-md-12" >
                        <p class="lead contactspa" ><i class="fab fa-whatsapp"></i> <a id="linkM" class="font-weight-bold" href="https://api.whatsapp.com/send?phone=52+5569325261&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20algun%20producto."> (+52) 55-6932-5261 <b>/</a>
                        <a id="linkM" class="font-weight-bold" href="https://api.whatsapp.com/send?phone=52+5585762980&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20algun%20producto.">   55-8576-2980</a> </p>
                    </div>
                    <!-- <div class="col-md-12">
                        <p class="lead"><i class="fab fa-whatsapp"></i> <a id="linkM" class="font-weight-bold" href="https://api.whatsapp.com/send?phone=52+5585762980&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20algun%20producto."> (+52)  55-8576-2980</a></p>
                    </div> -->
                    <div class="col-md-12">
                        <p class="lead"><i class="fas fa-phone"></i>(+52) 55-8913-5272</p>
                    </div>
                    <div class="col-md-12">
                        <p class="lead"><i class="fas fa-phone"></i>(+52) 55-8913-5273</p>
                    </div>
                    <div class="col-md-12">
                        <p class="lead"><i class="fas fa-phone"></i>(+52) 55-1713-7737</p>
                    </div>
                    <div class="col-md-12">
                        <p class="lead"><i class="fas fa-at"></i> <a id="linkM" class="font-weight-bold" href="mailto:reciclapak@gmail.com"> reciclapak@gmail.com </a></p>
                    </div>
                    <div class="col-md-12">
                        <p class="lead">
                            <i class="fas fa-map-marker-alt"></i>
                            Batalla de Tunas Blancas Mza 71 Lte 721 Col. Leyes de Reforma 3ra sección,

Iztapalapa CP 09310, CDMX

 

Entre Av. Javier Rojo Gómez y 26 de Enero 1857
<p> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d940.9675202491911!2d-99.07799235222508!3d19.37477734995414!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fe15c743ffff%3A0xbeabbbce0e281324!2sReciclapak%20%22Empacando%20tus%20ideas%22!5e0!3m2!1ses!2smx!4v1668546773362!5m2!1ses!2smx" 
    width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('footer') ?>
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

