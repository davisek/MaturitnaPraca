 <?php
            $data = "";
            $servername = "localhost";
            $username = "david";
            $password = "barta";
            $dbname = "emelyst";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            mysqli_set_charset($conn,"utf8");
            
            $sql = "SELECT stav FROM stav WHERE topic='EMELYST/poschodie/chodba/alarm'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   $data = $row["stav"];
                        
}} 

echo $data;

?>
