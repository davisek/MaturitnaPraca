<?php
            $servername = "localhost";
            $username = "david";
            $password = "barta";
            $dbname = "emelyst";
            $data = '';

            $conn = new mysqli($servername, $username, $password, $dbname);
            mysqli_set_charset($conn,"utf8");
            
            $sql = "SELECT * FROM teplota where teplota.id mod 12 = 0 ORDER BY id DESC LIMIT 7";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   $data = $data .'"'. $row["tmp"].'",';
                        
}} 
    $data = trim($data,",");
?>
