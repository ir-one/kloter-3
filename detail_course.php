<?php

    include("config.php");
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM  course WHERE id=$id ");

?>

<html>
    <head>
        <title>Detail Course</title>
    </head>
    <body>
    <h1>Detail Course</h1>
        <table width="80%" border=1>
            <!-- <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr> -->
        
            <?php
                while($course_data = mysqli_fetch_array($result)){
                    echo"<tr>";
                    echo"<td rowspan='2' calspan='2'width='40%' height='200px'>".$course_data['thumbnail']."</td>";
                    echo"<td>".$course_data['name']."</td>";
                    echo"</tr>";
                    echo"<tr>";
                    echo"<td>".$course_data['duration']."</td>";
                    echo"</tr>";
                    echo"<tr>";
                    echo"<td>".$course_data['description']."</td>";
                    echo"</tr>";
                    //echo"<tr>";
                    //echo"<td><a href='detail_berita.php? id=$user_data[id]'>Lihat Berita</a> | <a href='tambah_berita.php? id=$user_data[id]'>Tambah berita</a></td>";
                   // echo"</tr>";
                }
            ?>
        </table> <br><br>

        <a href="index.php">Kembali</a> 

    </body>
</html>