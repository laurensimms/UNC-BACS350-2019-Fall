<?php

    // Code to define functions
    require_once 'views.php';
    require_once 'review_views.php';
    require_once 'review_db.php';
    
    $intro = '<p> Press shift-refresh to see my style sheet at work :)</p>';

    // List review records
    $list = render_reviews(list_reviews ($db));

    
    // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Review</a></p>';


    // Show the page
    $content = "$intro $add_button $list";
    echo render_page('UNC BACS 350', "Project 9 - Design Reviews", $content);
?>
