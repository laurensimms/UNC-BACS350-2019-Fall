<?php

    // Get the parameter off the URL
    // URL = http://localhost/bacs350/planner/doc.php?doc=ToDo.md
    // Eg. Doc = ToDo.md

    $doc = $_GET['doc'];
    $page = $_SERVER['REQUEST_URI'];
    $doc_label = "<p>" . $doc . "</p>";


    // Use the views code
    require_once 'views.php';


    // Link to Home
    $home = '<a href=".">Other Documents</a>';

    //link to docs 
    $docs = '<a href="http://www.sistersimms.com/bacs350/docman/doc.php?doc=docs/ClassPrep.md">Class Prep Document</a>';
    
    // Read Markdown Text from file
    $text = render_markdown($doc);
    $content = render_card($doc, $text, $docs);
  
    


    // Display the HTML in the page
    echo render_page('Laurens Notes', "Document Manager", $home . $content, $docs);

?>
