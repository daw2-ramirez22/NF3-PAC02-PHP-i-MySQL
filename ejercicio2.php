<?php
// connect to mysqli
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

// insert data into the movie table
$query = 'INSERT INTO movie
        (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    VALUES
        (4, "Ultraman", 1, 2017, 1, 2),
        (5, "Black Panther", 1, 2017, 5, 6),
        (6, "Los simpsons", 1, 2019, 4, 3)';
mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the movietype table
$query = 'INSERT INTO movietype 
        (movietype_id, movietype_label)
    VALUES 
        (9,"Sci Fi"),
        (10, "Drama"), 
        (11, "Adventure")';
        
mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the people table
$query  =' INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (7, "Tom Cruise", 1, 0),
        (8, "Cristian", 0, 1),
        (9, "Daniel", 0, 1)';
        
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';

?>
