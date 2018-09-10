<!DOCTYPE html>
<html>
<head>
	<title>Busqueda</title>

	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilopokemon.css">
</head>
<body>
<div id="contenedor">
<?php

$pokemons = array('pikachu' => array('tipo' => "electrico", 'ataque' => "Impactrueno" ),
			'charmander' => array('tipo' => "fuego", 'ataque' => "Llamarada" ),
			'bulbasaur' => array('tipo' => "planta_veneno", 'ataque' => "Espesura" ),
			'squirtle' => array('tipo' => "agua", 'ataque' => "Torrente" ),
			'caterpie' => array('tipo' => "bicho", 'ataque' => "Polvo escudo" ),
			'weedle' => array('tipo' => "bicho_veneno", 'ataque' => "Polvo escudo" ),
			'pidgey' => array('tipo' => "normal_volador", 'ataque' => "Vista lince" ),
			'rattata' => array('tipo' => "normal", 'ataque' => "Fuga, Agallas" ),
			'ekans' => array('tipo' => "veneno", 'ataque' => "Mudar, Indimidación" ),
			'sandshrew' => array('tipo' => "tierra", 'ataque' => "Velo arena" ),
			'nidoran' => array('tipo' => "veneno", 'ataque' => "Punto tóxico" ),
			'clefairy' => array('tipo' => "hada", 'ataque' => "Gran encanto, Muro mágico" ),
			'vulpix' => array('tipo' => "fuego", 'ataque' => "Absorbe fuego" ),
			'jigglypuff' => array('tipo' => "hada", 'ataque' => "Gran encanto, Tenacidad" ),
			'meowth' => array('tipo' => "normal", 'ataque' => "Recogida, Experto" ));

?>

<?php 
if (isset ($_GET["whoisthatpokemon"])) {
	$aux = $_GET["whoisthatpokemon"];
	$error=false;
	foreach ($pokemons as $nombre => $pokemon) 
	{
		if($aux == $nombre)
		{
?>
<div id="divtabla">
<h3>El pokemon buscado fue: <?php echo "$aux" ?> </h3>
	<table>
		<th>Imagen</th>
		<th>Nombre</th>
		<th>Ataque</th>
		<th>Tipo</th>
		<tr>
			<td> <?php echo '<img src="img_pokemon/'.$aux.'.png" width="100px";/>'; ?> </td>
			<td> <?php echo "$aux"; ?> </td>
			<td> <?php echo $pokemons[$aux]["ataque"]; ?> </td>
			<td> <?php echo '<img src="img_pokemon/'.$pokemons[$aux]['tipo'].'.png" height="100px"'; ?> </td>
		</tr>
	</table>
</div>
	
<?php 
$error = true;	
}	
}
 if($error===false) {
?> 		
		<h2 id="mensaje1">UPS!</h2>
		<h3 id="mensaje2"> No se encontró un Pokemon con ese nombre </h3>
		<img id="triste" src="/img_pokemon/pikachu_triste.png">
<?php
}
} 
// ELSE - NO EXISTE VARIABLE
else{ 
	?>
	<div id="divtabla">
	<table>
		<th>Imagen</th>
		<th>Nombre</th>
		<th>Ataque</th>
		<th>Tipo</th>

<?php
		foreach ($pokemons as $nombre => $pokemon) {
?>
	
		<tr>
			<td> <?php echo '<img src="img_pokemon/'.$nombre.'.png" width="100px";/>'; ?> </td>
			<td> <?php echo "$nombre"; ?> </td>
			<td> <?php echo ($pokemons[$nombre]["ataque"]); ?> </td>
			<td> <?php echo '<img src="img_pokemon/'.$pokemons[$nombre]['tipo'].'.png" height="100px"'; ?> </td>
		</tr>
	
<?php
	}
}
?>
</table>
	</div>


<div>
	<form action="pokedex.php">
    <button id="volver" type="submit" <a href="/pokedex.php">Go to Pokedex</button>
	</form>
</div>
</div>
</body>
</html>