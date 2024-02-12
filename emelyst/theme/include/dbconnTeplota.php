 <?php
            $data = [];
            $servername = "91.127.5.4";
            $username = "david";
            $password = "barta";
            $dbname = "dht";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            mysqli_set_charset($conn,"utf8");
            
            $sql = "SELECT * FROM stav";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   $data[] = $row;
                        
}} 

echo json_encode($data);

?>