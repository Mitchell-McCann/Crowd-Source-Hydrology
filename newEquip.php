<?php
        include ("config.php");

        $name = $_POST['equipName'];
        $opcode = $_POST['opCode'];

        // To protect MySQL injection (more detail about MySQL injection)
        $name = stripslashes($name);
        $name = mysql_real_escape_string($name);

        $sql = "SELECT * FROM Equipment WHERE gps = '$name'";
        $result = mysql_query($sql, $connection);
        $num_Rows = mysql_num_rows($result);

        if($num_Rows > 0)
        {
        ?>
        <script type="text/javascript">
                location.href = "addEquipment.php";
                alert("This equipment name already exists in the database");
        </script>

        <?php
        }
        else
        {
                $sql_insert = "INSERT INTO Equipment (gps, opCode) VALUES('$name','$opcode')";
                $resultInsert = mysql_query($sql_insert, $connection);
        ?>
        <script type="text/javascript">
                location.href = "equipment.php";
                alert("New equipment added.");

        </script>
        <?php
        }
?>
