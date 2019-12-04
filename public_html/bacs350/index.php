<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = "Lauren's Index Page";
    
    $content = '
            
        <h4><a href="..">Home</a></h4>        
        <h4> <a href="https://github.com/laurensimms/UNC-BACS350-2019-Fall/tree/master/public_html/bacs350">Laurens GitHub Repo</a></h4>       
        <h4><a href="https://shrinking-world.com/unc/bacs350">BACS 350 Home Page</a></h4>       
        <h4><a href="https://www.sistersimms.com/bacs350/skills/index.php">Laurens Skills Page</a></h4> 
        <h4><a href="https://www.sistersimms.com/bacs350/docman/index.php">Laurens Docman Page</a></h4>
        <h4><a href="https://www.sistersimms.com/bacs350/planner/index.php">Laurens Planner Page</a></h4>
        <h4><a href="https://www.sistersimms.com/bacs350/superhero/index.php">Laurens Superhero Page</a></h4>
        <h4><a href="https://www.sistersimms.com/bacs350/subscriber/index.php">Laurens Subscriber Page</a></h4>
        <h4><a href="https://www.sistersimms.com/bacs350/notes/index.php">Laurens Notes Page</a></h4>
        <h4><a href="demo">Code Demos</a></h4>
        <h4><a href="pattern">Design Patterns</a></h4>
                  
       
        <table>
          <tr>
            <th>Project</th>
            <th>Link</th>
            <th>Instructions Link</th>
            <th>Completed Date</th>
          </tr>
          <tr>
            <td>01</td>
            <td><a href="/bacs350/project/01/">Project 1</a></td>
            <td><a href="https://shrinking-world.com/unc/bacs350/project/01">Project 1 Instructions Link</a></td>
            <td>Fri, Aug 30th</td>
          </tr>
          <tr>
            <td>02</td>
            <td><a href="/bacs350/project/02/">Project 2</a></td>
            <td><a href="https://shrinking-world.com/unc/bacs350/project/02">Project 2 Instructions Link</a></td>
            <td>Fri, Sept 6th</td>
          </tr>
          <tr>
            <td>03</td>
            <td><a href="/bacs350/superhero/">Project 3</a></td>
            <td><a href="https://shrinking-world.com/unc/bacs350/project/03">Project 3 Instructions Link</a></td>
            <td>Fri, Sept 13th</td>
          </tr>
          <tr>
            <td>04</td>
            <td><a href="/bacs350/project/04">Project 4</a></td>
            <td><a href="https://shrinking-world.com/unc/bacs350/project/04">Project 4 Instructions Link</a></td>
            <td>Fri, Sept 20th</td>
          </tr>
           <tr>
            <td>05</td>
            <td><a href="/bacs350/docman/index.php">Project 5</a></td>
            <td><a href="https://shrinking-world.com/unc/bacs350/project/05">Project 5 Instructions Link</a></td>
            <td>Fri, Sept 27th</td>
          </tr>
           <tr>
            <td>06</td>
            <td><a href="/bacs350/subscriber/index.php">Project 6</a></td>
            <td><a href="https://shrinking-world.com/unc/bacs350/project/06">Project 6 Instructions Link</a></td>
            <td>Fri, Oct 04th</td>
          </tr>
           <tr>
            <td>07</td>
            <td><a href="/bacs350/superhero/index.php">Project 7</a></td>
            <td><a href="https://shrinking-world.com/unc/bacs350/project/07">Project 7 Instructions Link</a></td>
            <td>Fri, Oct 11th</td>
          </tr>
          <tr>
            <td>08</td>
            <td><a href="/bacs350/notes/index.php">Project 8</a></td>
            <td><a href="https://shrinking-world.com/unc/bacs350/project/08">Project 8 Instructions Link</a></td>
            <td>Fri, Oct 18th</td>
          </tr>
          <tr>
            <td>09</td>
            <td><a href="/bacs350/review/index.php">Project 9</a></td>
            <td><a href="https://shrinking-world.com/unc/bacs350/project/09">Project 9 Instructions Link</a></td>
            <td>Fri, Oct 25th</td>
          </tr>
          <tr>
            <td>10</td>
            <td><a href="/bacs350/review/index.php">Project 10</a></td>
            <td><a href="https://shrinking-world.com/unc/bacs350/project/10">Project 10 Instructions Link</a></td>
            <td>Fri, Nov 01st</td>
          </tr>
           <tr>
            <td>11</td>
            <td><a href="/bacs350/slides/index.php">Project 11</a></td>
            <td><a href="https://shrinking-world.com/unc/bacs350/project/11">Project 11 Instructions Link</a></td>
            <td>Fri, Nov 8th</td>
          </tr>
            <tr>
            <td>12</td>
            <td><a href="/bacs350/index.php">Project 12</a></td>
            <td><a href="https://shrinking-world.com/unc/bacs350/project/12">Project 12 Instructions Link</a></td>
            <td>Fri, Nov 15th</td>
          </tr>
            <tr>
            <td>13</td>
            <td><a href="/bacs350/index.php">Project 13</a></td>
            <td><a href="https://shrinking-world.com/unc/bacs350/project/13">Project 13 Instructions Link</a></td>
            <td>Wed, Nov 20th</td>
          </tr>
          <tr>
            <td>14</td>
            <td><a href="/bacs350/project/14">Project 14</a></td>
            <td><a href="https://shrinking-world.com/unc/bacs350/project/14">Project 14 Instructions Link</a></td>
            <td>Fri, Nov 29th</td>
          </tr>
        </table>
        
    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
