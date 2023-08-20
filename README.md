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

Funcionalidades:

- No permite que se registren con campos vacíos en el correo electrónico y en la contraseña desde el frontend y desde el backend, lo mismo sucede para las consultas en el inicio de sesión.
- No permite registrar con correos electrónicos ya existentes.
- Verificación de credenciales y envío de mensaje de error de ser el caso. Ya sea que no exista o no coincida.
- Se muestra el respectivo mensaje de error en idioma inglés y en rojo en los respectivos formularios. 
- Encriptación de la contraseña antes de insertarla en la base de datos.
- El acceso a "profile" y "edit" está restringido sólo para quienes han iniciado sesión y redirecciona al login, mostrando el mensaje de error en rojo, de que no ha iniciado sesión.
- Muestra una imagen random temporal, hasta que se suba una foto al servidor.
- Evita que se suban otros archivos que no sean imágenes.
- Evita que se suban archivos de imágenes mayores a 10MB.
- Muestra al lado de la foto, el motivo por el cual no se insertó en el servidor el archivo para la fotografía al lado de la fotografía.
- Al editar impide que se haga la consulta de actualización si dejaron los campos vacíos.
- Al editar se puede cambiar el email, siempre y cuando no coincida con otro email ya registrado previamente.

- Barra de navegación con movimiento y amigable.

