CREATE TABLE T_user (
	user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_email VARCHAR(150) NOT NULL,
    user_password VARCHAR(150) NOT NULL,
    user_fullname VARCHAR(80),
    user_bio VARCHAR(150),
    user_phone INT,
    user_url_foto VARCHAR(150),
    UNIQUE (user_email)
);


Ususario:       galiano@outlook.com
Contraseña:     01071986

Ususario:       italogal@hotmail.com
Contraseña:     qwerty