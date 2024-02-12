 <?php
            $data = "";
            $servername = "192.168.0.5";
            $username = "david";
            $password = "barta";
            $dbname = "dht";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            mysqli_set_charset($conn,"utf8");
            
            $sql = "SELECT stav FROM stav WHERE topic='EMELYST/prizemie/chodba/alarm'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   $data = $row["stav"];
                        
}} 

echo $data;

?>
