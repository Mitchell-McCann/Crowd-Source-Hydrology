<?php
        include ("config.php");
?>
<html>
        <head>
                <script src="js/jquery-1.10.1.js"></script>
        </head>
        <body>

                <form method="POST" action="newEquip.php">
                        <label>New Equipment Name:</label><input type="text" name="equipName" /><br />
                        <label>OP Code:</label><select name="opCode">
                                <?php
                                        $sql = "Select * From Operations";
                                        $result = mysql_query($sql,$connection);

                                        while($row = mysql_fetch_array($result))
                                        {
                                                $id = $row['id'];
                                                $desc = $row['description'];
                                                echo("<option value='$id'>$desc</option>");
                                        }
                                ?>
                        </select><br />
                        <input type="submit" />
                </form>

                <form method="POST" action="newOpCode.php">
                        <label>New Operation Name:</label><input type="text" name="operation" /><br />
                        <label>Field 1 Name:</label><input type="text" name="f1" /><br />
                        <label>Field 2 Name:</label><input type="text" name="f2" /><br />
                        <label>Field 3 Name:</label><input type="text" name="f3" /><br />
                        <label>Field 4 Name:</label><input type="text" name="f4" /><br />
                        <label>Field 5 Name:</label><input type="text" name="f5" /><br />
                        <label>Field 6 Name:</label><input type="text" name="f6" /><br />

                        <input type="submit" />
                </form>
        </body>
</html>

