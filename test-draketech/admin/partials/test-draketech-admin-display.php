<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://frankdevelopers.co
 * @since      1.0.0
 *
 * @package    Test_Draketech
 * @subpackage Test_Draketech/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
<h2>Descripción del plugin</h2>
<p>1. En el menú Izquierdo, está la sección Productos, Ahí puede</p>
<ul>
	<li>Crear Nuevo Producto</li>
	<li>Listar Productos</li>
	<li>Editar Productos</li>
	<li>Eliminar Productos</li>
</ul>

<p>2. El plugin tiene la opción de implementar diferentes SHORTCODE según la necesidad.<br>
<span style="color:red">NOTA: primero es necesario tener Productos publicados</span></p>

<p><strong>Ejemplos:</strong></p>
<ul>
<li><strong>a.</strong> <code>[list_product]</code>  // con esta opción, se muestran 8 post en el carrusel de todas las categorías del post_type productos.</li>
<li><strong>b.</strong> <code>[list_product showposts="12"]</code> //Muestra hasta 12 post en el carrusel.</li>
<li><strong>c.</strong> <code>[list_product showposts="8" ids="2, 3"]</code> //Muestra 8 post y que petenecen a las categorías con IDs 2 y 3.</li>
<li><strong>d.</strong> <code>[list_product showposts="8" ids="3" operator="NOT IN"]</code> //Muestra 8 post e todas las categorías, excepto de la que tiene ID 3</li>
</ul>
</div>