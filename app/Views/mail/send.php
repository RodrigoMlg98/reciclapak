<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Correo</title>
</head>

<body>
    <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
        <tr>
            <td style="background-color: rgba(0, 0, 0, 0.75); text-align: left; padding: 0">
                <a href="http://packmac.com.mx">
                    <img width="10%" style="display:block; margin: 1.5% 3%" src="https://i.postimg.cc/cL0Hc3L6/logo.png">
                </a>
            </td>
        </tr>

        <tr>
            <td style="background-color: #ecf0f1">
                <div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
                    <h2 style="color: #f89b26; margin: 0 0 7px">Se han puesto en contacto contigo desde la pagina oficial de <b>PackMac</b></h2>
                    <h4><b>Nombre:</b> <?= $nombre ?></h4>
                    <h4><b>Correo electronico: </b> <?= $correo ?></h4>
                    <h4><b>Teléfono:</b> <?= $telefono ?></h4>
                    <p style="margin: 2px; font-size: 15px">
                        <?= $mensaje ?>.</p>
                    <br>
<!--                     <div style="width: 100%; text-align: center">
                        <a style="text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; background-color: #3498db" href="https://sisi.calbun.com">Ir a la página</a>
                    </div> -->
                    <p style="color: #23a3dd; font-size: 12px; text-align: center;margin: 30px 0 0">PackMac - 2021</p>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>