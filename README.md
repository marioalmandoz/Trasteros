# Trasteros
Sistema web construido con HTML, CSS, JavaScript y PHP para la asignatura Sistemas de Gestión de Seguridad de Sistemas de Información
La web consistirá en una página de una empresa de alquiler de trasteros.

Obtención
Nuestra página web está situada en un directorio público en GitHub, donde hemos trabajado durante nuestro tiempo de trabajo. Para obtenerla utilizaremos git, programa que deberá estar instalado en nuestro sistema, mediante el siguiente comando clonamos el repositorio en nuestros archivos.
~~~
$git clone git@github.com:marioalmandoz/Trasteros.git
~~~
Despliegue
	El despliegue de la página web lo haremos mediante Docker, por lo tanto tendremos que tener instalado docker-compose, en el caso de que no esté instalado lo podremos instalar mediante el siguiente comando: 
~~~
	$sudo git install docker-compose
~~~
A continuación nos tendremos que situar en la terminal dentro del archivo anteriormente clonado, y una vez dentro crearemos la imagen de la web con el siguente comando:
	$docker build -t=”web” .
Una vez tenemos la imagen, cada vez que queramos desplegar la imagen nos situaremos en la terminal dentro del archivo y ejecutaremos el siguiente comando:
	$docker-compose up
Con este comando lo que hace es lanzar la imagen de la pagina web al puerto 81 y en el puerto 8890 tendremos la aplicación de phpMyAdmin  a la que podemos acceder mediante los siguientes datos: 
usuario: admin.
contraseña: test.
Una vez iniciada la sesión debemos importar el archivo database.sql para obtener los datos de la página web. 

Tras realizar estos pasos solo nos quedará buscar en el buscador “localhost:81” y ya estaremos en la página de inicio.

Para finalizar el despliegue, lo haremos desde el mismo lugar en la terminal mediante el siguiente comando:
	$docker-compose down
