/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : gepladoc

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 19/11/2020 15:55:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for colorines
-- ----------------------------
DROP TABLE IF EXISTS `colorines`;
CREATE TABLE `colorines`  (
  `IdColor` int(11) NOT NULL,
  `ColorName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `WebName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hex` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Valor Hexadecimal',
  `rgb` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Valor RGB',
  PRIMARY KEY (`IdColor`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of colorines
-- ----------------------------
INSERT INTO `colorines` VALUES (1, 'Rojo Indio', 'IndianRed', '#CD5C5C', '205, 92, 205');
INSERT INTO `colorines` VALUES (2, 'Coral Suave', 'LightCoral', '#F08080', '240, 128, 128');
INSERT INTO `colorines` VALUES (3, 'Salmón', 'Salmon', '#FA8072', '250, 128, 114');
INSERT INTO `colorines` VALUES (4, 'Salmón oscuro', 'DarkSalmon', '#E9967A', '233, 150, 122');
INSERT INTO `colorines` VALUES (5, 'Salmón Suave', 'LightSalmon', '#FFA07A', '255, 160, 122');
INSERT INTO `colorines` VALUES (6, 'Carmesí', 'Crimson', '#DC143C', '220, 20, 60');
INSERT INTO `colorines` VALUES (7, 'Rojo Puro', 'Red', '#FF0000', '255, 0, 0');
INSERT INTO `colorines` VALUES (8, 'Rojo Fuego', 'FireBrick', '#B22222', '178, 34, 34');
INSERT INTO `colorines` VALUES (9, 'Rojo Oscuro', 'DarkRed', '#8B0000', '139, 0, 0');
INSERT INTO `colorines` VALUES (10, 'Rosa', 'Pink', '#FFC0CB', '255, 192, 203');
INSERT INTO `colorines` VALUES (11, 'Rosa Suave', 'LightPink', '#FFB6C1', '255, 182, 193');
INSERT INTO `colorines` VALUES (12, 'Rosa Cálido', 'HotPink', '#FF69B4', '255, 105, 180');
INSERT INTO `colorines` VALUES (13, 'Rosa Profundo', 'DeepPink', '#FF1493', '255, 20, 147');
INSERT INTO `colorines` VALUES (14, 'Medio Violeta Rojo', 'MediumVioletRed', '#C71585', '199, 21, 133');
INSERT INTO `colorines` VALUES (15, 'Rosa Pastel', 'PaleVioletRed', '#DB7093', '219, 112, 147');
INSERT INTO `colorines` VALUES (16, 'Salmón Suave', 'LightSalmon', '#FFA07A', '255, 160, 122');
INSERT INTO `colorines` VALUES (17, 'Naranja Coral', 'Coral', '#FF7F50', '255, 127, 80');
INSERT INTO `colorines` VALUES (18, 'Tomate', 'Tomato', '#FF6347', '255, 99, 71');
INSERT INTO `colorines` VALUES (19, 'Naranja Rojizo', 'OrangeRed', '#FF4500', '255, 69, 0');
INSERT INTO `colorines` VALUES (20, 'Naranja Oscuro', 'DarkOrange', '#FF8C00', '255, 140, 0');
INSERT INTO `colorines` VALUES (21, 'Naranja Puro', 'Orange', '#FFA500', '255, 165, 0');
INSERT INTO `colorines` VALUES (22, 'Amarillo Oro', 'Gold', '#FFD700', '255, 215, 0');
INSERT INTO `colorines` VALUES (23, 'Amarillo Puro', 'Yellow', '#FFFF00', '255, 255, 0');
INSERT INTO `colorines` VALUES (24, 'Amarillo Suave', 'LightYellow', '#FFFFE0', '255, 255, 224');
INSERT INTO `colorines` VALUES (25, 'Amarillo Limón', 'LemonChiffon', '#FFFACD', '255, 250, 205');
INSERT INTO `colorines` VALUES (26, 'Amarillo Manzana Suave', 'LightGoldenrodYellow', '#FAFAD2', '250, 250, 210');
INSERT INTO `colorines` VALUES (27, 'Amarillo Papaya', 'PapayaWhip', '#FFEFD5', '255, 239, 213');
INSERT INTO `colorines` VALUES (28, 'Amarillo Mocasín', 'Moccasin', '#FFE4B5', '255, 228, 181');
INSERT INTO `colorines` VALUES (29, 'Amarillo Melocotón', 'PeachPuff', '#FFDAB9', '255, 218, 185');
INSERT INTO `colorines` VALUES (30, 'Amarillo Oro Pálido', 'PaleGoldenrod', '#EEE8AA', '238, 232, 170');
INSERT INTO `colorines` VALUES (31, 'Amarillo Caqui', 'Khaki', '#F0E68C', '240, 230, 140');
INSERT INTO `colorines` VALUES (32, 'Amarillo Caqui Oscuro', 'DarkKhaki', '#BDB76B', '189, 183, 107');
INSERT INTO `colorines` VALUES (33, 'Espliego', 'Lavender', '#E6E6FA', '230, 230, 250');
INSERT INTO `colorines` VALUES (34, 'Cardo', 'Thistle', '#D8BFD8', '216, 191, 216');
INSERT INTO `colorines` VALUES (35, 'Ciruela', 'Plum', '#DDA0DD', '221, 160, 221');
INSERT INTO `colorines` VALUES (36, 'Violeta', 'Violet', '#EE82EE', '238, 130, 238');
INSERT INTO `colorines` VALUES (37, 'Orquídea', 'Orchid', '#DA70D6', '218, 112, 214');
INSERT INTO `colorines` VALUES (38, 'Fucsia', 'Fuchsia', '#FF00FF', '255, 0, 255');
INSERT INTO `colorines` VALUES (39, 'Magenta', 'Magenta', '#FF00FF', '255, 0, 255');
INSERT INTO `colorines` VALUES (40, 'Orquídea Medio', 'MediumOrchid', '#BA55D3', '186, 85, 211');
INSERT INTO `colorines` VALUES (41, 'Púrpura Medio', 'MediumPurple', '#9370DB', '147, 112, 219');
INSERT INTO `colorines` VALUES (42, 'Amatista', 'Amethyst', '#9966CC', '153, 102, 204');
INSERT INTO `colorines` VALUES (43, 'Azul Violeta', 'BlueViolet', '#8A2BE2', '138, 43, 226');
INSERT INTO `colorines` VALUES (44, 'Violeta Oscuro', 'DarkViolet', '#9400D3', '148, 0, 211');
INSERT INTO `colorines` VALUES (45, 'Orquídea Oscuro', 'DarkOrchid', '#9932CC', '153, 50, 204');
INSERT INTO `colorines` VALUES (46, 'Magenta Oscuro', 'DarkMagenta', '#8B008B', '139, 0, 139');
INSERT INTO `colorines` VALUES (47, 'Púrpura', 'Purple', '#800080', '128, 0, 128');
INSERT INTO `colorines` VALUES (48, 'Índigo', 'Indigo', '#4B0082', '75, 0, 130');
INSERT INTO `colorines` VALUES (49, 'Azul Pizarra', 'SlateBlue', '#6A5ACD', '106, 90, 205');
INSERT INTO `colorines` VALUES (50, 'Azul Pizarra Medio', 'MediumSlateBlue', '#7B68EE', '123, 104, 238');
INSERT INTO `colorines` VALUES (51, 'Azul Pizarra Oscuro', 'DarkSlateBlue', '#483D8B', '72, 61, 139');
INSERT INTO `colorines` VALUES (52, 'Verde Amarillento', 'GreenYellow', '#ADFF2F', '173, 255, 47');
INSERT INTO `colorines` VALUES (53, 'Verde Cartujano', 'Chartreuse', '#7FFF00', '127, 255, 0');
INSERT INTO `colorines` VALUES (54, 'Verde Césped', 'LawnGreen', '#7CFC00', '124, 253, 0');
INSERT INTO `colorines` VALUES (55, 'Lima', 'Lime', '#00FF00', '0, 255, 0');
INSERT INTO `colorines` VALUES (56, 'Verde Lima', 'LimeGreen', '#32CD32', '50, 205, 50');
INSERT INTO `colorines` VALUES (57, 'Verde Pálido', 'PaleGreen', '#98FB98', '152, 251, 152');
INSERT INTO `colorines` VALUES (58, 'Verde Claro', 'LightGreen', '#90EE90', '144, 238, 144');
INSERT INTO `colorines` VALUES (59, 'Verde Primavera Medio', 'MediumSpringGreen', '#00FA9A', '0, 250, 154');
INSERT INTO `colorines` VALUES (60, 'Verde Primavera', 'SpringGreen', '#00FF7F', '0, 255, 127');
INSERT INTO `colorines` VALUES (61, 'Verde Mar Medio', 'MediumSeaGreen', '#3CB371', '60, 179, 113');
INSERT INTO `colorines` VALUES (62, 'Verde Mar', 'SeaGreen', '#2E8B57', '46, 139, 87');
INSERT INTO `colorines` VALUES (63, 'Verde Bosque', 'ForestGreen', '#228B22', '34, 139, 34');
INSERT INTO `colorines` VALUES (64, 'Verde', 'Green', '#008000', '0, 128, 0');
INSERT INTO `colorines` VALUES (65, 'Verde Oscuro', 'DarkGreen', '#006400', '0, 100, 0');
INSERT INTO `colorines` VALUES (66, 'Amarillo Verdoso', 'YellowGreen', '#9ACD32', '154, 205, 50');
INSERT INTO `colorines` VALUES (67, 'Verde Oliva', 'OliveDrab', '#6B8E23', '107, 142, 35');
INSERT INTO `colorines` VALUES (68, 'Oliva', 'Olive', '#808000', '128, 128, 0');
INSERT INTO `colorines` VALUES (69, 'Verde Oliva Oscuro', 'DarkOliveGreen', '#556B2F', '85, 107, 47');
INSERT INTO `colorines` VALUES (70, 'Aguamarina Medio', 'MediumAquamarine', '#66CDAA', '102, 205, 170');
INSERT INTO `colorines` VALUES (71, 'Verde Mar Oscuro', 'DarkSeaGreen', '#8FBC8F', '143, 188, 143');
INSERT INTO `colorines` VALUES (72, 'Verde Mar Claro', 'LightSeaGreen', '#20B2AA', '32, 178, 170');
INSERT INTO `colorines` VALUES (73, 'Cyan Oscuro', 'DarkCyan', '#008B8B', '0, 139, 139');
INSERT INTO `colorines` VALUES (74, 'Carcel', 'Teal', '#008080', '0, 128, 128');
INSERT INTO `colorines` VALUES (75, 'Agua', 'Aqua', '#00FFFF', '0, 255, 255');
INSERT INTO `colorines` VALUES (76, 'Cyan', 'Cyan', '#00FFFF', '0, 255, 255');
INSERT INTO `colorines` VALUES (77, 'Cyan Suave', 'LightCyan', '#E0FFFF', '224, 255, 255');
INSERT INTO `colorines` VALUES (78, 'Turquesa Pastel', 'PaleTurquoise', '#AFEEEE', '175, 238, 238');
INSERT INTO `colorines` VALUES (79, 'Aguamarina', 'Aquamarine', '#7FFFD4', '127, 255, 212');
INSERT INTO `colorines` VALUES (80, 'Turquesa', 'Turquoise', '#40E0D0', '64, 224, 208');
INSERT INTO `colorines` VALUES (81, 'Turquesa Medio', 'MediumTurquoise', '#48D1CC', '72, 209, 204');
INSERT INTO `colorines` VALUES (82, 'Turquesa Oscuro', 'DarkTurquoise', '#00CED1', '0, 206, 209');
INSERT INTO `colorines` VALUES (83, 'Azul Cadete', 'CadetBlue', '#5F9EA0', '95, 158, 160');
INSERT INTO `colorines` VALUES (84, 'Azul Acero', 'SteelBlue', '#4682B4', '70, 130, 180');
INSERT INTO `colorines` VALUES (85, 'Azul Acero Claro', 'LightSteelBlue', '#B0C4DE', '176, 196, 222');
INSERT INTO `colorines` VALUES (86, 'Azul Pálido', 'PowderBlue', '#B0E0E6', '176, 224, 230');
INSERT INTO `colorines` VALUES (87, 'Azul Claro', 'LightBlue', '#ADD8E6', '173, 216, 230');
INSERT INTO `colorines` VALUES (88, 'Azul Cielo', 'SkyBlue', '#87CEEB', '135, 206, 235');
INSERT INTO `colorines` VALUES (89, 'Azul Cielo Claro', 'LightSkyBlue', '#87CEFA', '135, 206, 250');
INSERT INTO `colorines` VALUES (90, 'Azul Cielo Profundo', 'DeepSkyBlue', '#00BFFF', '0, 191, 255');
INSERT INTO `colorines` VALUES (91, 'Azul Capota', 'DodgerBlue', '#1E90FF', '30, 144, 255');
INSERT INTO `colorines` VALUES (92, 'Azul Añil', 'CornflowerBlue', '#6495ED', '100, 149, 237');
INSERT INTO `colorines` VALUES (93, 'Azul Pizarra Medio', 'MediumSlateBlue', '#7B68EE', '123, 104, 238');
INSERT INTO `colorines` VALUES (94, 'Azul Real', 'RoyalBlue', '#4169E1', '65, 105, 255');
INSERT INTO `colorines` VALUES (95, 'Azul', 'Blue', '#0000FF', '0, 0, 255');
INSERT INTO `colorines` VALUES (96, 'Azul Medio', 'MediumBlue', '#0000CD', '0, 0, 205');
INSERT INTO `colorines` VALUES (97, 'Azul Oscuro', 'DarkBlue', '#00008B', '0, 0, 139');
INSERT INTO `colorines` VALUES (98, 'Azul Naval', 'Navy', '#000080', '0, 0, 128');
INSERT INTO `colorines` VALUES (99, 'Azul Media Noche', 'MidnightBlue', '#191970', '25, 25, 112');
INSERT INTO `colorines` VALUES (100, 'Seda de Maiz', 'Cornsilk', '#FFF8DC', '255, 248, 220');
INSERT INTO `colorines` VALUES (101, 'Almendra', 'BlanchedAlmond', '#FFEBCD', '255, 235, 205');
INSERT INTO `colorines` VALUES (102, 'Bizcocho', 'Bisque', '#FFE4C4', '255, 228, 196');
INSERT INTO `colorines` VALUES (103, 'Marrón Navaja', 'NavajoWhite', '#FFDEAD', '255, 222, 173');
INSERT INTO `colorines` VALUES (104, 'Marrón Trigo', 'Wheat', '#F5DEB3', '245, 222, 179');
INSERT INTO `colorines` VALUES (105, 'Madera Fuerte', 'BurlyWood', '#DEB887', '222, 184, 135');
INSERT INTO `colorines` VALUES (106, 'Marrón bronceado', 'Tan', '#D2B48C', '210, 180, 140');
INSERT INTO `colorines` VALUES (107, 'Marrón Atractivo', 'RosyBrown', '#BC8F8F', '188, 143, 143');
INSERT INTO `colorines` VALUES (108, 'Marrón Arenoso', 'SandyBrown', '#F4A460', '224, 164, 96');
INSERT INTO `colorines` VALUES (109, 'Vara de Oro', 'Goldenrod', '#DAA520', '218, 165, 32');
INSERT INTO `colorines` VALUES (110, 'Vara de Oro Oscura', 'DarkGoldenrod', '#B8860B', '184, 134, 11');
INSERT INTO `colorines` VALUES (111, 'Marrón Perú', 'Peru', '#CD853F', '205, 133, 63');
INSERT INTO `colorines` VALUES (112, 'Marrón Chocolate', 'Chocolate', '#D2691E', '210, 105, 30');
INSERT INTO `colorines` VALUES (113, 'Marrón Silla', 'SaddleBrown', '#8B4513', '139, 69, 19');
INSERT INTO `colorines` VALUES (114, 'Marrón Siena', 'Sienna', '#A0522D', '160, 82, 45');
INSERT INTO `colorines` VALUES (115, 'Marrón', 'Brown', '#A52A2A', '165, 42, 42');
INSERT INTO `colorines` VALUES (116, 'Castaño', 'Maroon', '#800000', '128, 0, 0');
INSERT INTO `colorines` VALUES (117, 'Miel Crema', 'Honeydew', '#F0FFF0', '240, 255, 240');
INSERT INTO `colorines` VALUES (118, 'Menta Crema', 'MintCream', '#F5FFFA', '245, 255, 250');
INSERT INTO `colorines` VALUES (119, 'Azul Celeste', 'Azure', '#F0FFFF', '240, 255, 255');
INSERT INTO `colorines` VALUES (120, 'Azul Alicia', 'AliceBlue', '#F0F8FF', '240, 248, 255');
INSERT INTO `colorines` VALUES (121, 'Blanco Fantasma', 'GhostWhite', '#F8F8FF', '248, 248, 255');
INSERT INTO `colorines` VALUES (122, 'Blanco Humo', 'WhiteSmoke', '#F5F5F5', '245, 245, 245');
INSERT INTO `colorines` VALUES (123, 'Concha de Mar', 'Seashell', '#FFF5EE', '255, 245, 238');
INSERT INTO `colorines` VALUES (124, 'Beige', 'Beige', '#F5F5DC', '245, 245, 220');
INSERT INTO `colorines` VALUES (125, 'Blanco Cordón Viejo', 'OldLace', '#FDF5E6', '253, 245, 230');
INSERT INTO `colorines` VALUES (126, 'Blanco Floral', 'FloralWhite', '#FFFAF0', '255, 250, 240');
INSERT INTO `colorines` VALUES (127, 'Blanco Marfil', 'Ivory', '#FFFFF0', '255, 255, 240');
INSERT INTO `colorines` VALUES (128, 'Blanco Antigüo', 'AntiqueWhite', '#FAEBD7', '250, 235, 215');
INSERT INTO `colorines` VALUES (129, 'Blanco Lino', 'Linen', '#FAF0E6', '250, 240, 230');
INSERT INTO `colorines` VALUES (130, 'Lavanda', 'LavenderBlush', '#FFF0F5', '255, 240, 245');
INSERT INTO `colorines` VALUES (131, 'Rosa Palo', 'MistyRose', '#FFE4E1', '255, 228, 225');
INSERT INTO `colorines` VALUES (132, 'Gainsboro', 'Gainsboro', '#DCDCDC', '220, 220, 220');
INSERT INTO `colorines` VALUES (133, 'Gris Claro', 'LightGrey', '#D3D3D3', '211, 211, 211');
INSERT INTO `colorines` VALUES (134, 'Gris Plata', 'Silver', '#C0C0C0', '192, 192, 192');
INSERT INTO `colorines` VALUES (135, 'Gris Oscuro', 'DarkGray', '#A9A9A9', '169, 169, 169');
INSERT INTO `colorines` VALUES (136, 'Gris', 'Gray', '#808080', '128, 128, 128');
INSERT INTO `colorines` VALUES (137, 'Gris Ténue', 'DimGray', '#696969', '105, 105, 105');
INSERT INTO `colorines` VALUES (138, 'Gris Pizarra Claro', 'LightSlateGray', '#778899', '119, 136, 153');
INSERT INTO `colorines` VALUES (139, 'Gris Pizarra', 'SlateGray', '#708090', '112, 128, 144');
INSERT INTO `colorines` VALUES (140, 'Gris Pizarra Oscuro', 'DarkSlateGray', '#2F4F4F', '47, 79, 79');

-- ----------------------------
-- Table structure for historia
-- ----------------------------
DROP TABLE IF EXISTS `historia`;
CREATE TABLE `historia`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Descripcion` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `IdApp` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `IdUser` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fecha`(`hora`) USING BTREE,
  INDEX `hora`(`hora`) USING BTREE,
  INDEX `IdUser`(`IdUser`) USING BTREE,
  INDEX `IdApp`(`IdApp`) USING BTREE,
  FULLTEXT INDEX `descripcion`(`Descripcion`)
) ENGINE = MyISAM AUTO_INCREMENT = 907 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of historia
-- ----------------------------
INSERT INTO `historia` VALUES (873, '2020-11-18', '13:06:57', 'Actualizo la Plantilla 9 = UPDATE plantillas\r\n\r\n                            SET PlantillaDescripcion = \'Descripcion del ejemplo\',active=\'1\'\r\n                            WHERE IdPlantilla = \'9\'\r\n                            ', 'Plantilla', 'root');
INSERT INTO `historia` VALUES (874, '2020-11-18', '13:08:30', 'Actualizo la Plantilla 9 = UPDATE plantillas\r\n\r\n                            SET PlantillaDescripcion = \'Descripcion del ejemplo\',active=\'1\'\r\n                            WHERE IdPlantilla = \'9\'\r\n                            ', 'Plantilla', 'root');
INSERT INTO `historia` VALUES (875, '2020-11-18', '15:53:08', '{\"exito\":null,\"urlfile\":\"\",\"msg\":\"Plantilla no Valida\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (876, '2020-11-18', '15:53:31', '{\"exito\":null,\"urlfile\":\"\",\"msg\":\"Plantilla no Valida\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (877, '2020-11-18', '15:54:26', '{\"exito\":null,\"urlfile\":\"\",\"msg\":\"Plantilla no Valida\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (878, '2020-11-18', '15:54:54', '{\"exito\":false,\"urlfile\":\"\",\"msg\":\"Plantilla no Valida\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (879, '2020-11-18', '15:55:21', '{\"exito\":false,\"urlfile\":\"\",\"msg\":\"NEmpleado no Valido\",\"embed\":\"\"}', 'WS', '28009');
INSERT INTO `historia` VALUES (880, '2020-11-18', '15:55:29', '{\"exito\":false,\"urlfile\":\"\",\"msg\":\"ApiKey no Valida\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (881, '2020-11-19', '11:02:29', 'Registro la Plantilla 1 = INSERT INTO plantillas \n                (IdPlantilla, PlantillaNombre, PlantillaDescripcion, fecha, hora, IdUser, PlantillaFile) \n                VALUES (\'1\',\'Archivo de Test\',\'Formato para testear las variables\',\'2020-11-19\',\'11:02:29\',\'root\'\n                ,\'https://plataformaitavu.tamaulipas.gob.mx/gepladocplantillas/1.docx\'\n                )', 'Plantilla', 'root');
INSERT INTO `historia` VALUES (882, '2020-11-19', '12:51:54', '{\"exito\":false,\"urlfile\":\"\",\"msg\":\"Plantilla no Valida\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (883, '2020-11-19', '12:52:53', '{\"exito\":false,\"urlfile\":\"\",\"msg\":\"Plantilla no Valida\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (884, '2020-11-19', '12:52:56', '{\"exito\":false,\"urlfile\":\"\",\"msg\":\"Plantilla no Valida\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (885, '2020-11-19', '12:53:20', '{\"exito\":false,\"urlfile\":\"\",\"msg\":\"Plantilla no Valida\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (886, '2020-11-19', '12:53:45', '{\"exito\":false,\"urlfile\":\"\",\"msg\":\"Plantilla no Valida\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (887, '2020-11-19', '12:54:20', '{\"exito\":false,\"urlfile\":\"\",\"msg\":\"Plantilla no Valida\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (888, '2020-11-19', '12:54:43', '{\"exito\":false,\"urlfile\":\"\",\"msg\":\"Plantilla no Valida\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (889, '2020-11-19', '12:55:36', '{\"exito\":false,\"urlfile\":\"\",\"msg\":\"Plantilla no Valida\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (890, '2020-11-19', '12:55:53', '{\"exito\":false,\"urlfile\":\"\",\"msg\":\"Plantilla no Valida\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (891, '2020-11-19', '12:32:45', 'Actualizo la Plantilla 1 = select * from plantillas WHERE IdPlantilla =\'1\'', 'Plantilla', 'root');
INSERT INTO `historia` VALUES (892, '2020-11-19', '12:34:54', 'Actualizo la Plantilla 1 = select * from plantillas WHERE IdPlantilla =\'1\'', 'Plantilla', 'root');
INSERT INTO `historia` VALUES (893, '2020-11-19', '12:35:59', 'Actualizo la Plantilla 1 = UPDATE plantillas\n\n                SET PlantillaDescripcion = \'Formato para testear las variables\',active=\'1\'\n                WHERE IdPlantilla = \'1\'\n                ', 'Plantilla', 'root');
INSERT INTO `historia` VALUES (894, '2020-11-19', '13:00:52', '{\"exito\":false,\"urlfile\":\"\",\"msg\":\"Error al crear el archivo de plantilla\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (895, '2020-11-19', '13:05:38', '{\"exito\":false,\"urlfile\":\"\",\"msg\":\"Error al crear el archivo de plantilla\",\"embed\":\"\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (896, '2020-11-19', '12:48:15', '{\"exito\":false,\"urlfile\":\"\",\"msg\":\"ApiKey no Valida\",\"embed\":\"\"}', 'WS', '');
INSERT INTO `historia` VALUES (897, '2020-11-19', '12:48:27', '1', 'Count Plantilla', '2809');
INSERT INTO `historia` VALUES (898, '2020-11-19', '12:48:27', '{\"exito\":true,\"urlfile\":\"https://plataformaitavu.tamaulipas.gob.mx/gepladoc/output/2809_1_TxgVdf5NDMMGoLjY.docx\",\"msg\":\"Archivo creado satisfactoriamente\",\"embed\":\"https://view.officeapps.live.com/op/embed.aspx?src=https://plataformaitavu.tamaulipas.gob.mx/gepladoc/output/2809_1_TxgVdf5NDMMGoLjY.docx\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (899, '2020-11-19', '13:13:00', '1', 'Count Plantilla', '2809');
INSERT INTO `historia` VALUES (900, '2020-11-19', '13:13:00', '{\"exito\":true,\"urlfile\":\"https://plataformaitavu.tamaulipas.gob.mx/gepladoc/output/2809_1_sbn9qCl0YiQ1flJV.docx\",\"msg\":\"Archivo creado satisfactoriamente\",\"embed\":\"https://view.officeapps.live.com/op/embed.aspx?src=https://plataformaitavu.tamaulipas.gob.mx/gepladoc/output/2809_1_sbn9qCl0YiQ1flJV.docx\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (901, '2020-11-19', '13:16:57', '1', 'Count Plantilla', '2809');
INSERT INTO `historia` VALUES (902, '2020-11-19', '13:16:57', '{\"exito\":true,\"urlfile\":\"https://plataformaitavu.tamaulipas.gob.mx/gepladoc/ws/output/2809_1_7DLVRzlmkhDuslET.docx\",\"msg\":\"Archivo creado satisfactoriamente\",\"embed\":\"https://view.officeapps.live.com/op/embed.aspx?src=https://plataformaitavu.tamaulipas.gob.mx/gepladoc/ws/output/2809_1_7DLVRzlmkhDuslET.docx\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (903, '2020-11-19', '13:56:16', '1', 'Count Plantilla', '2809');
INSERT INTO `historia` VALUES (904, '2020-11-19', '13:56:16', '{\"exito\":true,\"urlfile\":\"https://plataformaitavu.tamaulipas.gob.mx/gepladoc/ws/output/2809_1_koLBjVHCa03dS061.docx\",\"msg\":\"Archivo creado satisfactoriamente\",\"embed\":\"https://view.officeapps.live.com/op/embed.aspx?src=https://plataformaitavu.tamaulipas.gob.mx/gepladoc/ws/output/2809_1_koLBjVHCa03dS061.docx\"}', 'WS', '2809');
INSERT INTO `historia` VALUES (905, '2020-11-19', '14:05:12', '1', 'Count Plantilla', '2809');
INSERT INTO `historia` VALUES (906, '2020-11-19', '14:05:12', '{\"exito\":true,\"urlfile\":\"https://plataformaitavu.tamaulipas.gob.mx/gepladoc/ws/output/2809_1_e8lBc6kFdKpHGQ7x.docx\",\"msg\":\"Archivo creado satisfactoriamente\",\"embed\":\"https://view.officeapps.live.com/op/embed.aspx?src=https://plataformaitavu.tamaulipas.gob.mx/gepladoc/ws/output/2809_1_e8lBc6kFdKpHGQ7x.docx\"}', 'WS', '2809');

-- ----------------------------
-- Table structure for plantillas
-- ----------------------------
DROP TABLE IF EXISTS `plantillas`;
CREATE TABLE `plantillas`  (
  `IdPlantilla` int(100) NOT NULL,
  `PlantillaNombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `PlantillaDescripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `PlantillaFile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time(6) NOT NULL,
  `IdUser` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`IdPlantilla`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of plantillas
-- ----------------------------
INSERT INTO `plantillas` VALUES (1, 'Archivo de Test', 'Formato para testear las variables', 'https://plataformaitavu.tamaulipas.gob.mx/gepladocplantillas/1.docx', '2020-11-19', '11:02:29.000000', 'root', 1);

-- ----------------------------
-- Table structure for preferences
-- ----------------------------
DROP TABLE IF EXISTS `preferences`;
CREATE TABLE `preferences`  (
  `Preference` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `GroupA` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Agrupacion para organizar 1',
  `GroupB` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Agrupacion para organizar 2',
  `info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Preference`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of preferences
-- ----------------------------
INSERT INTO `preferences` VALUES ('AcuerdoConf', 'FALSE', '', '', '');
INSERT INTO `preferences` VALUES ('Cliente', 'Rintera', '', '', '');
INSERT INTO `preferences` VALUES ('ColorDeFondo', '#FBEBC6', '', '', '');
INSERT INTO `preferences` VALUES ('ColorPrincipal', '#529E3F', '', '', '');
INSERT INTO `preferences` VALUES ('ColorResaltado', '#EBBF1E', '', '', '');
INSERT INTO `preferences` VALUES ('ColorSecundario', '#F5D281', '', '', '');
INSERT INTO `preferences` VALUES ('CorreoAdministrador', 'printepolis@gmail.com', '', '', '');
INSERT INTO `preferences` VALUES ('Custom', 'FALSE', '', '', '');
INSERT INTO `preferences` VALUES ('Director', '', '', '', '');
INSERT INTO `preferences` VALUES ('IdPlantilla', '1', '', '', '');
INSERT INTO `preferences` VALUES ('JefeInformatica', 'Ing. Juan José Pedraza Perales', '', '', '');
INSERT INTO `preferences` VALUES ('LogoColorInverso', 'FALSE', '', '', '');
INSERT INTO `preferences` VALUES ('LogoImagePNG', 'TRUE', '', '', '');
INSERT INTO `preferences` VALUES ('LogoPDFWidth', '10', '', '', '');
INSERT INTO `preferences` VALUES ('Mail-Footer', '<b style=color:#005BA0>Dpto. de Informatica | </b>.  Tel. 318-5516 Ext.: <b>46612</b>, <b>46524</b>, <b>46580</b>,  <b>46530</b>, <b>46516</b> y <b>46543</b>', '', '', '');
INSERT INTO `preferences` VALUES ('Mail-Host', 'smtp.gmail.com', '', '', '');
INSERT INTO `preferences` VALUES ('Mail-Password', '', '', '', '');
INSERT INTO `preferences` VALUES ('Mail-Port', '587', '', '', '');
INSERT INTO `preferences` VALUES ('Mail-SMTPSecure', 'tls', '', '', '');
INSERT INTO `preferences` VALUES ('Mail-Username', '', '', '', '');
INSERT INTO `preferences` VALUES ('MailSend', 'TRUE', '', '', '');
INSERT INTO `preferences` VALUES ('MostrarApps', 'TRUE', '', '', '');
INSERT INTO `preferences` VALUES ('NuevosReportes', 'FALSE', '', '', '');
INSERT INTO `preferences` VALUES ('PublicIndex', 'FALSE', '', '', '');
INSERT INTO `preferences` VALUES ('RinteraDescription', 'Dashboard', '', '', '');
INSERT INTO `preferences` VALUES ('RinteraName', 'PROCIMART', '', '', '');
INSERT INTO `preferences` VALUES ('SearchVisualList', 'TRUE', '', '', '');
INSERT INTO `preferences` VALUES ('UsuariosForaneos', 'FALSE', '', '', '');
INSERT INTO `preferences` VALUES ('UsuariosForaneosIdCon', '1', '', '', '');
INSERT INTO `preferences` VALUES ('UsuariosForaneosQuery', '', '', '', '');
INSERT INTO `preferences` VALUES ('VisualLogo', 'TRUE', '', '', '');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `IdUser` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `NIP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `UserName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `RinteraLevel` int(1) NOT NULL,
  PRIMARY KEY (`IdUser`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('root', 'toor', 'Administrador', 0);
INSERT INTO `users` VALUES ('user', 'user', 'Usuario', 0);

-- ----------------------------
-- Table structure for variables
-- ----------------------------
DROP TABLE IF EXISTS `variables`;
CREATE TABLE `variables`  (
  `Variable` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Variable`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of variables
-- ----------------------------
INSERT INTO `variables` VALUES ('VC001', '');
INSERT INTO `variables` VALUES ('VC002', '');
INSERT INTO `variables` VALUES ('VC003', '');
INSERT INTO `variables` VALUES ('VC004', '');
INSERT INTO `variables` VALUES ('VC005', '');
INSERT INTO `variables` VALUES ('VC006', '');
INSERT INTO `variables` VALUES ('VC007', '');
INSERT INTO `variables` VALUES ('VC008', '');
INSERT INTO `variables` VALUES ('VC009', '');
INSERT INTO `variables` VALUES ('VC010', '');
INSERT INTO `variables` VALUES ('VC011', '');
INSERT INTO `variables` VALUES ('VC012', '');
INSERT INTO `variables` VALUES ('VC013', '');
INSERT INTO `variables` VALUES ('VC014', '');
INSERT INTO `variables` VALUES ('VC015', '');
INSERT INTO `variables` VALUES ('VC016', '');
INSERT INTO `variables` VALUES ('VC017', '');
INSERT INTO `variables` VALUES ('VC018', '');
INSERT INTO `variables` VALUES ('VC019', '');
INSERT INTO `variables` VALUES ('VC020', '');
INSERT INTO `variables` VALUES ('VC021', '');
INSERT INTO `variables` VALUES ('VC022', '');
INSERT INTO `variables` VALUES ('VC023', '');
INSERT INTO `variables` VALUES ('VC024', '');
INSERT INTO `variables` VALUES ('VC025', '');
INSERT INTO `variables` VALUES ('VC026', '');
INSERT INTO `variables` VALUES ('VC027', '');
INSERT INTO `variables` VALUES ('VC028', '');
INSERT INTO `variables` VALUES ('VC029', '');
INSERT INTO `variables` VALUES ('VC030', '');
INSERT INTO `variables` VALUES ('VC031', '');
INSERT INTO `variables` VALUES ('VC032', '');
INSERT INTO `variables` VALUES ('VC033', '');
INSERT INTO `variables` VALUES ('VC034', '');
INSERT INTO `variables` VALUES ('VC035', '');
INSERT INTO `variables` VALUES ('VC036', '');
INSERT INTO `variables` VALUES ('VC037', '');
INSERT INTO `variables` VALUES ('VC038', '');
INSERT INTO `variables` VALUES ('VC039', '');
INSERT INTO `variables` VALUES ('VC040', '');
INSERT INTO `variables` VALUES ('VC041', '');
INSERT INTO `variables` VALUES ('VC042', '');
INSERT INTO `variables` VALUES ('VC043', '');
INSERT INTO `variables` VALUES ('VC044', '');
INSERT INTO `variables` VALUES ('VC045', '');
INSERT INTO `variables` VALUES ('VC046', '');
INSERT INTO `variables` VALUES ('VC047', '');
INSERT INTO `variables` VALUES ('VC048', '');
INSERT INTO `variables` VALUES ('VC049', '');
INSERT INTO `variables` VALUES ('VC050', '');
INSERT INTO `variables` VALUES ('VC051', '');
INSERT INTO `variables` VALUES ('VC052', '');
INSERT INTO `variables` VALUES ('VC053', '');
INSERT INTO `variables` VALUES ('VC054', '');
INSERT INTO `variables` VALUES ('VC055', '');
INSERT INTO `variables` VALUES ('VC056', '');
INSERT INTO `variables` VALUES ('VC057', '');
INSERT INTO `variables` VALUES ('VC058', '');
INSERT INTO `variables` VALUES ('VC059', '');
INSERT INTO `variables` VALUES ('VC060', '');
INSERT INTO `variables` VALUES ('VC061', '');
INSERT INTO `variables` VALUES ('VC062', '');
INSERT INTO `variables` VALUES ('VC063', '');
INSERT INTO `variables` VALUES ('VC064', '');
INSERT INTO `variables` VALUES ('VC065', '');
INSERT INTO `variables` VALUES ('VC066', '');
INSERT INTO `variables` VALUES ('VC067', '');
INSERT INTO `variables` VALUES ('VC068', '');
INSERT INTO `variables` VALUES ('VC069', '');
INSERT INTO `variables` VALUES ('VC070', '');
INSERT INTO `variables` VALUES ('VC071', '');
INSERT INTO `variables` VALUES ('VC072', '');
INSERT INTO `variables` VALUES ('VC073', '');
INSERT INTO `variables` VALUES ('VC074', '');
INSERT INTO `variables` VALUES ('VC075', '');
INSERT INTO `variables` VALUES ('VC076', '');
INSERT INTO `variables` VALUES ('VC077', '');
INSERT INTO `variables` VALUES ('VC078', '');
INSERT INTO `variables` VALUES ('VC079', '');
INSERT INTO `variables` VALUES ('VC080', '');
INSERT INTO `variables` VALUES ('VC081', '');
INSERT INTO `variables` VALUES ('VC082', '');
INSERT INTO `variables` VALUES ('VC083', '');
INSERT INTO `variables` VALUES ('VC084', '');
INSERT INTO `variables` VALUES ('VC085', '');
INSERT INTO `variables` VALUES ('VC086', '');
INSERT INTO `variables` VALUES ('VC087', '');
INSERT INTO `variables` VALUES ('VC088', '');
INSERT INTO `variables` VALUES ('VC089', '');
INSERT INTO `variables` VALUES ('VC090', '');
INSERT INTO `variables` VALUES ('VC091', '');
INSERT INTO `variables` VALUES ('VC092', '');
INSERT INTO `variables` VALUES ('VC093', '');
INSERT INTO `variables` VALUES ('VC094', '');
INSERT INTO `variables` VALUES ('VC095', '');
INSERT INTO `variables` VALUES ('VC096', '');
INSERT INTO `variables` VALUES ('VC097', '');
INSERT INTO `variables` VALUES ('VC098', '');
INSERT INTO `variables` VALUES ('VC099', '');
INSERT INTO `variables` VALUES ('VC100', '');
INSERT INTO `variables` VALUES ('VC101', '');
INSERT INTO `variables` VALUES ('VC102', '');
INSERT INTO `variables` VALUES ('VC103', '');
INSERT INTO `variables` VALUES ('VC104', '');
INSERT INTO `variables` VALUES ('VC105', '');
INSERT INTO `variables` VALUES ('VC106', '');
INSERT INTO `variables` VALUES ('VC107', '');
INSERT INTO `variables` VALUES ('VC108', '');
INSERT INTO `variables` VALUES ('VC109', '');
INSERT INTO `variables` VALUES ('VC110', '');
INSERT INTO `variables` VALUES ('VC111', '');
INSERT INTO `variables` VALUES ('VC112', '');
INSERT INTO `variables` VALUES ('VC113', '');
INSERT INTO `variables` VALUES ('VC114', '');
INSERT INTO `variables` VALUES ('VC115', '');
INSERT INTO `variables` VALUES ('VC116', '');
INSERT INTO `variables` VALUES ('VC117', '');
INSERT INTO `variables` VALUES ('VC118', '');
INSERT INTO `variables` VALUES ('VC119', '');
INSERT INTO `variables` VALUES ('VC120', '');
INSERT INTO `variables` VALUES ('VC121', '');
INSERT INTO `variables` VALUES ('VC122', '');
INSERT INTO `variables` VALUES ('VC123', '');
INSERT INTO `variables` VALUES ('VC124', '');
INSERT INTO `variables` VALUES ('VC125', '');
INSERT INTO `variables` VALUES ('VC126', '');
INSERT INTO `variables` VALUES ('VC127', '');
INSERT INTO `variables` VALUES ('VC128', '');
INSERT INTO `variables` VALUES ('VC129', '');
INSERT INTO `variables` VALUES ('VC130', '');
INSERT INTO `variables` VALUES ('VC131', '');
INSERT INTO `variables` VALUES ('VC132', '');
INSERT INTO `variables` VALUES ('VC133', '');
INSERT INTO `variables` VALUES ('VC134', '');
INSERT INTO `variables` VALUES ('VC135', '');
INSERT INTO `variables` VALUES ('VC136', '');
INSERT INTO `variables` VALUES ('VC137', '');
INSERT INTO `variables` VALUES ('VC138', '');
INSERT INTO `variables` VALUES ('VC139', '');
INSERT INTO `variables` VALUES ('VC140', '');
INSERT INTO `variables` VALUES ('VC141', '');
INSERT INTO `variables` VALUES ('VC142', '');
INSERT INTO `variables` VALUES ('VC143', '');
INSERT INTO `variables` VALUES ('VC144', '');
INSERT INTO `variables` VALUES ('VC145', '');
INSERT INTO `variables` VALUES ('VC146', '');
INSERT INTO `variables` VALUES ('VC147', '');
INSERT INTO `variables` VALUES ('VC148', '');
INSERT INTO `variables` VALUES ('VC149', '');
INSERT INTO `variables` VALUES ('VC150', '');
INSERT INTO `variables` VALUES ('VC151', '');
INSERT INTO `variables` VALUES ('VC152', '');
INSERT INTO `variables` VALUES ('VC153', '');
INSERT INTO `variables` VALUES ('VC154', '');
INSERT INTO `variables` VALUES ('VC155', '');
INSERT INTO `variables` VALUES ('VC156', '');
INSERT INTO `variables` VALUES ('VC157', '');
INSERT INTO `variables` VALUES ('VC158', '');
INSERT INTO `variables` VALUES ('VC159', '');
INSERT INTO `variables` VALUES ('VC160', '');
INSERT INTO `variables` VALUES ('VC161', '');
INSERT INTO `variables` VALUES ('VC162', '');
INSERT INTO `variables` VALUES ('VC163', '');
INSERT INTO `variables` VALUES ('VC164', '');
INSERT INTO `variables` VALUES ('VC165', '');
INSERT INTO `variables` VALUES ('VC166', '');
INSERT INTO `variables` VALUES ('VC167', '');
INSERT INTO `variables` VALUES ('VC168', '');
INSERT INTO `variables` VALUES ('VC169', '');
INSERT INTO `variables` VALUES ('VC170', '');
INSERT INTO `variables` VALUES ('VC171', '');
INSERT INTO `variables` VALUES ('VC172', '');
INSERT INTO `variables` VALUES ('VC173', '');
INSERT INTO `variables` VALUES ('VC174', '');
INSERT INTO `variables` VALUES ('VC175', '');
INSERT INTO `variables` VALUES ('VC176', '');
INSERT INTO `variables` VALUES ('VC177', '');
INSERT INTO `variables` VALUES ('VC178', '');
INSERT INTO `variables` VALUES ('VC179', '');
INSERT INTO `variables` VALUES ('VC180', '');

-- ----------------------------
-- View structure for plantillasvista
-- ----------------------------
DROP VIEW IF EXISTS `plantillasvista`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `plantillasvista` AS select 
a.IdPlantilla,
CONCAT('<b>',a.IdPlantilla,'</b><br><cite>',a.PlantillaDescripcion,'</cite>') as Plantilla,
a.fecha,
a.hora,
a.IdUser,
a.active,
CONCAT('<a href="edit.php?id=',a.IdPlantilla,'" class="btn btn-primary" style="color:white;"><img src="icons/edit.png" style="width:23px;"></a>') as Btn

 from plantillas a ;

-- ----------------------------
-- View structure for plantillavista
-- ----------------------------
DROP VIEW IF EXISTS `plantillavista`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `plantillavista` AS select `a`.`IdPlantilla` AS `IdPlantilla`,concat('<b>',`a`.`IdPlantilla`,'</b><br><cite>',`a`.`PlantillaDescripcion`,'</cite>') AS `Plantilla`,`a`.`fecha` AS `fecha`,`a`.`hora` AS `hora`,`a`.`IdUser` AS `IdUser`,`a`.`active` AS `active`,concat('<a href="edit.php?id=',`a`.`IdPlantilla`,'" class="btn btn-primary" style="color:white;"><img src="icons/edit.png" style="width:23px;"></a>') AS `Btn` from `plantillas` `a` ;

SET FOREIGN_KEY_CHECKS = 1;
