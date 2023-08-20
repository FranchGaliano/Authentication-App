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

INSERT INTO t_user (user_email,user_password, user_fullname, user_bio, user_phone) VALUES ("galiano@outlook.com", "123", "Francesco Galiano", "System engineer, master of ceremonies, manager, photographer, teacher & coach.", "979 359 258");

SELECT * FROM t_user WHERE user_email = '$email'