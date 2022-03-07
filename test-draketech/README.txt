=== Plugin Test DrakeTech ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: http://frankdevelopers.co
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Here is a short description of the plugin.  This should be no more than 150 characters.  No markup here.

== Description ==

Este es un plugin que permite listar crear productos y listarlos en un carrusel vía Shortcode.
El plugin está implmenta la librería bootstrap para el la maquetación del carrusel

Ejemplos:

a. [list_product] // con esta opción, se muestran 8 post en el carrusel de todas las categorías del post_type productos.
b. [list_product showposts="12"] //Muestra hasta 12 post en el carrusel.
c. [list_product showposts="8" ids="2, 3"] //Muestra 8 post y que petenecen a las categorías con IDs 2 y 3.
d. [list_product showposts="8" ids="3" operator="NOT IN"] //Muestra 8 post e todas las categorías, excepto de la que tiene ID 3

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `test-draketech.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

== Frequently Asked Questions ==

= A question that someone might have =

An answer to that question.

= What about foo bar? =

Answer to foo bar dilemma.

== Screenshots ==



== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.



== Arbitrary section ==


== A brief Markdown Example ==

Ejemplos:

a. [list_product] // con esta opción, se muestran 8 post en el carrusel de todas las categorías del post_type productos.
b. [list_product showposts="12"] //Muestra hasta 12 post en el carrusel.
c. [list_product showposts="8" ids="2, 3"] //Muestra 8 post y que petenecen a las categorías con IDs 2 y 3.
d. [list_product showposts="8" ids="3" operator="NOT IN"] //Muestra 8 post e todas las categorías, excepto de la que tiene ID 3