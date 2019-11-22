<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = "Lauren's Project Planner";
    
    $content = '
    
    <!DOCTYPE html>
        <html>
        <head>
        <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 75%;
                }

            td, th {
              border: 1px solid #000000;
              text-align: left;
              padding: 8px;
                }

            tr:nth-child(even) {
              background-color: #dddddd;
                }
        </style>
        </head>
        <body>
        <p>
            <a href="..">Home</a>
        </p>
         <p> 
            <img src="/bacs350/project/02/lauren.jpg" width ="200px" alt="Lauren"></img>
        </p>
        
        <table style="width:75%%">
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
             <tr>
            <td>15</td>
            <td><a href="/bacs350/project/15">Project 15</a></td>
            <td><a href="https://shrinking-world.com/unc/bacs350/project/15">Project 15 Instructions Link</a></td>
            <td>Fri, Dec 6th</td>
          </tr>
        </table>
        <p>            
        </p>
        
        <h3>My Skills</h3>
        
        <ul>
            <li>
                <a href="/bacs350/skills/index.php">Skills</a>
            </li>
            <li>
                <a href="https://sistersimms.com">My Home Page</a>
            </li>
            <li>
                <a href="https://github.com/laurensimms/UNC-BACS350-2019-Fall">Laurens Github</a>
            </li>

            <li>
                <a href="https://github.com/Mark-Seaman/UNC-BACS350-2019-Fall">Marks Github</a>
            </li>
        </ul>
        
        <h3>Lessons</h3>        
        <ul>
            <li>
                <a href="01">Lesson #1 - PHP App Hosting</a>
            </li>
            <li>
                <a href="02">Lesson #2 - Includes</a>
            </li>
            <li>
                <a href="03">Lesson #3 - Header/Footer</a>
            </li>
            <li>
                <a href="04">Lesson #4 - Page Template</a>
            </li>
            <li>
                <a href="05">Lesson #5 - Render Page</a>
            </li>
        </ul>
    ';

    include '../views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
