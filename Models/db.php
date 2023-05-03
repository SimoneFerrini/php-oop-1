<?php
require_once './Models/Movie.php';

$movie1 = new Movie('Donnie Darko', '2001', ['drammatico','thriller'], ['Jake Gyllenhaal', 'Seth Rogen', 'Patrick Swayze']);
$movie2 = new Movie('Star Wars: Episodio III - La vendetta dei Sith', '2005', ['Fantascienza', 'Avventura'], ['Natalie Portman', 'Ewan McGregor', 'Hayden Christensen', 'Ian McDiarmin'] );
$movie3 = new Movie('Van Helsing', '2004', ['Horror','Fantascienza'],['Hugh Jackman', 'Kate Beckinsale', 'Richard Roxburgh', 'Josie Maran']);
$movie4 = new Movie('Spider-Man: No Way Home', '2021', ['Azione', 'Avventura'], ['Tom Holland', 'Tobey Maguire', 'Andrew Garfield', 'Willem Dafoe']);


$movies = [
    $movie1, $movie2, $movie3, $movie4
];

?>