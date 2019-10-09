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
