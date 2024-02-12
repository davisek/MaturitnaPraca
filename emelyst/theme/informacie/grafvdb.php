<?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "todo";
            $data = '';

            $conn = new mysqli($servername, $username, $password, $dbname);
            mysqli_set_charset($conn,"utf8");
            
            $sql = "SELECT * FROM vlhkost where vlhkost.id mod 12 = 0 ORDER BY id DESC LIMIT 7";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   $data = $data .'"'. $row["hodnota"].'",';
                        
}} 
    $data = trim($data,",");
?>
