<DOCTYPE html!>
<html>
    <head>
        <title>Tambah Course</title>
    </head>
    <body>
        <h1>Tambah Course</h1>
        <form action="tambah_course.php" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Thumbnail</td>
                <td><input type="text" name="tumbnail"></td>
            </tr>
            <tr>
                <td>id_author</td>
                <td>
                    <select name="id_author" id="author">
                        <?php 
                            include("config.php");
                            $sql = mysqli_query($mysqli,"SELECT * FROM author ORDER BY id DESC");
                            while($result = mysqli_fetch_array($sql)){
                        ?>
                        <option value="<?php echo $result['id']?>"><?php echo $result['id']." "?><?php echo $result['name']?></option><?php } ?>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>duration</td>
                <td><input type="text" name="duration"></td>
            </tr>
            <tr>
                <td>deskripsi</td>
                <td><input type="text" name="description"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add Course"></td>
            </tr>
        </table>    
        </form>
        <?php

            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $tumbnail = $_POST['tumbnail'];
                $id_author = $_POST['id_author'];
                $duration = $_POST['duration'];
                $description = $_POST['description'];

                //
                include("config.php");

                $result = mysqli_query($mysqli, "INSERT INTO course(name,thumbnail,id_author,duration,description) VALUES ('$name','$tumbnail','$id_author','$duration','$description')");

                //
                echo "Berhasil Menambah Course. <a href='index.php'>Lihat Course</a>";
            }
        
        ?>

    </body>
</html>