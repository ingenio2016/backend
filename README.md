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
    comando -> composer update
    
# Package Control
1. Instalando el package control

9. TRABAJANDO CON SUBLIME TEXT

Instalar el plugin para las definiciones de los archivos. Este plugin nos permitira navegar a traves de los archivos como en php storm
Nombre del plugin - SublimeCodeIntel

ctrl + shift + p para abrir el package control y buscamos SublimeCodeIntel

10. Generar una nueva llave para la aplicacion (Importante)
	abrimos la consola de comandos en la carpeta del proyecto y ejecutamos el siguiente comando:
	comando-> php artisan key:generate

11. Configurando archivo de rutas

	Para este caso en especifico y tratandose de un servicio restfull, lo que se quiere hacer es servir cada una de las rutas de forma directa y sin PREFIJOS, es decir que las rutas inicien a partir de la ruta principal del backend que en este caso seria http://backend.dev/Ruta y no a traves del prefijo por defecto para la api que seria http://backend.dev/api/Ruta.

	Para eliminar dicho prefijo vamos al archivo RouteServiceProvider ubicado en la carpeta providers del proyecto, ubicamos la configuracion de la ruta para api llamada mapApiRoutes() y eliminamos el Prefix

12. Iniciando con el PROYECTO
    
    En primer Lugar crearemos segun el proyecto los Modelos de Buyer(Comprador) y Seller(Vendedor), como se puede apreciar estos no tienen datos porque estos heredan datos de la tabla User o el modelo User por lo cual se crean los modelos de la siguiente manera

    comando-> php artisan make:model Buyer
    comando-> php artisan make:model Seller

    Nota: no se agrega -m para migración ni -c para controller porque estos extienden de User y los controladores seran creados por aparte

    Luego de ello creamos los modelos faltantes y estos si llevaran sus respectivas migraciones. Los modelos seran creados en su orden de importancia. Viendo el diseño del proyecto el principal es productos ya que de el se desprenden los demas modelos que necesitan que este creado productos antes de ser creados ellos mismos

    Nota: estos modelos si incluiran sus respectivas migraciones de la siguiente forma:

    comando-> php artisan make:model Product -m
    comando-> php artisan make:model Transaction -m
    comando-> php artisan make:model Category -m

13. Estructuras iniciales basicas de los Controladores

    Recursos = Modelos de nuestro proyectos. En api Restfull los models son conocidos como Recursos

    Creamos los controladores que seran utilizados con los recursos principales. Como cada uno de estos controladores hacen alusion a los recursos que se trabajaran.

    Para crear los controler de tipo recurso ejecutamos los siguientes comandos teniendo en cuenta que cada controlador sera almacenado en una carpeta diferente.

    comando-> php artisan make:controller User/UserController -r
    comando-> php artisan make:controller Seller/SellerController -r
	comando-> php artisan make:controller Buyer/BuyerController -r
    comando-> php artisan make:controller Product/ProductController -r
    comando-> php artisan make:controller Transaction/TransactionController -r
    comando-> php artisan make:controller Category/CategoryController -r 

14. Creación de las primeras Rutas principales del proyectos

    Vamos a crear las seis rutas de los seis recursos de la aplicacion. Por defecto una ruta de recursos me genera todas las posibles rutas correcpondientes a todos los metodos creados en cada controlador tambien de recursos. Pero como en este caso esto es un apiRestfull solo vamos a necesitar las rutas de index para listar varios y show para traer un registro.

    Para Crear las rutas de recursos procedemos con la siguiente logica en el archivo de rutas api.php

    Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index', 'show']]);
    Route::resource('categories', 'Category\CategoryController', ['except' => ['create', 'edit']]);
    Route::resource('products', 'Product\ProductController', ['only' => ['index', 'show']]);
    Route::resource('transactions', 'Transaction\TransactionController', ['only' => ['index', 'show']]);
    Route::resource('sellers', 'Seller\SellerController', ['only' => ['index', 'show']]);
    Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);

    La palabra only significa que solo se crearan las rutas nombradas, en este caso seran show e index
    La palabra except significa que seran creadas todas las rutas de recurso excepto las nombradas, en este caso create y edit.