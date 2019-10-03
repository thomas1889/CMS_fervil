

-- Volcando estructura de base de datos para fervil
DROP DATABASE IF EXISTS `fervil`;
CREATE DATABASE IF NOT EXISTS `fervil` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `fervil`;


-- Volcando estructura para tabla fervil.empleado
DROP TABLE IF EXISTS `empleado`;
CREATE TABLE IF NOT EXISTS `empleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `usuario` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `contrasena` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_empleado_rol` (`rol`),
  CONSTRAINT `FK_empleado_rol` FOREIGN KEY (`rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla fervil.empleado: ~0 rows (aproximadamente)
DELETE FROM `empleado`;
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
INSERT INTO `empleado` (`id`, `nombre`, `usuario`, `contrasena`, `rol`) VALUES
	(1, 'developer', 'developer', '5e8edd851d2fdfbd7415232c67367cc3', 1);
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;


-- Volcando estructura para tabla fervil.imagen
DROP TABLE IF EXISTS `imagen`;
CREATE TABLE IF NOT EXISTS `imagen` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `ubicacion` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla fervil.imagen: ~47 rows (aproximadamente)
DELETE FROM `imagen`;
/*!40000 ALTER TABLE `imagen` DISABLE KEYS */;
INSERT INTO `imagen` (`id_imagen`, `nombre`, `ubicacion`) VALUES
	(1, 'logo', 'images/logo.png'),
	(2, 'cabecera', 'images/azul.png'),
	(3, 'titulo_cabecera', 'images/calidad.png'),
	(4, 'calidad', 'images/calidadimagen.fw.png'),
	(5, 'comillas', 'images/comillas.png'),
	(6, 'comillas2', 'images/comillas2.png'),
	(7, 'pie_contacto', 'images/contactenos.png'),
	(8, 'contacto', 'images/contacto.png'),
	(9, 'cuadro', 'images/cuadro.png'),
	(10, 'estrella', 'images/estrella.fw.png'),
	(11, 'titulo_filosofia', 'images/filosofia.fw.png'),
	(12, 'galeria1', 'images/galeria.png'),
	(13, 'comida', 'images/imagen5.png'),
	(14, 'calidad2', 'images/imagencalidad.png'),
	(15, 'calidad3', 'images/imgCalidad.PNG'),
	(16, 'contacto2', 'images/imgcontacto.fw.png'),
	(17, 'index', 'images/imghome.png'),
	(18, 'linea', 'images/lineapuntos.fw.png'),
	(19, 'manos', 'images/manos.png'),
	(20, 'menu', 'images/menu1.png'),
	(21, 'menu', 'images/menu2.fw.png'),
	(22, 'objeto', 'images/objeto.png'),
	(23, 'productos', 'images/productos.png'),
	(24, 'productos2', 'images/productosnuevos.png'),
	(25, 'sCatering1', 'images/sCatering.png'),
	(26, 'sCatering', 'images/sCatering_2.png'),
	(27, 'sEmpresas', 'images/sEmpresas.png'),
	(28, 'sEmpresas2', 'images/sEmpresas_2.png'),
	(29, 'servicios', 'images/servicios.png'),
	(30, 'servicios1', 'images/servicios1.fw.png'),
	(31, 'servicios2', 'images/servicios2.fw.png'),
	(32, 'servicios3', 'images/servicios3.fw.png'),
	(33, 'servicios4', 'images/servicios4.fw.png'),
	(34, 'servicios5', 'images/serviciosprestasdos.png'),
	(35, 'sEspeciales', 'images/sEspeciales.png'),
	(36, 'sEspeciales2', 'images/sEspeciales_2.png'),
	(37, 'sHospitales', 'images/sHospitales.png'),
	(38, 'sHospitales2', 'images/sHospitales_2.png'),
	(39, 'vino', 'images/vino.fw.png'),
	(40, 'producto1', 'images/vino.fw.png'),
	(41, 'producto2', 'images/logo.png'),
	(43, 'producto3', 'img/producto.png'),
	(44, 'producto3', 'img/thumb02.jpg'),
	(45, 'producto3', 'img/thumb02.jpg'),
	(46, 'producto3', 'img/thumb02.jpg'),
	(47, 'producto3', 'img/thumb02.jpg'),
	(48, 'producto3', 'img/thumb02.jpg');
/*!40000 ALTER TABLE `imagen` ENABLE KEYS */;


-- Volcando estructura para tabla fervil.pagina
DROP TABLE IF EXISTS `pagina`;
CREATE TABLE IF NOT EXISTS `pagina` (
  `id_pagina` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_servicio` int(11) DEFAULT NULL,
  `id_imagen` int(11) DEFAULT NULL,
  `id_texto` int(11) DEFAULT NULL,
  `texto` text COLLATE utf8_bin,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_pagina`),
  KEY `FK_pagina_productos` (`id_producto`),
  KEY `FK_pagina_servicios` (`id_servicio`),
  KEY `FK_pagina_imagen` (`id_imagen`),
  KEY `FK_pagina_texto` (`id_texto`),
  CONSTRAINT `FK_pagina_imagen` FOREIGN KEY (`id_imagen`) REFERENCES `imagen` (`id_imagen`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_pagina_productos` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_pagina_servicios` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicios`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_pagina_texto` FOREIGN KEY (`id_texto`) REFERENCES `texto` (`id_texto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla fervil.pagina: ~45 rows (aproximadamente)
DELETE FROM `pagina`;
/*!40000 ALTER TABLE `pagina` DISABLE KEYS */;
INSERT INTO `pagina` (`id_pagina`, `titulo`, `id_producto`, `id_servicio`, `id_imagen`, `id_texto`, `texto`, `fecha`) VALUES
	(1, 'index1', NULL, NULL, 1, 1, 'Sómos una empresa que ha conjugado la gastronomía Colombiana tradicional con las actuales exigencias de nuestros clientes, logrando una atención personalizada.', '2015-09-10'),
	(2, 'index2', NULL, NULL, 29, 2, 'Nuestro objeto es otorgar un Servicio de Alta Calidad, integral, para así responder satisfactoriamente a las expectativas de su institución.', '2015-09-10'),
	(4, 'index3', NULL, NULL, 23, 3, 'Al contratar nuestros servicios de alimentación se obtendrán, \r\nentre otros, los siguientes beneficios:', '2014-09-10'),
	(5, 'index4', NULL, NULL, 22, 4, 'Excelencia y Seguridad.', '2015-09-10'),
	(6, 'index5 ', NULL, NULL, 13, 5, 'Atención personalizada.', '2015-09-10'),
	(7, 'index6', NULL, NULL, NULL, 6, ' Rápida Capacidad de Respuesta.', '2015-09-10'),
	(8, 'index7', NULL, NULL, NULL, 7, 'Mejoramiento Continuo.', '2015-09-10'),
	(9, 'index8', NULL, NULL, NULL, 8, 'Supervisión estratégica.', '2014-09-10'),
	(10, 'filosofia', NULL, NULL, 1, 9, 'Nuestra orientación de servicio hacia el cliente, nos permite concentrarnos en sus \r\nnecesidades y conseguir un clima de colaboración cliente-proveedor que resulte siempre \r\nsatisfactorio para ambas partes. Basamos nuestros principios en aportar:', '2014-09-10'),
	(11, 'filosofia2', NULL, NULL, 29, 10, 'Valor gastronómico.', '2014-09-10'),
	(12, 'filosofia3', NULL, NULL, 23, 11, 'Calidad de materias primas.', '2015-09-10'),
	(13, 'filosofia4', NULL, NULL, 19, 12, 'Seguridad e higiene.', '2014-09-10'),
	(14, 'filosofia5', NULL, NULL, 5, 13, 'Garantía de servicio.', '2014-09-10'),
	(15, 'filosofia6', NULL, NULL, 6, 14, 'Atención al cliente.', '2014-09-10'),
	(16, 'filosofia7', NULL, NULL, NULL, 15, 'La rapidez, el cambio y la innovación son valores presentes en FERVIL.\r\nSomos conscientes que a largo plazo aseguran la competitividad y el \r\nliderazgo de nuestra empresa además del desarrollo de un servicio plenamente \r\nadaptado a las exigencias de nuestros clientes.', '2015-09-10'),
	(17, 'filosofia8', NULL, NULL, 10, 8, NULL, '2013-09-10'),
	(18, 'calidad', NULL, NULL, 1, 15, 'FERVIL busca la máxima calidad en todos los procesos productivos y servicios que en sus instalaciones se suceden cada día. ', '2015-09-10'),
	(19, 'calidad2', NULL, NULL, 29, 16, 'Esta vocación de calidad exige a FERVIL el esmero en todos sus procesos siguiendo unos estrictos criterios de higiene, calidad y medio ambiente. Por ello destacamos:', '2015-09-10'),
	(20, 'calidad3', NULL, NULL, 23, 7, 'La plena satisfacción de nuestros clientes.', '2015-09-10'),
	(21, 'calidad4', NULL, NULL, 10, 18, 'Cumplimiento de la legislación y con todos los requisitos establecidos por nuestros clientes.', '2014-09-10'),
	(22, 'calidad5', NULL, NULL, 3, 19, 'La mejora continua de nuestros procesos e indicadores de gestión.', '2015-09-10'),
	(23, 'calidad6', NULL, NULL, 7, 20, 'Respeto por el medio ambiente.', '2015-09-10'),
	(24, 'servicios', NULL, NULL, 1, 22, 'Seguridad alimentaria estableciendo los mecanismos necesarios para asegurar un', '2015-09-10'),
	(25, 'servicios2', NULL, NULL, 29, 23, 'correcto tratamiento de los productos.', '2015-09-10'),
	(26, 'servicios3', NULL, NULL, 23, NULL, NULL, '2015-09-10'),
	(27, 'servicios4', NULL, NULL, 34, NULL, NULL, '2015-09-10'),
	(28, 'servicios5', NULL, NULL, 27, NULL, NULL, '2014-09-10'),
	(29, 'servicios6', NULL, NULL, 35, NULL, NULL, '2015-09-10'),
	(30, 'servicios7', NULL, NULL, 25, NULL, NULL, '2015-09-10'),
	(31, 'servicios8', NULL, NULL, 37, NULL, NULL, '2014-09-10'),
	(32, 'servicios9', NULL, NULL, 7, NULL, 'Desde FERVIL EMPRESAS somos conscientes que una buena alimentación mejora productividad y la motivación de los una empresa. Para nosotros el servicio de comedor de una empresa va más allá de la alimentación. Es un punto de reunión de los trabajadores, sirve de paréntesis en el esfuerzo diario, y ayuda a terminar la jornada con el mismo de la mañana.', '2015-09-10'),
	(33, 'empresa', NULL, 1, 34, 24, 'Garantizamos que los menús que servimos son adecuados para las características de la en función de su actividad y sus trabajadores, y ofrecemos lo mejor en calidad y en servicio.', '2015-09-10'),
	(34, 'empresa1', NULL, 1, 36, 25, 'Nuestros clientes, degustaran nuestras preparaciones recién elaboradas, atendido por grupo de trabajo entrenado con el fin de brindar servicio de excelencia.', '2015-09-10'),
	(35, 'empresa2', NULL, 1, 30, NULL, NULL, '2015-09-10'),
	(36, 'cathering', NULL, 2, 26, 26, 'Es otra de nuestras modalidades de servicio, que consiste en la elaboración o contratación de los alimentos fuera de las instalaciones del cliente para ser entregados oportunamente de acuerdo a sus necesidades. ', '2015-09-10'),
	(37, 'cathering2', NULL, 2, 33, 27, 'Si el cliente así lo requiere podemos acondicionar los alimentos en empaques individuales para ser degustadas, en los horarios establecidos, bajo las recomendaciones nutricionales y de higiene requeridos.', '2015-09-10'),
	(38, 'especiales', NULL, 3, 36, 28, 'Como valor agregado para nuestros clientes ofrecemos nuestros servicios para atender sus reuniones empresariales dentro o fuera de susinstalaciones.', '2015-09-10'),
	(39, 'especiales2', NULL, 3, 32, 29, 'Lo anterior nos permite poner a su disposición el servicio completo de banqueteria del más alto nivel, acompañado de meseros entrenados, ambientación de salones, y en general, todos aquellos detalles que la ocasión amerite.', '2015-09-10'),
	(40, 'hospital', NULL, 4, 33, 30, 'En FERVIL entendemos la gran importancia que tiene una adecuada alimentación y los efectos positivos que ésta conlleva. Los centros hospitalarios como centros de recuperación y sanación, tienen la obligación de proporcionar alimentos que sean saludables, ya que tienen consecuencias en términos de nutrición, riesgo de enfermedad, salud pública, salud ambiental, social y bienestar.', '2015-09-10'),
	(41, 'hospital', NULL, 4, 37, 31, 'En FERVIL disponemos de todos los medios actuales que aseguran una correcta manipulación, almacenaje y distribución, aportando una excelente seguridad alimentaria y una gama de productos especialmente pensados para satisfacer las necesidades nutricionales de nuestros clientes.', '2015-09-10'),
	(42, 'producto', 1, NULL, 40, NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat...', '2014-09-10'),
	(43, 'producto2', 2, NULL, 41, NULL, 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-04-10'),
	(44, 'calidad7', NULL, NULL, NULL, 21, 'Nuestros servicios van desde la provisión de todo tipo de alimentos de primera calidad, hasta la gestión integral de cocinas y/o cafeterías, pasando por el desarrollo de los distintos menús diseñados por nuestros expertos dietistas.', '2014-09-10'),
	(46, 'hospital', NULL, 4, NULL, 32, NULL, '2015-09-10'),
	(47, 'producto3', 2, NULL, 48, NULL, 'Quitar', '2015-08-10');
/*!40000 ALTER TABLE `pagina` ENABLE KEYS */;


-- Volcando estructura para tabla fervil.productos
DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla fervil.productos: ~2 rows (aproximadamente)
DELETE FROM `productos`;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id_producto`, `nombre_producto`) VALUES
	(1, 'producto1'),
	(2, 'producto2');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;


-- Volcando estructura para tabla fervil.registros
DROP TABLE IF EXISTS `registros`;
CREATE TABLE IF NOT EXISTS `registros` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `celular` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `comentarios` text COLLATE utf8_bin,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla fervil.registros: ~0 rows (aproximadamente)
DELETE FROM `registros`;
/*!40000 ALTER TABLE `registros` DISABLE KEYS */;
/*!40000 ALTER TABLE `registros` ENABLE KEYS */;


-- Volcando estructura para tabla fervil.rol
DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla fervil.rol: ~2 rows (aproximadamente)
DELETE FROM `rol`;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
	(1, 'developer'),
	(2, 'administrador');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;


-- Volcando estructura para tabla fervil.servicios
DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `id_servicios` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_servicio` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_servicios`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla fervil.servicios: ~4 rows (aproximadamente)
DELETE FROM `servicios`;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` (`id_servicios`, `Nombre_servicio`) VALUES
	(1, 'Empresas'),
	(2, 'Catering'),
	(3, 'Eventos Especiales'),
	(4, 'Hospitales');
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;


-- Volcando estructura para tabla fervil.texto
DROP TABLE IF EXISTS `texto`;
CREATE TABLE IF NOT EXISTS `texto` (
  `id_texto` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipoT` int(11) DEFAULT NULL,
  `contenido` text COLLATE utf8_bin,
  PRIMARY KEY (`id_texto`),
  KEY `FK_texto_tipotexto` (`id_tipoT`),
  CONSTRAINT `FK_texto_tipotexto` FOREIGN KEY (`id_tipoT`) REFERENCES `tipotexto` (`id_tipoT`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla fervil.texto: ~34 rows (aproximadamente)
DELETE FROM `texto`;
/*!40000 ALTER TABLE `texto` DISABLE KEYS */;
INSERT INTO `texto` (`id_texto`, `id_tipoT`, `contenido`) VALUES
	(1, 3, 'Somos una empresa que ha conjugado la gastronomía Colombiana tradicional con las actuales exigencias de nuestros clientes, logrando una atención personalizada. \r\n\r\n'),
	(2, 3, 'Nuestro objeto es otorgar un Servicio de Alta Calidad, integral, para así responder satisfactoriamente a las expectativas de su institución.'),
	(3, 3, 'Al contratar nuestros servicios de alimentación se obtendrán,\r\nentre otros, los siguientes beneficios:'),
	(4, 3, 'Excelencia y Seguridad.'),
	(5, 3, 'Atención personalizada.'),
	(6, 3, ' Rápida Capacidad de Respuesta.'),
	(7, 3, 'Mejoramiento Continuo.'),
	(8, 3, 'Supervisión estratégica.'),
	(9, 3, 'Nuestra orientación de servicio hacia el cliente, nos permite concentrarnos en sus\r\nnecesidades y conseguir un clima de colaboración cliente-proveedor que resulte siempre\r\nsatisfactorio para ambas partes. Basamos nuestros principios en aportar:'),
	(10, 3, 'Valor gastronómico.'),
	(11, 3, 'Calidad de materias primas.'),
	(12, 3, 'Seguridad e higiene.'),
	(13, 3, 'Garantía de servicio.'),
	(14, 3, 'Atención al cliente.'),
	(15, 3, 'La rapidez, el cambio y la innovación son valores presentes en FERVIL.\r\nSomos conscientes que a largo plazo aseguran la competitividad y el\r\nliderazgo de nuestra empresa además del desarrollo de un servicio plenamente\r\nadaptado a las exigencias de nuestros clientes.'),
	(16, 3, 'FERVIL busca la máxima calidad en todos los procesos productivos y servicios que en sus instalaciones se suceden cada día. '),
	(17, 3, 'Esta vocación de calidad exige a FERVIL el esmero en todos sus procesos siguiendo unos estrictos criterios de higiene, calidad y medio ambiente. Por ello destacamos: '),
	(18, 3, 'La plena satisfacción de nuestros clientes.'),
	(19, 3, 'Cumplimiento de la legislación y con todos los requisitos establecidos por nuestros clientes.'),
	(20, 3, 'La mejora continua de nuestros procesos e indicadores de gestión.'),
	(21, 3, 'Seguridad alimentaria estableciendo los mecanismos necesarios para asegurar un'),
	(22, 3, 'correcto tratamiento de los productos.'),
	(23, 3, 'Desde FERVIL EMPRESAS somos conscientes que una buena alimentación mejora productividad y la motivación de los una empresa. Para nosotros el servicio de comedor de una empresa va más allá de la alimentación. Es un punto de reunión de los trabajadores, sirve de paréntesis en el esfuerzo diario, y ayuda a terminar la jornada con el mismo de la mañana.'),
	(24, 3, 'Garantizamos que los menús que servimos son adecuados para las características de la en función de su actividad y sus trabajadores, y ofrecemos lo mejor en calidad y en servicio.'),
	(25, 3, 'Nuestros clientes, degustaran nuestras preparaciones recién elaboradas, atendido por grupo de trabajo entrenado con el fin de brindar servicio de excelencia.'),
	(26, 3, 'Es otra de nuestras modalidades de servicio, que consiste en la elaboración o contratación de los alimentos fuera de las instalaciones del cliente para ser entregados oportunamente de acuerdo a sus necesidades. '),
	(27, 3, 'Si el cliente así lo requiere podemos acondicionar los alimentos en empaques individuales para ser degustadas, en los horarios establecidos, bajo las recomendaciones nutricionales y de higiene requeridos.'),
	(28, 3, 'Como valor agregado para nuestros clientes ofrecemos nuestros servicios para atender sus reuniones empresariales dentro o fuera de susinstalaciones.'),
	(29, 3, 'Lo anterior nos permite poner a su disposición el servicio completo de banqueteria del más alto nivel, acompañado de meseros entrenados, ambientación de salones, y en general, todos aquellos detalles que la ocasión amerite.'),
	(30, 3, 'En FERVIL entendemos la gran importancia que tiene una adecuada alimentación y los efectos positivos que ésta conlleva. Los centros hospitalarios como centros de recuperación y sanación, tienen la obligación de proporcionar alimentos que sean saludables, ya que tienen consecuencias en términos de nutrición, riesgo de enfermedad, salud pública, salud ambiental, social y bienestar.'),
	(31, 3, 'En FERVIL disponemos de todos los medios actuales que aseguran una correcta manipulación, almacenaje y distribución, aportando una excelente seguridad alimentaria y una gama de productos especialmente pensados para satisfacer las necesidades nutricionales de nuestros clientes.'),
	(32, 3, 'Nuestros servicios van desde la provisión de todo tipo de alimentos de primera calidad, hasta la gestión integral de cocinas y/o cafeterías, pasando por el desarrollo de los distintos menús diseñados por nuestros expertos dietistas.'),
	(33, 3, ''),
	(34, 3, '');
/*!40000 ALTER TABLE `texto` ENABLE KEYS */;


-- Volcando estructura para tabla fervil.tipotexto
DROP TABLE IF EXISTS `tipotexto`;
CREATE TABLE IF NOT EXISTS `tipotexto` (
  `id_tipoT` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipoT` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_tipoT`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla fervil.tipotexto: ~4 rows (aproximadamente)
DELETE FROM `tipotexto`;
/*!40000 ALTER TABLE `tipotexto` DISABLE KEYS */;
INSERT INTO `tipotexto` (`id_tipoT`, `nombre_tipoT`) VALUES
	(1, 'titulo'),
	(2, 'menu'),
	(3, 'texto'),
	(4, 'descripcion');
/*!40000 ALTER TABLE `tipotexto` ENABLE KEYS */;
