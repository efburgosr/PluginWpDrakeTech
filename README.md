# Descripción

## 1. test-drakeTech (es el Plugin)

*** a. En el menú izquierdo, está la sección Productos, Ahí se puede:***

- Crear Nuevo Producto
- Listar Productos
- Editar Productos
- Eliminar Productos

. El plugin tiene la opción de implementar diferentes SHORTCODE según la necesidad.
NOTA: primero es necesario tener Productos publicados

######Ejemplos:

*a. [list_product] // con esta opción, se muestran 8 post en el carrusel de todas las categorías del post_type productos.
*b. [list_product showposts="12"] //Muestra hasta 12 post en el carrusel.
*c. [list_product showposts="8" ids="2, 3"] //Muestra 8 post y que petenecen a las categorías con IDs 2 y 3.
*d. [list_product showposts="8" ids="3" operator="NOT IN"] //Muestra 8 post e todas las categorías, excepto de la que tiene ID 3

######== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `test-draketech.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

## 2. ChildThemeDrakeTest (El tema de la landing)
