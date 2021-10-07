<?php 

function setActive($routeName){

	return request()->routeIs($routeName) ? 'active' : '';

	//Esto es un oprador ternario, que evalúa lo que tiene a la izquierda, si aplica ejecuta lo que tiene en '--' y simo aplica lo que está después de los :
} 