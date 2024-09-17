
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parking lot";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Username =($_POST["USERNAME"]);
  $Password =($_POST["PASSWORD"]);
}

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT UN, PW FROM `logindetail`";
$result = $conn->query($sql);
$flag=0;
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    if($Username == $row["717822y111"] and $Password == $row["karpagam"])
    {
        echo "<script> window.location.replace('index.html')</script>";
        $flag=1;
    }
  }
} 
if($flag!=1){
 
    echo '<script type="text/javascript">';
echo ' alert("Invalid username or password")'; 
echo '</script>';
echo "<script> window.location.replace('login.html')</script>";
}
$conn->close();
?>
  </body>
</html>