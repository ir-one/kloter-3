<DOCTYPE html!>
<html>
    <head>
        <title>Tambah Content</title>
    </head>
    <body>
        <h1>Tambah Content</h1>
        <form action="tambah_content.php" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>video Link</td>
                <td><input type="text" name="video_link"></td>
            </tr>
            <tr>
                <td>Type</td>
                <td><input type="text" name="type"></td>
            </tr>
            <tr>
                <td>id_course</td>
                <td>
                    <select name="id_course" id="course">
                        <?php 
                            include("config.php");
                            $sql = mysqli_query($mysqli,"SELECT * FROM course ORDER BY id DESC");
                            while($result = mysqli_fetch_array($sql)){
                        ?>
                        <option value="<?php echo $result['id']?>"><?php echo $result['id']." "?><?php echo $result['name']?></option><?php } ?>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add Content"></td>
            </tr>
        </table>    
        </form>
        <?php

            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $video = $_POST['video_link'];
                $type = $_POST['type'];
                $id_course = $_POST['id_course'];
                
                //
                include("config.php");

                $result = mysqli_query($mysqli, "INSERT INTO content(name,video_link,type,id_course) VALUES ('$name','$video','$type','$id_course')");

                //
                echo "Berhasil Menambah Content. <a href='index.php'>Lihat Course</a>";
            }
        
        ?>

    </body>
</html>