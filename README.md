-Se añade el atributo "admin" en la tabla de  usuarios el cual es un bool que indicara si el usuario es administrador o no.


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

- Al mostrar la fecha de registro de los usuarios solo será importante el dia, mes y año y no la hora exacta en que se registró.
- Un administrador puede verse a si mismo y a otros administradores en la seccion de "usuarios", pero no se puede borrar a si mismo en esta seccion.
- Se agregaron imagenes en la carpeta "img"
  1. "Dream Team Logo.png" es el logo de nuestra empresa
  2. "Javier.gif", "Marko.jpg" y "JuanProfile.jpg"  son imagenes de nuestros usuarios en la seccion de "¿Quienes somos?"
  3. "IMG_9704.jpg" y "IMG_9703.jpg" son fotos sacadar por el integrante juan usadas como fondo al momento de iniciar sesion y registrarse.
  

## Como se manejó el modelo

En el modelo se edito la tabla de "usuarios" a la cual se le añadio el atributo "admin" el cual es un booleano que si es True significa que el usuario es administrador, si es False significa que es un usuario comun.


- **Ventaja**: Todos los usuarios y perfiles están guardados en una sola tabla, por lo que es más cómodo obtener datos en la seccion de usuarios, ver perfil o editar usuario y el no tener que crear otra tabla más con los datos de los administradores.

- **Desventaja**: Se debe de tener un atributo más en la tabla y hay que hacer verificaciones sobre este atributo en secciones que son solo para administrador o usuario.

## Modificaciones a la plantilla:

- Al boton de eliminar usuarios para administradores se utilizo boostrap para crear un "modal" para realizar una confirmacion al momento de clickear en el archivo "all.html".
- Lo mismo mencionado anteriormente se utilizo en el boton borrar existente en el archivo "rear.html"
- En el archivo "navbar.html" se agrego el logo de la empresa, se agrego el boton "¿Quienes somos?" y ahora las condiciones de la existencia de botones de este dependen de "valida_sesion.php"


## Dificultades
- Una de las tareas dificiles fue crear algunas consultas como la que se hizo para obtener los datos de la billetera
- En los archivos html de iniciar sesion y registrarse, al intentar obtener los datos en el php este tiraba error, por lo que se debio agregar a las casillas un atributo llamado "name"  y verificar con isset al momento de recibir los datos para que no tirase error en algunas ocaciones.
- El proceso creativo al momento de intentar poner bonita la página.
- Un compañero puso mal la contraseña de la base de datos, por lo que estuvimos mucho tiempo intentando de formatear la contraseña de forma forzosa del PgAdmin4


## Tiempo de desarrollos
- Analisis de Enunciado: 30 minutos
- Modificaciones y ajustes al modelo: 30 minutos
- Diseño de plataforma: 3hrs
- Desarollo de plataforma: 12 hrs
- Pruebas finales: 2 hrs