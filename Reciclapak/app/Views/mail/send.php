<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <style>
        img{
        display: block;
        margin: auto;
        }
    </style>
    <title>Correo</title>
</head>

<body>
    <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
        <tr>
            <td style="background-color: rgba(0, 0, 0, 0.295); text-align: center; padding: 0">
                <a href="https://reciclapak.mx">
                    <img width="40%"  src="https://i.postimg.cc/zBtPxnWS/reciclapaklogo2.png">
                </a>
            </td>
        </tr>

        <tr>
            <td style="background-color: #ecf0f1">
                <div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
                    <h2 style="color: #f82626; margin: 0 0 7px">Se han puesto en contacto contigo desde la página oficial de <b>Reciclapak</b></h2>
                    <h4><b>Nombre:</b> <?= $nombre ?></h4>
                    <h4><b>Correo electronico: </b> <?= $correo ?></h4>
                    <h4><b>Teléfono:</b> <?= $telefono ?></h4>
                    <p style="margin: 2px; font-size: 15px">
                        <?= $mensaje ?>.</p>
                    <br>
<!--                     <div style="width: 100%; text-align: center">
                        <a style="text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; background-color: #3498db" href="https://sisi.calbun.com">Ir a la página</a>
                    </div> -->
                    <p style="color: rgba(0, 0, 0, 0.308); font-size: 12px; text-align: center;margin: 30px 0 0">Reciclapak - 2022</p>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>