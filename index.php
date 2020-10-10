<?php

    include("config.php");

    $result = mysqli_query($mysqli, "SELECT * FROM course ORDER BY id DESC");
?>

<DOCTYPE html!>
<html>
    <head>
        <title>Tampilan Awal</title>
        <style>
            td{
                color:white;
            }
        
        
        
        </style>
    </head>
    <body style="background-color:grey">
        <h1 style="color:white">Dumb-Course</h1>
        <button type="submit"><a href="tambah_course.php">Add Course</a></button>
        <button type="submit"><a href="tambah_author.php">Add Author</a></button>
        <button type="submit"><a href="tambah_content.php">Add Content</a></button>
        <table border="1">
            <tr >
                <th>Name</th>
                <th>thum</th>
                <th>id_author</th>
                <th>durasi</th>
                <th>deskripsi</th>
                <th>aksi</th>
            </tr>
            <?php
                while($course_data = mysqli_fetch_array($result)){
                    echo"<tr>";
                    echo"<td>".$course_data['name']."</td>";
                    echo"<td>".$course_data['thumbnail']."</td>";
                    echo"<td>".$course_data['id_author']."</td>";
                    echo"<td>".$course_data['duration']."</td>";
                    echo"<td>".$course_data['description']."</td>";
                    echo"<td><a href='detail_course.php? id=$course_data[id]'>detail</a>"."</td>";
                    echo"</tr>";
                }
            
            ?>

        
        </table>
    </body>
</html>