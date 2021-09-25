
#Usar BD fasitapp
USE fasitapp;

#Creacion tabla usuario
CREATE TABLE IF NOT EXISTS usuario(
    usuario_id INT AUTO_INCREMENT NOT NULL,
    primer_nombre VARCHAR(15) NOT NULL,
    segundo_nombre VARCHAR(20) NULL,
    primer_apellido VARCHAR(15) NOT NULL,
    segundo_apellido VARCHAR(15) NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    contraseña VARCHAR(20) NOT NULL,
    PRIMARY KEY(usuario_id)
);

#Creacion tabla categoria
CREATE TABLE IF NOT EXISTS categoria(
    categoria_id INT AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(30) NOT NULL,
    usuario_id INT NOT NULL,
    PRIMARY KEY (categoria_id),
    CONSTRAINT fk_categoria_usuario FOREIGN KEY (usuario_id) REFERENCES usuario (usuario_id)
);

#Creacion tabla favorito
CREATE TABLE IF NOT EXISTS favorito(
    favorito_id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(50) NOT NULL,
    url_favorito VARCHAR(2083) NOT NULL,
    descripcion VARCHAR(2000) NOT NULL,
    visibilidad BIT NOT NULL DEFAULT 0 COMMENT '0 -> publico , 1 -> private',
    usuario_id INT NOT NULL,
    PRIMARY KEY (favorito_id),
    CONSTRAINT fk_favorito_usuario FOREIGN KEY (usuario_id) REFERENCES usuario (usuario_id)    
);

#Creacion tabla categoriaxfavorito
CREATE TABLE IF NOT EXISTS categoriaxfavorito(
    favorito_id INT NOT NULL,
    categoria_id INT NOT NULL,
    PRIMARY KEY (favorito_id,categoria_id),
    CONSTRAINT fk_categoriaxfavorito_categoria FOREIGN KEY (categoria_id) REFERENCES categoria(categoria_id),
    CONSTRAINT fk_categoriaxfavorito_favorito FOREIGN KEY (favorito_id) REFERENCES favorito (favorito_id)
);
