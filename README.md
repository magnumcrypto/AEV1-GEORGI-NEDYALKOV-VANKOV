# AEV1-GEORGI-NEDYALKOV-VANKOV
Actividad Evaluable 1 - Desarrollo Web en Entorno Servidor: Georgi Nedyalkov Vankov 2ºDAW


# Iniciar la APP
-Tenemos que movernos a la carpeta public
-Desde allí con el comando (php -S localhost:8080) iniciamos
-Hacemos click y nos lleva a index

## NOTA
-Hemos añadido .htaccess para siempre dirigir las peticiones a index para poder gestionarlo de forma mas segura

## Añadiendo dependencias
-Instalamos las dependencias de composer
$ composer require twig/intl-extra
$ composer require twig/extra-bundle
-Para poder usar algunos filtros-Para poder usar algunos filtros

## Extendemos en cada plantilla
-En cada plantilla también extenderemos el blocke navmenu para que se quede marcado donde estamos en cada momento