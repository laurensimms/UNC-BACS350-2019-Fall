
<?php

    /*
        Superhero Project Workshop
    */

    // Get the render_page and render_card functions
    include 'views.php';

    // Code to define functions
    require_once 'views.php';
    require_once 'superhero_views.php';
    require_once 'superhero_db.php';

    // List superhero records
    $list = render_superheroes(list_superheroes ($db));


    // Set custom settings
    $site_title = 'UNC BACS 350';
    $page_title = 'Superhero Gallery';

    $card1 = render_card("Batman", "He can fly!");
    $card2 = render_card("Superman", "He is Fast! ");
    $card3 = render_card("Hulk", "He can smash stuff!");

    $content =  '
        <div class="container-fluid">
            <div class="row">
                ' . $card1 . $card2 . $card2. '
            </div>
        </div>
    ';

    $content = "$intro $add_button $list";

 // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Subscriber</a></p>';


    // Create HTML and output the page
    echo render_page($site_title, $page_title, $content);
    // Show the page
    echo render_page('UNC BACS 350', "Seaman's List Subscribers", $content);

 $intro = '
        <p>
            This email list gives you access to big ideas and deep thoughts.
        </p>
        <p>
            Visit the <a href="https://seamanslog.com">Seaman\'s Log</a> site now to start reading.
        </p>
    ';
?>


    
