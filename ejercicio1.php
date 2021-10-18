<?php
// connect to mysqli
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

//conectar table movie con people
$query = 'ALTER TABLE movie
ADD FOREIGN KEY (movie_leadactor) REFERENCES people(people_id)';

mysqli_query($db,$query) or die(mysqli_error($db));

Echo "Relacion creada correctamente";
?>