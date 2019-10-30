<?php
    
    // Bring in rendering functions
    require_once 'views.php';


    // Display the page content
    $demo = '<p>' . render_button('Other Demos', '..') . '</p>';

    $happy = '<img src="guy.jpg" alt="guy" width="150" height="100">';
    $happy_text = '<p>Me vs every other girl</p>';
    $sad = '<img src="dog.jpg" alt="dog" width="150" height="100">';
    $sad_text = '<p>This is my whole life</p>';
    $tea = '<img src="tea.jpg" alt="tea" width="150" height="100">';
    $tea_text = '<p>And thats the TEA sis</p>';

    $card1 = render_card("IYKYK", "$happy_text $happy");
    $card2 = render_card("Everything is fine", "$sad_text $sad");
    $card3 = render_card("Tea Meme", "$tea_text $tea");

    $content = "$demo $card1 $card2 $card3";


    // Create main part of page content
    $settings = array(
        "site_title" => "UNC BACS 350",
        "page_title" => "Demo 26 - Page Templates", 
        "logo"       => "lauren.jpg",
        "style"      => 'style.css',
        "content"    => $content);

    echo render_page($settings);

?>
