<?= $this->extend('template/plantilla') ?>
<?= $this->section('content') ?>
<div class="section section-header" style="min-height: 120px;"></div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Deja tus datos, nos pondremos en contacto.</h2>
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
                    <div class="col-md-12">
                        <h2>Contactenos</h2>
                    </div>
                    <div class="col-md-12">
                        <p class="lead"><i class="fab fa-whatsapp"></i> <a id="linkM" class="font-weight-bold" href="https://api.whatsapp.com/send?phone=52+5589135273&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20algun%20producto."> (+52) 55-8913-5273</a></p>
                    </div>
                    <div class="col-md-12">
                        <p class="lead"><i class="fas fa-phone"></i>(+52) 55-8913-5272</p>
                    </div>
                    <div class="col-md-12">
                        <p class="lead"><i class="fas fa-at"></i> <a id="linkM" class="font-weight-bold" href="mailto:reciclapak@gmail.com"> reciclapak@gmail.com </a></p>
                    </div>
                    <div class="col-md-12">
                        <p class="lead">
                            <i class="fas fa-map-marker-alt"></i>
                            09310 Leyes de Reforma Tercera Sección, Distrito Federal, Mexico
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

