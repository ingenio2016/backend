# backend
Servicio Restfull desarrollado a base de un curso en Udemy

# PRIMEROS PASO DE INSTALACION
1. CREAR NUEVO PROYECTO DE LARAVEL
composer create-project laravel/laravel backend 5.4.*
Con ese comando instalamos la ultima version de laravel 5.4 con sus archivos por defecto

2. AGREGAR HOMESTEAD COMO DEPENDENCIA
Homestead es un sub proyecto de laravel para crear maquinas virtuales totalmente preparadas para ejecutar proyectos de laravel; con todas y cada una de sus dependencias.

    comando-> composer require laravel/homestead

3. Configuracion de Homestead
    comando -> vendor\\bin\\homestead make

4. Configuramos los parametros y las rutas en el archivo Homestead.yaml

5. Crear las llaves del archivo Homestead.yaml

    ejecutar desde git shell -> ssh-keygen -t rsa -b 4096

6. configurar las peticiones del backend.dev
Ir a la ruta C:\Windows\System32\drivers\etc y abrir el archivo hosts
 y agregar en este caso la siguiente linea
 
    192.168.10.10  backend.dev
 
7. USO DE VAGRANT PARA CONTROLAR LA MAQUINA VIRTUAL

    levantar la maquina con vagrant up y para acceder se usa el comando vagrant ssh

8. MANTENER EL PROYECTO DE LARAVEL ACTUALIZADO

    

