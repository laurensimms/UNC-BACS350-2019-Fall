
<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = "Subscriber List";      
    
    $content = '

<h1>Subscribers Database - Step 2</h1>

<p>This page demonstrates a connection to an actual database at Bluehost.</p>
<p>The last output for this page should be a success confirmation. </p>




<h2>Step 1 - Simple page</h2>

<p>
    <b></b> Start by building and debugging a page that looks like this one.
    Get this working first!
</p>
<p>
    <a href="step1.php">Subscribers Page</a>
</p>

<h2>Step 2 - Normal page</h2>

<p>
    The simple solution will duplicate a lot of code
    on a real website so it is not suitable for production websites. Build functions
    for all of the key operations that should be done.
</p>
<p>
    <a href="step2.php">Subscribers Page</a>
</p>

 ';
 // Connect to Bluehost database 
    function subscriber_database($dbname, $username, $password) {
        try {
            $port = '3306';
            $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
            return new PDO($db_connect, $username, $password);
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }

    // Add a new record
    function add_subscriber($db, $name, $email) {
        try {
            $query = "INSERT INTO subscribers (name, email) VALUES (:name, :email);";
            $statement = $db->prepare($query);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':email', $email);
            $statement->execute();
            $statement->closeCursor();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }


    // Delete Database Record
    function delete_subscriber($db, $email) {
        try {
            $query = "DELETE from subscribers WHERE email = :email";
            $statement = $db->prepare($query);
            $statement->bindValue(':email', $email);
            $statement->execute();
            $statement->closeCursor();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }


    // Lookup Record using ID
    function get_subscriber($db, $id) {
        try {
            $query = "SELECT * FROM subscribers WHERE id = :id";
            $statement = $db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $record = $statement->fetch();
            $statement->closeCursor();
            return $record;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
       
    }
       

    // Query for all subscribers
    function list_subscribers ($db) {
       try {
            $query = "SELECT * FROM subscribers";
            $statement = $db->prepare($query);
            $statement->execute();
            return $statement->fetchAll();
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
        
    }


    // Create a database connection
    $dbname = 'sistest1_subscribers';
    $username = 'sistest1_lauren';
    $password = '12345';
    $db = subscriber_database($dbname, $username, $password);

    // Connect to the subscribers database at Bluehost
    require 'subscriber.php';


    // Get a list of subscribers records
    $subscribers = query_subscribers($db);


    // Build a list of subscribers in HTML
    $list = render_subscriber_list($subscribers);

    

   
    include '../views.php';
    
    echo render_page($site_title, $page_title, $content);
    echo $list;
 
$content = '<p><b>Success !!</b></p>';

?>