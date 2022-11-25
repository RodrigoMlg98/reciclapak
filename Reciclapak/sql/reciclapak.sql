-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-03-2021 a las 22:18:26
-- Versión del servidor: 10.3.27-MariaDB-0+deb10u1
-- Versión de PHP: 7.3.19-1+eagle

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `packmac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `img` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `img`) VALUES
(1, 'Material de Empaque y embalaje', 'CAJAS_CARTON.png'),
(2, 'Cintas', 'CINTA_DE_COLORES.png'),
(3, 'Bolsas de polietileno y sobres para e-commerce', 'SOBRES_CON_BURBUJA_AUTOADHESIVOS.jpg'),
(4, 'Flejes', 'FLEJE_TENAX_PET.png'),
(5, 'Herramientas', 'BTX3_Para_flejes_plasticos.png'),
(6, 'Maquinaria', 'MAQUINA_ENCINTADORA.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`) VALUES
(2, 'Janel'),
(3, 'Kraft'),
(1, 'Tuck');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE `modelos` (
  `id` int(11) NOT NULL,
  `modelo` varchar(64) CHARACTER SET utf8mb4 NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `img` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`id`, `modelo`, `descripcion`, `img`, `id_producto`) VALUES
(1, 'VIRGEN-PLAYO', 'Excelente elongación, rendimiento y adherencia', NULL, 1),
(2, 'RECICLADO', 'Misma función que el 100% virgen', NULL, 1),
(3, 'BIODEGRADABLE', 'Se deshace a los 8 meses', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `aplicaciones` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `medidas` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `img` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `modelo`, `descripcion`, `aplicaciones`, `medidas`, `img`, `id_marca`, `id_categoria`) VALUES
(1, 'Poliestretch Film Virgen (Playo)', NULL, 'Es una película de embalaje comúnmente conocida en el mercado como PLAYO, la opción\r\nmás económica para proteger las mercancías del polvo y medio ambiente en la colocación\r\nde tarimas durante su transporte y almacenaje.', 'Proteger tus palet de la suciedad y la intemperie, agrupar, atar y proteger superficies delicadas. Resguardar palets y productos de gran volumen reducir las incidencias en el transporte de tu carga. Minimizar los problemas de entrega del producto a tus clientes e identificar y señalizar tu carga.', '<tr><th>Pulgadas</th><th>Calibre</th><th>Pies</th></tr>\r\n	<tr><td>5</td><td>80</td><td>1200</td></tr>\r\n	<tr><td>18</td><td>50</td><td>1200</td></tr>\r\n	<tr><td>18</td><td>80</td><td>1300</td></tr>\r\n	<tr><td>20</td><td>80</td><td>1300</td></tr>\r\n	<tr><td>18</td><td>80</td><td>1000</td></tr>\r\n	<tr><td>20</td><td>80</td><td>4500</td></tr>', 'POLIESTRETCH_FILM_VIRGEN.jpg', NULL, 1),
(2, 'Poliestretch Film Reciclado (Playo)', NULL, 'Playo 100% reciclado tiene la misma función que el totalmente virgen, pero este playo es un material que ayuda a la economía circular en la industria 4.0 y el medio ambiente; es un sistema de aprovechamiento de recursos que se basa en  apostar por la reutilización de los elementos que por sus características o propiedades no pueden volver al medio ambiente.', 'Proteger tus palet de la suciedad y la intemperie, agrupar, atar y proteger superficies delicadas. Resguardar palets y productos de gran volumen reducir las incidencias en el transporte de tu carga. Minimizar los problemas de entrega del producto a tus clientes e identificar y señalizar tu carga.', '<tr><th>Pulgadas</th><th>Calibre</th><th>Pies</th></tr>\r\n	<tr><td>5</td><td>80</td><td>1200</td></tr>\r\n	<tr><td>18</td><td>50</td><td>1200</td></tr>\r\n	<tr><td>18</td><td>80</td><td>1300</td></tr>\r\n	<tr><td>20</td><td>80</td><td>1300</td></tr>\r\n	<tr><td>18</td><td>80</td><td>1000</td></tr>\r\n	<tr><td>20</td><td>80</td><td>4500</td></tr>', 'PLAYO_RECICLADO.jpg', 2, 1),
(3, 'Poliestretch Film Bioedegradable (Playo)', NULL, 'Es un material que esta innovando la industria en cuanto a empaques y embalajes se refiere ya que cuenta con propiedades que lo vuelven biodegradable; es un material orgánico y se degrada automáticamente a los 8 meses.', 'Proteger tus palet de la suciedad y la intemperie, agrupar, atar y proteger superficies delicadas. Resguardar palets y productos de gran volumen reducir las incidencias en el transporte de tu carga. Minimizar los problemas de entrega del producto a tus clientes e identificar y señalizar tu carga.', '<tr><th>Pulgadas</th><th>Calibre</th><th>Pies</th></tr>\r\n	<tr><td>5</td><td>80</td><td>1200</td></tr>\r\n	<tr><td>18</td><td>50</td><td>1200</td></tr>\r\n	<tr><td>18</td><td>80</td><td>1300</td></tr>\r\n	<tr><td>20</td><td>80</td><td>1300</td></tr>\r\n	<tr><td>18</td><td>80</td><td>1000</td></tr>\r\n	<tr><td>20</td><td>80</td><td>4500</td></tr>', 'PLAYO_BIODEGRADABLE.png', NULL, 1),
(5, 'Poliestretch Film de Colores (Playo)', NULL, 'Es una película de embalaje comúnmente conocida en el mercado como PLAYO, la opción más económica para proteger las mercancías del polvo y medio ambiente en la colocación de tarimas durante su transporte y almacenaje.', 'Proteger tus palet de la suciedad y la intemperie, agrupar, atar y proteger superficies delicadas. Resguardar palets y productos de gran volumen reducir las incidencias en el transporte de tu carga. Minimizar los problemas de entrega del producto a tus clientes e identificar y señalizar tu carga.', '<tr><th>Pulgadas</th><th>Calibre</th><th>Pies</th></tr>\r\n	<tr><td>5</td><td>80</td><td>1200</td></tr>\r\n	<tr><td>18</td><td>50</td><td>1200</td></tr>\r\n	<tr><td>18</td><td>80</td><td>1300</td></tr>\r\n	<tr><td>20</td><td>80</td><td>1300</td></tr>\r\n	<tr><td>18</td><td>80</td><td>1000</td></tr>\r\n	<tr><td>20</td><td>80</td><td>4500</td></tr>', 'PLAYO_COLOR.jpeg', NULL, 1),
(6, 'Poliburbuja', NULL, 'La poliburbuja es un material plástico flexible y transparente fabricado en polietileno de baja densidad cuya barrera hermética minimiza la pérdida de aire asegurando un amortiguamiento de larga duración y también su reutilización.', NULL, '<tr><th>Burbuja</th><th>Pulgadas</th><th>Metros</th></tr>\r\n    <tr><td>Grande</td><td>1/2</td><td>61.5</td></tr><tr><td>Chica</td><td>3/16</td><td>123</td></tr>', 'POLIBURBUJA.jpg', NULL, 1),
(7, 'Polifoam', NULL, 'La espuma de polietileno o foam de polietileno, es un conjunto de celdas cerradas que contiene aire atrapado en su interior y que provee acolchonamiento, el cual sirve para absorber vibración, compresión y golpes.', NULL, '<tr><th>Pulgadas</th><th>Metros</th></tr>\r\n    <tr><td>1/4</td><td>55</td></tr><tr><td>1/8</td><td>105</td></tr><tr><td>1/16</td><td>210</td></tr>', 'polifoam.png', NULL, 1),
(8, 'Cajas de cartón', NULL, 'Las cajas de cartón son la solución más común para empaquetar, almacenar y enviar diferentes tipos de productos. Su resistencia evita las deformaciones características del apilamiento y están pensadas para soportar los cambios de temperatura sin dañar la mercancía interior.', NULL, 'Especializada a la medida que necesites', 'CAJAS_CARTON.png', NULL, 1),
(9, 'Cartón corrugado', NULL, 'Por su resistencia y flexibilidad, el cartón corrugado tiene múltiples usos: El cartón ondulado en rollos sirve para envolver objetos de diferentes formas, proporcionándoles una protección óptima frente a golpes, arañazos y todo tipo de agresiones que sean susceptibles de sufrir durante su traslado. ', NULL, 'Multiples medidas', 'CARTON_CORRUGADO.jpg', NULL, 1),
(10, 'Rollo de papel KRAFT', NULL, 'El papel Kraft es ideal para la protección de sus envíos ya que es de alta resistencia y grosor para cubrir los embalajes de la mejor manera posible. ', NULL, 'Multiples medidas', 'ROLLO_PAPEL_KRAFT.png', NULL, 1),
(11, 'FILLTEK DE RELLENO', NULL, 'Espuma de polietileno en forma de estrella para los embalajes de grandes dimensiones, ayuda a rellenar los espacios vacios que quedan dentro del embalaje para protegerlo de los movimientos y reducir las incidencias en el transporte de la carga.', NULL, 'Bolsa : 14.0 ft', 'filltec_relleno.png', NULL, 1),
(12, 'CACAHUATE DE UNICEL BIODEGRADABLE (Biofill)', NULL, 'Material a base de almidón, biodegradable en agua o en cualquier composta, ayuda a rellenar los espacios vacios que quedan dentro del embalaje  para protegerlo de los movimientos y reducir las incidencias en el transporte de la  carga.', NULL, NULL, 'BIOFILL_CACAHUATE.jpg', NULL, 1),
(13, 'CINTAS MASKING TAPE', NULL, 'Cinta fabricada con respaldo de papel crepado y adhesivo de hule-resina sensitivo a la presión, de alta adhesión. Muy conformable, de buena resistencia a la tensión y de alta fuerza de retención.', NULL, '<tr><td>6mm</td><td>50m</td></tr><tr><td>12mm</td><td>50m</td></tr><tr><td>18mm</td><td>50m</td></tr><tr><td>24mm</td><td>50m</td></tr><tr><td>36mm</td><td>50m</td></tr><tr><td>48mm</td><td>50m</td></tr>', 'MASKING_TAPE.png', NULL, 2),
(14, 'CINTAS PARA EMPAQUE DE PAPEL', NULL, 'Desarrollada para ser utilizada en el cerrado de cajas de cartón y para hacer uniones de rollo a rollo (splices) en la industria cartonera y del papel.', NULL, '<tr><td>24mm</td><td>50m</td></tr><tr><td>48mm</td><td>109m</td></tr><tr><td>56mm</td><td>109m</td></tr><tr><td>72mm</td><td>50m</td></tr><tr><td>113mm</td><td>109m</td></tr><tr><td>144mm</td><td>300m</td></tr>', 'CINTA_PARA EMPAQUE_DE_PAPEL.png', NULL, 2),
(15, 'CINTA CANELA Y TRANSPARENTE ', NULL, 'Cinta fabricada con un respaldo de polipropileno y adhesivo de mediana fuerza de retención. Se adhiere en la mayoría de las superficies. Disponible en Transparente y Canela. Se utiliza principalmente para el cerrado de cajas de cartón, paquetes, bultos y cuñetes.', NULL, '<tr><td>48mm</td><td>50m</td></tr><tr><td>48mm</td><td>100m</td></tr><tr><td>48mm</td><td>150m</td></tr><tr><td>72mm</td><td>100m</td></tr><tr><td>72mm</td><td>150m</td></tr><tr><td>144mm</td><td>300m</td></tr>', 'CINTA_CANELA_Y_TRANSPARENTE.png', NULL, 2),
(16, 'CINTA DE COLORES', NULL, 'Su uso es ideal para todo tipo de empaques, cerrado de cajas, paquetes, bultos, bolsas de polietileno. Se puede aplicar manualmente o con ayuda de despachadores.', NULL, '<tr><th>Ancho</th><th>Largo</th></tr><tr><td rowspan=\"2\">48mm</td><td>50mm</td></tr><tr><td>100mm</td></tr><tr><td rowspan=\"2\">72mm</td><td>150mm</td></tr><tr><td>910mm</td></tr>', 'CINTA_DE_COLORES.png', NULL, 2),
(17, 'CINTA DUCTO', NULL, 'Cinta para ducto de uso general muy conformable y fácil de cortar manualmente. Utilizada en múltiples aplicaciones como pueden ser el sellado, empacado, flejado, atado, etc.', NULL, '<tr><td>48mm</td><td>10m</td></tr><tr><td>48mm</td><td>50m</td></tr>', 'CINTA_DUCTO.png', NULL, 2),
(18, 'CINTA DOBLE CARA', NULL, 'La cinta doble cara sirve para aquellas aplicaciones en las que se requiere adherencia por ambos lados de la cinta.Gracias a su excelente adhesivo es posible unir materiales como: papel, aluminio y algodón, por mencionar sólo algunos. Es un producto de excelente desempeño en la industria textil.', NULL, '<tr><td>12mm</td><td>50m</td></tr><tr><td>18mm</td><td>50m</td></tr><tr><td>24mm</td><td>50m</td></tr><tr><td>48mm</td><td>50m</td></tr>', 'CINTA_DOBLE_CARA.jpg', NULL, 2),
(25, 'CINTA DELIMITADORA PARA ÁREAS', NULL, 'Usada generalmente para el marcaje de áreas con alto tránsito de personas. También utilizada para identificación, decoración, sellado, parchado y otros usos generales.', NULL, '<tr><td>48</td><td>20</td></tr><tr><td>48</td><td>33</td></tr>', 'CINTA_DELIMITADORA_DE_AREAS.png', NULL, 2),
(26, 'CINTA FRÁGIL', NULL, 'Es ideal para cerrado de cajas de cartón corrugado, paquetes, cuñetes, bultos, entre otros. Puede aplicarse de forma manual o automática. Es sensitiva a la presión y resistente a la tensión. COLORES BLANCO, TRANSPARENTE Y CANELA', NULL, '<tr><td>48</td><td>150</td></tr>', 'CINTA_FRAGIL.jpg', NULL, 2),
(27, 'CINTA PARA EMPAQUE REFORZADA CON FILAMENTOS', NULL, 'Se utiliza para empaques en donde se demande una alta fijación y retención tales como amarres, fijado y sellado de cajas muy pesadas, equipos, así como aparatos domésticos e industriales durante su transportación.', NULL, '<tr><td>70mm</td><td>137m</td></tr><tr><td>136mm</td><td>1372m</td></tr>', 'CINTA_PARA_EMPAQUE_CON_FILAMENTOS.png', NULL, 2),
(28, 'Sobres de polietileno para paquetería', NULL, 'Sobres de alta resistencia con sellos autodestructibles para envíos por paquetería.', NULL, '<tr><td>19 x 26 cm</td></tr><tr>\r\n<td>25 x 33 cm</td></tr><tr>\r\n<td>37 x 48 cm</td></tr><tr>\r\n<td>67 x 72 cm</td>\r\n</tr>', 'SOBRES_DE_POLIETILENO_PAQUETERIA.jpg', NULL, 3),
(29, 'Sobres con burbuja autoadhesivos Jiffylite', NULL, 'Sobres con Burbuja Jiffylite, Manila/Amarillos, autoadhesivos, con protección para envíos por paquetería. ', NULL, '<tr><td>10 x 18 cm</td></tr>\r\n<tr><td>18 x 28 cm</td></tr>\r\n<tr><td>24 x 34 cm</td></tr>\r\n<tr><td>36 x 48 cm</td></tr>', 'SOBRES_CON_BURBUJA_AUTOADHESIVOS.jpg', NULL, 3),
(30, 'SOBRES PACKING LIST', NULL, 'Sobre plástico autoadhesivos conocido comúnmente como sobre canguro para la protección de las guías en la realización de envíos por paquetería.', NULL, '<tr><td>17.85 x 25.5cm</td></tr>', 'PACKING_LIST.png', NULL, 3),
(31, 'FLEJE DE PLÁSTICO uso general', 'Handax', 'De uso general, el fleje de plástico ideal para aplicaciones manuales Medida: 1/2″ x 0.026.\r\nLa producción de este eje en rollos livianos para facilitar su traslado al área de trabajo con el mínimo esfuerzo de parte del usuario su acabado es moleteado para una fácil aplicación las herramientas de tensión y su presentación es en color negro.', NULL, '<tr>\r\n                <th rowspan=\"2\">Color</th>\r\n                <th colspan=\"3\">Medida</th>\r\n                <th rowspan=\"2\">Longitud aprox. de rollo</th>\r\n                <th>Carga de ruptura</th>\r\n                <th colspan=\"3\">Bobina</th>\r\n            </tr>\r\n            <tr>\r\n                <th>Pulgadas</th>\r\n                <th>Ancho mm</th>\r\n                <th>Espesor mm</th>\r\n                <th>Resistencia</th>\r\n                <th>Tipo #</th>\r\n                <th>Lon./cm</th>\r\n                <th>Diam/cm</th>\r\n            </tr>\r\n            <tr>\r\n                <td>Negro</td>\r\n                <td>1/2\" x .030\"</td>\r\n                <td>12.7 mm</td>\r\n                <td>0.66</td>\r\n                <td>1,629 mts</td>\r\n                <td>209 kgs.</td>\r\n                <td>15</td>\r\n                <td>19.8</td>\r\n                <td>20.1</td>\r\n            </tr>', 'FLEJE_HANDAX.png', NULL, 4),
(32, 'FLEJE PET', 'TENAX', 'El fleje PET es una banda elástica de Polietilen Tereftalato que tiene gran resistencia por lo que puede asegurar cargas de grandes dimensiones y mantener los pallets seguros. A veces resulta ser mejor opción que el fleje de acero, sus características de enlongación y flexibilidad ayudan a mantener la carga tensa y a absorver los impactos sin romperse además de ser un producto que no se oxida ni se mancha.', NULL, '<tr>\r\n                <th rowspan=\"2\">Tipo de fleje Tenax</th>\r\n                <th rowspan=\"2\">Color</th>\r\n                <th colspan=\"3\">Medida</th>\r\n                <th rowspan=\"2\">Longitud de rollo</th>\r\n                <th>Carga de ruptura</th>\r\n            </tr>\r\n            <tr>\r\n                <th>Pulgadas</th>\r\n                <th>Ancho mm</th>\r\n                <th>Espesor mm</th>\r\n                <th>Resistencia</th>\r\n            </tr>\r\n            <tr>\r\n                <td>Fleje liso</td>\r\n                <td>Verde</td>\r\n                <td>5/8\"x0.035\"</td>\r\n                <td>15.8</td>\r\n                <td>0.66</td>\r\n                <td>1,219 mts</td>\r\n                <td>635 kgs</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Fleje Moleteado</td>\r\n                <td>Verde</td>\r\n                <td>1/2\"x0.020\"</td>\r\n                <td>12.7</td>\r\n                <td>0.66</td>\r\n                <td>1,219 mts</td>\r\n                <td>204 kgs</td>\r\n            </tr>', 'FLEJE_TENAX_PET.png', NULL, 4),
(33, 'FLEJE PARA EQUIPOS SEMIAUTOMÁTICOS', 'SEMAX', 'Fleje plástico ideal para aplicaciones en equipos semiautomáticos. Su acabado es moleteado.', NULL, '<tr>\r\n                <th rowspan=\"2\">Color</th>\r\n                <th colspan=\"3\">Medida</th>\r\n                <th rowspan=\"2\">Longitud de rollo</th>\r\n                <th>Carga de ruptura</th>\r\n                <th colspan=\"3\">Bobina</th>\r\n            </tr>\r\n            <tr>\r\n                <th>Pulgadas</th>\r\n                <th>Ancho mm</th>\r\n                <th>Espesor mm</th>\r\n                <th>Resistencia</th>\r\n                <th>Tipo #</th>\r\n                <th>Lon./cm</th>\r\n                <th>Diam/cm</th>\r\n            </tr>\r\n            <tr>\r\n                <td>Negro</td>\r\n                <td>1/2\" x 0.026\"</td>\r\n                <td>12.7</td>\r\n                <td>0.66</td>\r\n                <td>1,629 mts</td>\r\n                <td>209 kgs</td>\r\n                <td>15</td>\r\n                <td>19.8</td>\r\n                <td>20.1</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Negro</td>\r\n                <td>3/8\" x 0.026</td>\r\n                <td>9.5 mm</td>\r\n                <td>0.66</td>\r\n                <td>2,019 mts.</td>\r\n                <td>154 kgs.</td>\r\n                <td>15</td>\r\n                <td>19.8</td>\r\n                <td>20.1</td>\r\n            </tr>', 'FLEJE_SEMAX.png', NULL, 4),
(34, 'FLEJE DE ACERO PAVONADO', 'MAGNUS', 'Tipo devanado/Tipo listón\r\nFleje de acero pavonado. Ideal apara atados en productos o materiales pesados, tales como: Placas de acero, triplay, motores, etc.\r\nMedida Bobinas\r\nDiámetro Interno:\r\n16\" (406.4 mm)\r\nDiámetro Externo:\r\nLas bobinas tipo devanado miden aproximadamente 23\" (584.2mm). \r\nMientras que las tipo listón pueden variar desde 23-1/2\" a 27\" (596.9mm a 685.8mm) dependiendo de la medida del fleje.\r\n', NULL, '<tr>\r\n                <th colspan=\"4\">Medida de fleje</th>\r\n                <th colspan=\"2\" rowspan=\"2\">Resistencia a la tencion</th>\r\n                <th rowspan=\"2\" colspan=\"2\">Rendimiento</th>\r\n                <th rowspan=\"3\">Embobinado del rollo</th>\r\n                <th rowspan=\"2\">Peso medio</th>\r\n                <th rowspan=\"3\">Acabado</th>\r\n                <th rowspan=\"3\">Color</th>\r\n            </tr>\r\n            <tr>\r\n                <th colspan=\"2\">Ancho</th>\r\n                <th colspan=\"2\">Espesor</th>\r\n            </tr>\r\n            <tr>\r\n                <th>Pulg.</th>\r\n                <th>MM</th>\r\n                <th>Pulg.</th>\r\n                <th>MM</th>\r\n                <th>lb</th>\r\n                <th>Kg</th>\r\n                <th>pie/lb</th>\r\n                <th>m/kg</th>\r\n                <th>kg</th>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"6\">3/4\"</td>\r\n                <td rowspan=\"6\">19</td>\r\n                <td>0.02</td>\r\n                <td>0.58</td>\r\n                <td>2260</td>\r\n                <td>1025</td>\r\n                <td>17.1</td>\r\n                <td>11.5</td>\r\n                <td>Devanado</td>\r\n                <td>45</td>\r\n                <td>Pintado</td>\r\n                <td>Negro</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"3\">0.03</td>\r\n                <td rowspan=\"3\">0.64</td>\r\n                <td rowspan=\"3\">2500</td>\r\n                <td rowspan=\"3\">1134</td>\r\n                <td rowspan=\"3\">15.6</td>\r\n                <td rowspan=\"3\">10.5</td>\r\n                <td rowspan=\"2\">Devanado</td>\r\n                <td rowspan=\"2\">45</td>\r\n                <td>Pintado</td>\r\n                <td>Negro</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Pintado</td>\r\n                <td rowspan=\"2\">Zincado</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Jumbo Coil</td>\r\n                <td>400</td>\r\n                <td>Pintado</td>\r\n            </tr>\r\n            <tr>\r\n                <td>0.03</td>\r\n                <td>0.74</td>\r\n                <td>2849</td>\r\n                <td>1292</td>\r\n                <td>13.3</td>\r\n                <td>9</td>\r\n                <td>Devanado</td>\r\n                <td>45</td>\r\n                <td>Pintado</td>\r\n                <td>Negro</td>\r\n            </tr>\r\n            <tr>\r\n                <td>0.03</td>\r\n                <td>0.79</td>\r\n                <td>3050</td>\r\n                <td>1383</td>\r\n                <td>12.7</td>\r\n                <td>8.5</td>\r\n                <td>Devanado</td>\r\n                <td>45</td>\r\n                <td>Pavonado/Cera</td>\r\n                <td>Natural</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"17\">1 1/4\"</td>\r\n                <td rowspan=\"17\">32</td>\r\n                <td>0.25</td>\r\n                <td>0.64</td>\r\n                <td>4094</td>\r\n                <td>1857</td>\r\n                <td>8.9</td>\r\n                <td>6</td>\r\n                <td>Liston</td>\r\n                <td>45</td>\r\n                <td>Pintado</td>\r\n                <td>Negro</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"2\">0.03</td>\r\n                <td rowspan=\"2\">0.74</td>\r\n                <td rowspan=\"2\">4749</td>\r\n                <td rowspan=\"2\">2154</td>\r\n                <td rowspan=\"2\">8.2</td>\r\n                <td rowspan=\"2\">5.5</td>\r\n                <td>Liston</td>\r\n                <td>45</td>\r\n                <td>Pintado</td>\r\n                <td>Negro</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Liston</td>\r\n                <td>45</td>\r\n                <td>Pintado</td>\r\n                <td>Zincado</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"10\">0.03</td>\r\n                <td rowspan=\"10\">0.79</td>\r\n                <td rowspan=\"10\">5100</td>\r\n                <td rowspan=\"10\">2313</td>\r\n                <td rowspan=\"10\">7.6</td>\r\n                <td rowspan=\"10\">5.1</td>\r\n                <td>Liston</td>\r\n                <td>45</td>\r\n                <td>Pavonado</td>\r\n                <td>Natural</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Jumbo Coil</td>\r\n                <td>130</td>\r\n                <td>Pavonado</td>\r\n                <td>Natural</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Jumbo Coil</td>\r\n                <td>500</td>\r\n                <td>Pavonado</td>\r\n                <td>Natural</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Jumbo Coil</td>\r\n                <td>900</td>\r\n                <td>Pavonado</td>\r\n                <td>Natural</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Jumbo Coil</td>\r\n                <td>400</td>\r\n                <td>Pintado</td>\r\n                <td>Negro</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Liston</td>\r\n                <td>45</td>\r\n                <td>Pintado</td>\r\n                <td>Negro</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Liston</td>\r\n                <td>45</td>\r\n                <td>Pintado</td>\r\n                <td>Gris</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Liston</td>\r\n                <td>45</td>\r\n                <td>Pintado</td>\r\n                <td>Amarillo</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Liston</td>\r\n                <td>45</td>\r\n                <td>Pintado</td>\r\n                <td>Zincado</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Jumbo Coil</td>\r\n                <td>400</td>\r\n                <td>Pintado</td>\r\n                <td>Zincado</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"4\">0.04</td>\r\n                <td rowspan=\"4\">1.12</td>\r\n                <td rowspan=\"4\">7200</td>\r\n                <td rowspan=\"4\">3266</td>\r\n                <td rowspan=\"4\">5.4</td>\r\n                <td rowspan=\"4\">3.6</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Liston</td>\r\n                <td>45</td>\r\n                <td>Pintado</td>\r\n                <td>Gris</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Liston</td>\r\n                <td>45</td>\r\n                <td>Pintado</td>\r\n                <td>Negro</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Jumbo Coil</td>\r\n                <td>400</td>\r\n                <td>Pavonado</td>\r\n                <td>Natural</td>\r\n            </tr>', 'FLEJE_MAGNUS.png', NULL, 4),
(35, 'FLEJE DE ACERO Galvanizado/Pintado', 'APEX PLUS', 'Este material  se  ha sometido a un tratamiento de galvanización consiguiendo otorgarle una gran resistencia a la oxidación, elemento químico y  sobre todo a altas temperaturas.\r\nEl Fleje de Acero Apex™ cuenta con dos diferentes acabados, cada uno de ellos procesado de acuerdo a las necesidades específicas de su aplicación', NULL, '<tr>\r\n                <th colspan=\"4\"> Tamaño de la correa</th>\r\n                <th colspan=\"2\" rowspan=\"2\">Resistencia a la tensión</th>\r\n                <th colspan=\"2\" rowspan=\"2\">Rendimiento</th>\r\n                <th colspan=\"1\" rowspan=\"3\">Acabado</th>\r\n                <th colspan=\"1\" rowspan=\"3\">Peso Kg</th>\r\n            </tr>\r\n            <tr>\r\n                <th colspan=\"2\">Ancho </th>\r\n                <th colspan=\"2\">Espesor</th>\r\n            </tr>\r\n            <tr>\r\n                <th>Pulgada</th>\r\n                <th>Espesor</th>\r\n                <th>Pulgada</th>\r\n                <th>mm</th>\r\n                <th>Lbs</th>\r\n                <th>Kg</th>\r\n                <th>Pies/Lb</th>\r\n                <th>M/Kg</th>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"2\"> 3/8\"</td>\r\n                <td rowspan=\"2\"> 9.5</td>\r\n                <td rowspan=\"1\"> 0.015</td>\r\n                <td rowspan=\"1\"> 0.38</td>\r\n                <td rowspan=\"1\"> 624</td>\r\n                <td rowspan=\"1\"> 238</td>\r\n                <td rowspan=\"1\"> 52.4</td>\r\n                <td rowspan=\"1\"> 35.2</td>\r\n                <td rowspan=\"1\"> Devanado</td>\r\n                <td rowspan=\"1\"> 45</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"1\"> 0.02</td>\r\n                <td rowspan=\"1\"> 0.51</td>\r\n                <td rowspan=\"1\"> 840</td>\r\n                <td rowspan=\"1\"> 381</td>\r\n                <td rowspan=\"1\"> 39.3</td>\r\n                <td rowspan=\"1\"> 26.4</td>\r\n                <td rowspan=\"1\"> Devanado</td>\r\n                <td rowspan=\"1\"> 45</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"3\"> 1/2\"</td>\r\n                <td rowspan=\"3\"> 12.7</td>\r\n                <td rowspan=\"1\"> 0.015</td>\r\n                <td rowspan=\"1\"> 0.38</td>\r\n                <td rowspan=\"1\"> 840</td>\r\n                <td rowspan=\"1\"> 381</td>\r\n                <td rowspan=\"1\"> 39.3</td>\r\n                <td rowspan=\"1\"> 26.7</td>\r\n                <td rowspan=\"1\"> Devanado</td>\r\n                <td rowspan=\"1\"> 45</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"1\"> 0.02</td>\r\n                <td rowspan=\"1\"> 0.51</td>\r\n                <td rowspan=\"1\"> 1131</td>\r\n                <td rowspan=\"1\"> 513</td>\r\n                <td rowspan=\"1\"> 29.5</td>\r\n                <td rowspan=\"1\"> 19.8</td>\r\n                <td rowspan=\"1\"> Devanado</td>\r\n                <td rowspan=\"1\"> 45</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"1\"> 0.023</td>\r\n                <td rowspan=\"1\"> 0.58</td>\r\n                <td rowspan=\"1\"> 1250</td>\r\n                <td rowspan=\"1\"> 567</td>\r\n                <td rowspan=\"1\"> 25.6</td>\r\n                <td rowspan=\"1\"> 17.2</td>\r\n                <td rowspan=\"1\"> Devanado</td>\r\n                <td rowspan=\"1\"> 45</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"3\"> 5/8\"</td>\r\n                <td rowspan=\"3\"> 15.5</td>\r\n                <td rowspan=\"1\"> 0.015</td>\r\n                <td rowspan=\"1\"> 0.8</td>\r\n                <td rowspan=\"1\"> 1032</td>\r\n                <td rowspan=\"1\"> 468</td>\r\n                <td rowspan=\"1\"> 31.4</td>\r\n                <td rowspan=\"1\"> 21.1</td>\r\n                <td rowspan=\"1\"> Devanado</td>\r\n                <td rowspan=\"1\"> 45</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"1\"> 0.02</td>\r\n                <td rowspan=\"1\"> 0.51</td>\r\n                <td rowspan=\"1\"> 1470</td>\r\n                <td rowspan=\"1\"> 667</td>\r\n                <td rowspan=\"1\"> 23.7</td>\r\n                <td rowspan=\"1\"> 15.9</td>\r\n                <td rowspan=\"1\"> Devanado</td>\r\n                <td rowspan=\"1\"> 45</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"1\"> 0.023</td>\r\n                <td rowspan=\"1\"> 0.58</td>\r\n                <td rowspan=\"1\"> 1554</td>\r\n                <td rowspan=\"1\"> 705</td>\r\n                <td rowspan=\"1\"> 20.5</td>\r\n                <td rowspan=\"1\">13.8</td>\r\n                <td rowspan=\"1\"> Devanado</td>\r\n                <td rowspan=\"1\"> 45</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"5\"> 3/4\"</td>\r\n                <td rowspan=\"5\"> 19.1</td>\r\n                <td rowspan=\"1\"> 0.015</td>\r\n                <td rowspan=\"1\"> 0.38</td>\r\n                <td rowspan=\"1\"> 1312</td>\r\n                <td rowspan=\"1\"> 595</td>\r\n                <td rowspan=\"1\"> 26.2</td>\r\n                <td rowspan=\"1\"> 17.6</td>\r\n                <td rowspan=\"1\"> Devanado</td>\r\n                <td rowspan=\"1\"> 45</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"1\"> 0.02</td>\r\n                <td rowspan=\"1\"> 0.38</td>\r\n                <td rowspan=\"1\"> 1312</td>\r\n                <td rowspan=\"1\"> 774</td>\r\n                <td rowspan=\"1\"> 19.6</td>\r\n                <td rowspan=\"1\">13.2</td>\r\n                <td rowspan=\"1\"> Devanado</td>\r\n                <td rowspan=\"1\"> 45</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"1\"> 0.023</td>\r\n                <td rowspan=\"1\"> 0.58</td>\r\n                <td rowspan=\"1\"> 1900</td>\r\n                <td rowspan=\"1\"> 862</td>\r\n                <td rowspan=\"1\"> 17.1</td>\r\n                <td rowspan=\"1\">11.5</td>\r\n                <td rowspan=\"1\"> Devanado</td>\r\n                <td rowspan=\"1\"> 45</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"1\"> 0.028</td>\r\n                <td rowspan=\"1\"> 0.71</td>\r\n                <td rowspan=\"1\"> 2240</td>\r\n                <td rowspan=\"1\"> 1016</td>\r\n                <td rowspan=\"1\"> 14</td>\r\n                <td rowspan=\"1\">9.4</td>\r\n                <td rowspan=\"1\"> Devanado</td>\r\n                <td rowspan=\"1\"> 45</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"1\"> 0.035</td>\r\n                <td rowspan=\"1\"> 0.89</td>\r\n                <td rowspan=\"1\"> 2617</td>\r\n                <td rowspan=\"1\"> 1187</td>\r\n                <td rowspan=\"1\"> 11.2</td>\r\n                <td rowspan=\"1\">7.5</td>\r\n                <td rowspan=\"1\"> Devanado</td>\r\n                <td rowspan=\"1\"> 45</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"2\"> 11/4\"</td>\r\n                <td rowspan=\"2\"> 31.8</td>\r\n                <td rowspan=\"1\"> 0.028</td>\r\n                <td rowspan=\"1\"> 0.71</td>\r\n                <td rowspan=\"1\"> 3790</td>\r\n                <td rowspan=\"1\"> 5951719</td>\r\n                <td rowspan=\"1\"> 8.5</td>\r\n                <td rowspan=\"1\"> 5.7</td>\r\n                <td rowspan=\"1\"> Devanado</td>\r\n                <td rowspan=\"1\"> 45</td>\r\n            </tr>\r\n            <tr>\r\n                <td rowspan=\"1\"> 0.035</td>\r\n                <td rowspan=\"1\"> 0.89</td>\r\n                <td rowspan=\"1\"> 4475</td>\r\n                <td rowspan=\"1\"> 2030</td>\r\n                <td rowspan=\"1\"> 6.7</td>\r\n                <td rowspan=\"1\">4.5</td>\r\n                <td rowspan=\"1\"> Devanado</td>\r\n                <td rowspan=\"1\"> 45</td>\r\n            </tr>', 'FLEJE_APEX_PLUS.png', NULL, 4),
(36, 'FLEJE DE ACERO INOXIDABLE', NULL, NULL, NULL, '<tr>\r\n                <th rowspan=\"1\">ANCHO</th>\r\n                <th rowspan=\"1\">CALIBRE</th>\r\n                <th rowspan=\"1\">LONGITUD</th>\r\n            </tr>\r\n            <tr>\r\n                <td>1/2\"</td>\r\n                <td> 26</td>\r\n                <td> 30.5m</td>\r\n            </tr>\r\n            <tr>\r\n                <td>3/8\"</td>\r\n                <td> 26</td>\r\n                <td> 30.5m</td>\r\n            </tr>\r\n            <tr>\r\n                <td>5/8\"</td>\r\n                <td> 26</td>\r\n                <td> 30.5m</td>\r\n            </tr>\r\n            <tr>\r\n                <td>3/4\"</td>\r\n                <td> 26</td>\r\n                <td> 30.5m</td>\r\n            </tr>\r\n            <tr>\r\n                <td>3/8\"</td>\r\n                <td> 22</td>\r\n                <td> 30.5m</td>\r\n            </tr>\r\n            <tr>\r\n                <td>1/2\"</td>\r\n                <td> 22</td>\r\n                <td> 30.5m</td>\r\n            </tr>\r\n            <tr>\r\n                <td>5/8\"</td>\r\n                <td> 22</td>\r\n                <td> 30.5m</td>\r\n            </tr>\r\n            <tr>\r\n                <td>3/4\"</td>\r\n                <td> 22</td>\r\n                <td> 30.5m</td>\r\n            </tr>', 'FLEJE_ACERO_INOXIDABLE.png', NULL, 4),
(37, 'GRAPA DE FLEJE PLÁSTICO', NULL, 'Garantiza un sellado seguro con nuestras grapas plásticas.', NULL, '<tr>\r\n                <th rowspan=\"1\">Medidas</th>\r\n                <th rowspan=\"1\">Tipo</th>\r\n            </tr>\r\n            <tr>\r\n                <td>3/8\"</td>\r\n                <td> Abierto</td>\r\n            </tr>\r\n            <tr>\r\n                <td>1/2\"</td>\r\n                <td> Abierto</td>\r\n            </tr>\r\n            <tr>\r\n                <td>5/8\"</td>\r\n                <td> Abierto Esbozado</td>\r\n            </tr>\r\n            <tr>\r\n                <td colspan=\"2\">Paq. 1 millar de grapas</td>\r\n            </tr>', 'GRAPA_FLEJE_PLASTICO.jpg', NULL, 4),
(38, 'GRAPA DE FLEJE METÁLICA', NULL, 'Garantiza un sellado seguro con nuestras grapas de acero y galvanizado para evitar la oxidación.', NULL, '<tr>\r\n                <th rowspan=\"1\">Medidas</th>\r\n                <th rowspan=\"1\">Tipo</th>\r\n            </tr>\r\n            <tr>\r\n                <td>3/8\"</td>\r\n                <td> Abierto</td>\r\n            </tr>\r\n            <tr>\r\n                <td>1/2\"</td>\r\n                <td> Abierto</td>\r\n            </tr>\r\n            <tr>\r\n                <td>5/8\"</td>\r\n                <td> Abierto Traslapado</td>\r\n            </tr>\r\n            <tr>\r\n                <td colspan=\"2\">Paq. 1 millar de grapas</td>\r\n            </tr>', 'GRAPA_METAL.png', NULL, 4),
(39, 'APLICADOR DE CINTA ADHESIVA', NULL, 'Agiliza la aplicación de cinta adhesiva de una manera más práctica, ideal para el cerrado de cajas de cartón.\r\nDespachador Metálico con mango de plástico para aplicar la cinta de empaque de 48mm de ancho hasta 150m de largo.', NULL, NULL, 'APLICADOR_CINTA_MANUAL.jpg', NULL, 5),
(40, 'DISPENSADOR DE PLAYO', NULL, 'Protegen las manos de quemaduras y rozaduras por fricción, facilitan la aplicación durante el embalaje, ideal para aumentar la seguridad industrial e incluye seguro retráctil para mayor estiramiento.', NULL, NULL, 'DISPENSADOR_PLAYO_MANUAL.jpg', NULL, 5),
(41, 'APLICADOR DE PLAYO MANUAL', NULL, 'Facilitan la aplicación durante el embalaje, ideal para aumentar la seguridad y evitar quemaduras o rozaduras durante la paletización. Incluye cuerpo de acero y mangos para centros de película plástica de 1.5” a 3\" de diámetro se puede utilizar con rollos de película plástica de 12\"-20\" de longitud y tornillo para ajustar la altura del rollo.', NULL, NULL, 'APLICADOR_PLAYO_MANUAL.jpg', NULL, 5),
(42, 'CARRO PORTA-FLEJES', NULL, 'Para flejes de plástico y de acero enrollado oscilante.\r\nDiseño robusto para uso intensivo.\r\nNúcleo de fleje ID 406 mm Cara 75 mm o 150 mm', NULL, NULL, 'CARRO_PORTA_FLEJES.png', NULL, 5),
(43, 'FLEJADORA MANUAL', NULL, 'Tensor para flejes de PET y PP de alta resistencia.\r\nAncho de la correa: 12 mm-19 mm', NULL, NULL, 'FLEJADORA_MANUAL.png', NULL, 5),
(44, 'SELLADOR PARA FLEJES DE PET Y PP DE ALTA RESISTENCIA', NULL, 'Agarre desplazado, para usar con sellos dentados.\r\nLongitud del mango: 460 mm\r\nAncho de la correa: 12 mm, 16 mm', NULL, NULL, 'SELLADOR_PARA_FLEJES.png', NULL, 5),
(45, 'Herramienta Potenciada por Batería para flejes plasticos', 'BTX3', 'La Herramienta de combinación operada por batería modelo BXT3 mejorada ahora con pantalla táctil. Diseñada para aplicar fleje de polipropileno o PET, utilizando la tecnología de sellado a la fricción para unir los extremos del fleje. Con la batería, sólo tiene 2 botones y un diseño ergonómico que reduce el esfuerzo del operador.', NULL, NULL, 'BTX3_Para_flejes_plasticos.png', NULL, 5),
(46, 'HERRAMIENTA DE COMBINACION NEUMATICA Para flejes plásticos', 'VT', 'Las herramientas neumáticas conjugadas sin sello en los modelos: VT-16/19/25HD, están diseñadas para producir alta resistencia y alto tensión en las soldaduras, lo que las hace ideales para productos empaquetados que tienden a desplazarse o acomodarse durante el transporte y el manejo. Las herramientas pesan menos de 5 kilos y son fáciles de operar tanto en posición vertical, como en horizontal.', NULL, NULL, 'HERRAMIENTA_COMBINACION_NEUMATICA.png', NULL, 5),
(47, 'HERRAMIENTA COMB. MANUAL PARA FLEJE DE ACERO DE ALTA RESISTENCIA TIPO MAGNUS', 'SCMH', 'Fácil de operar. La herramienta modelo SCMH está diseñado ergonómicamente para ayudar a reducir la fatiga del operador. Cuenta con engranajes dobles para alta tensión, carga de dos correas, holgura manual. Tirón y mínimo esfuerzo de sellado. ', NULL, NULL, 'HERRAMIENTA_PARA_FLEJE_DE_ACERO.png', NULL, 5),
(48, 'JUEGO DE HERRAMIENTA POTENCIADA POR BATERIA Para fleje de acero', 'GRIPACK', 'Proporcionan gran portabilidad, máxima potencia y rendimiento sin los costos de generación de aire de las herramientas neumáticas.', NULL, NULL, 'HERRAMIENTA_POTENCIADA_POR_BATERIA_GRIPACK.png', NULL, 5),
(49, 'HERRAMIENTA DE COMB. NEUMATICA Para fleje de acero', 'PNSC2', 'La herramienta de combinación neumática modelo PNSC2 es ampliamente utilizada para la industria de tuberías y donde se requiere fuerza de tensionado hasta 700lb ó 3,114 N en aplicaciones con superficies irregulares o redondas. Todas sus piezas de metal y aleaciones ofrecen un mantenimiento duradero y de bajo mantenimiento.', NULL, NULL, 'HERRAMIENTA_DE_COMB_NEUMATICA_PNSC2.png', NULL, 5),
(50, 'Máquinas Flejadoras Automáticas y Semiautomáticas', NULL, 'Una flejadora es una máquina que coloca flejes para asegurar cargas o bultos. Los flejes\r\nson tiras de diferentes materiales resistentes: metal textil, polipropileno y poliéster.\r\nExisten 2 diferentes tipos de máquinas flejadoras:<ul><li>Flejadoras semiautomáticas</li><li>Flejadoras Automáticas</li>', NULL, NULL, 'FLEJADORA_SEMIAUTOMATICA.png', NULL, 6),
(51, 'Máquinas emplayadoras', NULL, 'Las máquinas emplayadoras garantizan que la movilidad de la carga sea mínima y que esta\r\npueda reducir los daños producidos por el almacenamiento, al igual la protege del polvo,\r\ndaños superficiales, agua, entre otros.', 'Una de sus principales ventajas es que la emplayadora optimiza el uso del playo para\r\nofrecer al usuario el máximo rendimiento del mismo.\r\nExisten 4 tipos de emplayadoras:<ul><li>Emplayadoras de tarimas</li><li>Emplayadoras de película estirable alimenticia</li>\r\n<li>Emplayadoras termoencogibles</li><li>Emplayadoras envolvedoras de paquete tipo flowpack</li></ul>', NULL, 'EMPLAYADORA.png', NULL, 6),
(52, 'Máquinas encintadoras', NULL, 'Las máquinas encintadoras son eficaces en la reducción de costos y mano de obra ya que\r\ngracias a esta maquinaria se pueden reducir los tiempos de empacado de manera muy\r\nsignificativa.\r\nExisten 2 tipos de encintadoras:<ul>\r\n<li>Encintadoras semiautomáticas</li>\r\n<li>Encintadoras automáticas</li></ul>', NULL, NULL, 'MAQUINA_ENCINTADORA.png', NULL, 6),
(53, 'GRAPAS SELLO CERRADO DE ACERO INOXIDABLE', NULL, 'Grapas, sello de acero inoxidable  para ajustar flejes.', NULL, '<tr>                                    \r\n <th rowspan=\"1\">Medidas</th>\r\n <th rowspan=\"1\">Tipo</th>\r\n</tr>\r\n<tr>\r\n  <td>3/8\"</td>\r\n  <td>Cerrado</td>\r\n</tr>\r\n<tr>\r\n  <td>1/2\"</td>\r\n  <td>Cerrado</td>\r\n</tr>\r\n<tr>\r\n  <td>5/8\"</td>\r\n  <td>Cerrado</td>\r\n</tr>\r\n<tr>\r\n  <td>3/4\"</td>\r\n  <td>Cerrado</td>\r\n</tr>\r\n<tr>\r\n  <td colspan=\"2\">Paq. 100 piezas de grapas</td>\r\n</tr>', 'GRAPAS_SELLO_INOXIDABLE.png', NULL, 4),
(54, 'ESQUINEROS DE CARTÓN', NULL, 'Con la sencilla utilización de esquineros de cartón la carga estibada, queda mejor protegida y preparada para soportar las vibraciones y oscilaciones a que se verá sometida durante el transporte y manipulación.', NULL, '<tr><td>*Múltiples medidas*</td></tr>', 'ESQUINEROS_CARTON.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variantes`
--

CREATE TABLE `variantes` (
  `id` int(11) NOT NULL,
  `img` varchar(80) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `variantes`
--

INSERT INTO `variantes` (`id`, `img`, `id_producto`) VALUES
(3, 'FLEJADORA_AUTOMATICA.png', 50),
(4, 'emplayadora2.png', 51);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categoria` (`nombre`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `variantes`
--
ALTER TABLE `variantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `variantes`
--
ALTER TABLE `variantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD CONSTRAINT `modelos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `variantes`
--
ALTER TABLE `variantes`
  ADD CONSTRAINT `variantes_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
