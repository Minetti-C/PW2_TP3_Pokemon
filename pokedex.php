<!DOCTYPE html>
<html>
<head>
	<title>Pokedex</title>

	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilopokemon.css">

	<header>
			<div class="titulo">
			<h1> Pokedex </h1>
		</div>

	</header>
</head>
<body>


<div id="contenedor">



<?php

$pokemons = array('Pikachu' => array('tipo' => "electrico", 'ataque' => "Impactrueno" ),
			'Charmander' => array('tipo' => "fuego", 'ataque' => "Llamarada" ),
			'Bulbasaur' => array('tipo' => "planta_veneno", 'ataque' => "Espesura" ),
			'Squirtle' => array('tipo' => "agua", 'ataque' => "Torrente" ),
			'Caterpie' => array('tipo' => "bicho", 'ataque' => "Polvo escudo" ),
			'Weedle' => array('tipo' => "bicho_veneno", 'ataque' => "Polvo escudo" ),
			'Pidgey' => array('tipo' => "normal_volador", 'ataque' => "Vista lince" ),
			'Rattata' => array('tipo' => "normal", 'ataque' => "Fuga, Agallas" ),
			'Ekans' => array('tipo' => "veneno", 'ataque' => "Mudar, Indimidación" ),
			'Sandshrew' => array('tipo' => "tierra", 'ataque' => "Velo arena" ),
			'Nidoran' => array('tipo' => "veneno", 'ataque' => "Punto tóxico" ),
			'Clefairy' => array('tipo' => "hada", 'ataque' => "Gran encanto, Muro mágico" ),
			'Vulpix' => array('tipo' => "fuego", 'ataque' => "Absorbe fuego" ),
			'Jigglypuff' => array('tipo' => "hada", 'ataque' => "Gran encanto, Tenacidad" ),
			'Meowth' => array('tipo' => "normal", 'ataque' => "Recogida, Experto" ));

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
			<td> <?php echo '<img src="img_pokemon/'.$nombre.'.png" height="100px";/>'; ?> </td>
			<td> <?php echo "$nombre"; ?> </td>
			<td> <?php echo ($pokemons[$nombre]["ataque"]); ?> </td>
			<td id="img_tipo"> <?php echo '<img src="img_pokemon/'.$pokemon['tipo'].'.png" height="100px";/>';  ?> </td>
		</tr>
<?php
	}
?>
	</table>
	</div>

	<div id="busqueda">
				<form action="/busquedaPokemon.php" method="get">
					<p>Ingrese el nombre del pokemon que desea buscar:</p>
					<input type="text" name="whoisthatpokemon" placeholder="Ingrese nombre">
					<button type="submit" <a href="/busquedaPokemon.php">Buscar</button>
				</form>
	</div>	
</div>

</body>
</html>