<html><head>
<?php
// Create connection object
$user = "ccardenas2";  
$conn = mysqli_connect("localhost",$user,$user,$user);
// Check connection
if (mysqli_connect_errno()) {
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}


$sql = "SELECT id, first, second, third, fourth, fifth, sixth, seventh, eighth, ninth, tenth FROM madlib";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row

  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. "<br><p>Eco-guilt as defined by the" . $row["first"]. " Dictionary is: The feeling you get when you could have done something for the environment, but consciously made the decision not to. This experience has grown more common as" . $row["second"]. " more regularly comes face to face with the " . $row["third"]."of global warming on our ecosystem.</p><p>If you’ve ever stared at an " . $row["fourth"]. "drink can, frantically looking for a recycle bin only to have it " . $row["fifth"]. "at you when there isn’t one available, you’ve experienced eco guilt. If you have ever " . $row["sixth"]. "yourself for buying a single use water bottle because you forgot your " . $row["seventh"]. "flask at home, you’ve experienced eco guilt. If you’ve ever bought another " . $row["eighth"]. "shopping bag inline at the " . $row["ninth"]. "because you can’t " . $row["tenth"]. "with the idea of taking home more plastic grocery bags, you’ve experienced eco guilt.</p><br><br>From: https://www.prospectusnews.com/2022/05/10/recycling-eco-guilt-for-positive-change/ <br>"



  }
} else {
  echo "0 results";
}

mysqli_close($conn);


?>


</body>
</html>
