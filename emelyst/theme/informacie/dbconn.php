 <?php
            $data = 1;
            $servername = "localhost";
            $username = "david";
            $password = "barta";
            $dbname = "emelyst";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            mysqli_set_charset($conn,"utf8");
            
            $sql = "SELECT tmp FROM teplota ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   $data = $row["tmp"];
                        
}} 

echo $data;

?>
