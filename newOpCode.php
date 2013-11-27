<?php
        include ("config.php");

        $name = $_POST['operation'];
        $f1 = $_POST['f1'];
        $f2 = $_POST['f2'];
        $f3 = $_POST['f3'];
        $f4 = $_POST['f4'];
        $f5 = $_POST['f5'];
        $f6 = $_POST['f6'];

        if (empty($f2))
        {
                $f2 = null;
        }
        if (empty($f3))
        {
                $f3 = null;
        }
        if (empty($f4))
        {
                $f4 = null;
        }
        if (empty($f5))
        {
                $f5 = null;
        }
        if (empty($f6))
        {
                $f6 = null;
        }

        // To protect MySQL injection (more detail about MySQL injection)
        $name = stripslashes($name);
        $name = mysql_real_escape_string($name);

        $sql = "SELECT * FROM Operations WHERE description = '$name'";
        $result = mysql_query($sql, $connection);
        $num_Rows = mysql_num_rows($result);

        if($num_Rows > 0)
        {
        ?>
        <script type="text/javascript">
                location.href = "addEquipment.php";
                alert("This operation name already exists in the database");
        </script>

        <?php
        }
        else
        {
                $sql_insert = "INSERT INTO Operations (description, F1, F2, F3, F4, F5, F6) VALUES('$name','$f1','$f2','$f3','$f4','$f5','$$
                $resultInsert = mysql_query($sql_insert, $connection);
        ?>
        <script type="text/javascript">
                location.href = "addEquipment.php";
                alert("New operation added. You can now enter equipment using this operation.");

        </script>
        <?php
        }
?>

