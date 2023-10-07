# AEV1-GEORGI-NEDYALKOV-VANKOV
Actividad Evaluable 1 - Desarrollo Web en Entorno Servidor: Georgi Nedyalkov Vankov 2ºDAW

## REQUISITOS PREVIOS
- Instalar con el comando composer install todas las dependencias necesarias ya marcadas
en el archivo composer.json, en el caso de que no este la carpeta vendor ni composer.lock
- Poner en marcha servidor XAMPP
- Estar listo para disfrutar de la experiencia


## Iniciar la APP
- Tenemos que movernos a la carpeta public, posicionados desde la carpeta raiz del proyecto
con el comando (cd public)
- Desde public con el comando (php -S localhost:8080) iniciamos. Puede ser cualquier puerto no necesariamente 8080
- Hacemos click y nos lleva a index, o bien en nuestro navegador ponemos localhost:8080 (si ese es el puerto)

### NOTA
-Hemos añadido .htaccess para siempre dirigir las peticiones a index para poder gestionarlo de forma mas segura

## Añadiendo dependencias
- Instalamos las dependencias de composer
$ composer require twig/intl-extra
$ composer require twig/extra-bundle
- Para poder usar algunos filtros

## Extendemos en cada plantilla
- En cada plantilla también extenderemos el bloque navmenu para que se quede marcado donde estamos en cada momento

## Navegar por la App
- Siempre tienes a mano el menú de navegación pinchando en los enlaces puedes acceder a cualquier apartado de la app
- Siempre tienes el boton HOME para poder volver al menu de inicio
- Siempre que crecargues la página principal aparecera una imagen distinta (a veces se repiten ya que es aleatorio)

### Contacto
- geneva@floridauniversitaria.es
- jorge_vankov@hotmail.com

### Repositorio público de github
- https://github.com/magnumcrypto/AEV1-GEORGI-NEDYALKOV-VANKOV