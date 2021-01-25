<?php
/*
 Pintar_cabecera: Esta funci�n pintar� la cabecera de una tabla donde se muestran los contactos
*/
function pintar_cabecera()
    {
    ?>
    <table class="table table-striped table-hover">
    <thead>
        <tr>
        <th>DNI</th>
        <th>Nombre</th>
		<th>Edad</th>
        <th>Puesto</th>
		<th>Antiguedad</th>
        <th>Salario</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    }
 
/* funci�n que pinta el fin dela tabla para la agenda, no recibe par�metros*/
function pintar_fin_tabla()
    {
    ?>
    </tbody>
    </table>
    <?php
    }
     
     
/*
Funci�n mostrar libro, es una funci�n que muestra un libro en la tabla.
Ser� utilizada para mostrar la biblioteca libro a libro
*/
function mostrar_emp($emp)
    {
	echo "<tr>";	
	echo "<td>";
	echo $emp->getdni();
	echo "</td>";
	echo "<td>";
	echo $emp->getNombre();
	echo "</td>";	
	echo "<td>";
	echo $emp->getEdad();;
	echo "</td>";
	echo "<td>";
	echo $emp->getPuesto();
	echo "</td>";
	echo "<td>";
	echo $emp->getAntiguedad();
	echo "</td>";
    echo "</tr>"; 
    echo $emp->getSalario();
	echo "</td>";
    echo "</tr>"; 
    }
 
/*Funci�n que muestra toda la tabla, recibe un vector tipo biblioteca y llama a mostrar libros por cada elemento*/
function mostrar ($datos)
    {
    pintar_cabecera();
    foreach ($datos as $dato)
        {
        mostrar_emp($dato);
        }
    pintar_fin_tabla();
    }