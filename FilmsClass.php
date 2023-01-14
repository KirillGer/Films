<?php
class Films {
	public array $films = [
		array $First_film = [
			'film_name' => 'Avengers: Endgame',
			'producer' => 'Anthony Russo',
			'genre' => 'Fantastic'
		],
		array $Second_film = [
			'film_name' => 'Spider-Man: No Way Home',
			'producer' => 'Jon Watts',
			'genre' => 'Fantastic',
		], 
		array $Third_film = [
			'film_name' => 'The Silver Skates',
			'producer' => 'Michael Lockshin',
			'genre' => 'Historical drama'
		]
	];
	array $Favourites = [];
	array_push($Favourites, $Second_film);
	var_dump($Favourites);
}