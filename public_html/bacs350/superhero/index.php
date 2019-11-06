<?php

    // Code to define functions
    require_once 'views.php';
    require_once 'superhero_views.php';
    require_once 'superhero_db.php';


    // List superhero records
    $list = render_superheroes(list_superheroes ($db));

    
    // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Subscriber</a></p>';

    
    $intro = '
    <h3>
            <a href="https://sistersimms.com/bacs350/index.php">Laurens Home Page</a>
    </h3> 
    <h3>
            <a href="https://github.com/laurensimms/UNC-BACS350-2019-Fall/tree/master/public_html/bacs350">Laurens GitHub Repo</a>
    </h3> ';

    $content = "$intro $add_button $list";

    // Show the page
    echo render_page('UNC BACS 350', "Lauren's List of Superhero Subscribers", $content);
?>
