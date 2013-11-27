<?php
        include ("config.php");
?>
<html>
        <head>
                <script src="js/jquery-1.10.1.js"></script>
        </head>
        <body>

                <center><h1>Equipment</h1></center>

                <table>
                        <tr>
                                <?php
                                        $sql = "SELECT * FROM Equipment as eq JOIN Operations as op WHERE eq.opCode = op.id";
                                        $result = mysql_query($sql,$connection);

                                        echo ("<td>ID</td><td>QR Code</td><td>GPS</td><td>opCode</td><td>Type</td><td>f1</td><td>f2</td><td$

                                        while($row = mysql_fetch_array($result))
                                        {
                                                $id = $row['id'];
                                                $qr = $row['qrCode'];
                                                $gps = $row['gps'];
                                                $op = $row['opCode'];
                                                $desc = $row['description'];
                                                ?>
                                                <tr class="rowsTable" onclick="">
                                                <?php
                                                echo ("<td>$id</td><td>$qr</td><td>$gps</td><td>$op</td><td>$desc</td>");

                                                $field = $row['F1'];
                                                $rowNumber = 2;

                                                $fieldToCheck = 'F' . $rowNumber;
                                                while ($field != null)
                                                {
                                                        echo ("<td>$field</td>");
                                                        $field = $row[$fieldToCheck];
                                                        $rowNumber = $rowNumber + 1;
                                                        $fieldToCheck = 'F' . $rowNumber;
                                                }
                                                echo ("</tr>");
                                                ?>
                                                 <script type="text/javascript">
                                                        $(".rowsTable").click(function() {
                                                                var id = $(this).find("td:first-child").text();
                                                                window.location.href = 'showVideo.php';
                                                        });
                                                </script>
                                                <?php
                                        }
                                ?>
                        </table>

                        <a href="addEquipment.php" >Add New Location</a>

        </body>
</html>
