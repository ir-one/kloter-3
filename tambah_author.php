<DOCTYPE html!>
<html>
    <head>
        <title>Tambah Author</title>
    </head>
    <body>
        <h1>Tambah Author</h1>

        <form action="tambah_author.php" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Add Author"></td>
                </tr>
            
            </table>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $name = $_POST['name'];

                include("config.php");

                $result = mysqli_query($mysqli, "INSERT INTO author(name) VALUES('$name')");

                echo "Author Berhasil Ditambah. <a href='index.php'>View Course</a>";
            }
        ?>
    </body>
</html>