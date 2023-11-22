<?php


$actorsFilms = [
'Indiana Jones et le temple maudit' => ['Harrison Ford', 'Kate Capshaw', 'Ke Huy Quan'],
'Indiane Jones et les Aventuriers de l\'arche perdue' => ['Harrison Ford', 'Karen Hallen', 'Paul Freeman'],
'Indiana Jones et la dernière croisade' => ['Harrison Ford','Sean Connery', 'Halison Doody'],

];
//var_dump($actorsFilms);

echo "<br>";

foreach($actorsFilms as $movic => $actors){

	echo 'Dans le film ' . $movie .  ' les principaux acteurs sont '. "<br>";


foreach($actors as $actor){
	echo $actor ."<br>";
}


}

?>