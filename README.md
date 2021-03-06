# Grupo 3 Dream Team Science Innotavors
![](img/Dream%20Team%20Logo.png)

## Integrantes:

<center>

| Nombre | Rol |
| ------ | --- |
|**Marco Espinoza**  |**201973074-6** |
|**Juan Mira**       |**201973055-k** |
|**Javier Peralta**  |**201973019-3** |

</center>

## Supuestos y consideraciones:

- Al mostrar la fecha de registro de los usuarios solo será importante el día, mes y año, y no la hora exacta en que se registró.
- Un administrador puede verse a si mismo y a otros administradores en la sección de "usuarios", pero no se puede borrar a si mismo en esta sección.
- Se agregaron imágenes en la carpeta "img"
  1. "Dream Team Logo.png" es el logo de nuestra empresa
  2. "Javier.gif", "Marko.jpg" y "JuanProfile.jpg"  son imágenes de nuestros usuarios en la sección de "¿Quiénes somos?"
- Se crearon los siguientes archivos:
  1. "who.html" es la página html de "¿Quiénes somos?" donde se encuentra la información de los creadores de la página.
  2. "sesion_iniciada.php" en la carpeta "user" es un archivo php que verifica si el usuario se encuentra con una sesión activa para dejarlo estar, en caso contrario será devuelto al index.
  3. "sesion_iniciada.php" en la carpeta "sesion" es un archivo php que verifica si el usuario se encuentra en una sesión activa para redireccionarlo hacia index, esto para evitar que alguien inicie sesión o se registre con una sesión activa.
  4. "validar_acceso.php" en la carpeta "CRUD" es un archivo php que verifica si existe una sesión iniciada y si dicha sesión tiene permisos de administador, en caso de que no los tenga será instantáneamente redireccionado hacia index, por lo que solo un administrador puede acceder a las páginas del CRUD.
  5. "secreto.js" es un archivo javascript para una funcionalidad extra que no tiene que ver con la tarea
  

## Como se manejó el modelo

En el modelo se edito la tabla de "usuarios" a la cual se le añadió el atributo "admin" el cual es un booleano que si es True significa que el usuario es administrador, si es False significa que es un usuario comun.

Se dejo un usuario administrador para usar el cual es "
user@user.user" y su contraseña es "password"


- **Ventaja**: Todos los usuarios y perfiles están guardados en una sola tabla, por lo que es más cómodo obtener datos en la sección de usuarios, ver perfil o editar usuario y el no tener que crear otra tabla más con los datos de los administradores.

- **Desventaja**: Se debe de tener un atributo más en la tabla y hay que hacer verificaciones sobre este atributo en secciones que son solo para administrador o usuario.

## Modificaciones a la plantilla:

- Al boton de eliminar usuarios para administradores se utilizo bootstrap para crear un "modal" para realizar una confirmacion al momento de clickear en el archivo "all.html".
- Lo mismo mencionado anteriormente se utilizo en el botón borrar existente en el archivo "read.html"
- En el archivo "navbar.html" se agrego el logo de la empresa, se agrego el botón "¿Quiénes somos?" y ahora las condiciones de la existencia de botones de este dependen de "valida_sesion.php"


## Dificultades
- Una de las tareas difíciles fue crear algunas consultas como la que se hizo para obtener los datos de la billetera.
- En los archivos html de iniciar sesión y registrarse, al intentar obtener los datos en el php este tiraba error, por lo que se debio agregar a las casillas un atributo llamado "name"  y verificar con isset al momento de recibir los datos para que no tirase error en algunas ocaciones.
- El proceso creativo al momento de intentar poner bonita la página.
- Un compañero puso mal la contraseña de la base de datos, por lo que estuvimos mucho tiempo intentando de resetar la contraseña de forma forzosa del PgAdmin4 


## Tiempo de desarrollos
- Análisis de Enunciado: 30 minutos
- Modificaciones y ajustes al modelo: 40 minutos
- Diseño de plataforma: 3hrs
- Desarollo de plataforma: 12 hrs
- Pruebas finales: 2 hrs