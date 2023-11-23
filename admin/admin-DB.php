<?php
    
    if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
        header('Location: /process/not-admin.php');
         exit;}   

    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header('Location: /process/login.php');
        exit;}
   
    include '../process/conn.php';
    
    $sql="SELECT * FROM customers";

    $result=mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
        // Output table header
        ob_start();
        echo "<table border'>";
        echo "<tr><th>ID</th><th>Username</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Date of Birth</th><th>Gender</th><th>Email</th><th>Phone</th></tr>";
      
        // Output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>".$row["id"]."</td>";
          echo "<td>".$row["username"]."</td>";
          echo "<td>".$row["fname"]."</td>";
          echo "<td>".$row["mname"]."</td>";
          echo "<td>".$row["lname"]."</td>";
          echo "<td>".$row["DOB"]."</td>";
          echo "<td>".$row["gender"]."</td>";
          echo "<td>".$row["email"]."</td>";
          echo "<td>".$row["phone"]."</td>";
          echo "</tr>";
        }
      
        // Output table footer
        echo "</table>";
      } else {
        echo "0 results";
      }
      echo "<br><br>";
      $sql="SELECT * FROM users";

    $result=mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
        // Output table header
        echo "<table  >";
        echo "<tr><th>ID</th><th>Username</th><th>Password</th><th>admin</th>";
      
        // Output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>".$row["id"]."</td>";
          echo "<td>".$row["username"]."</td>";
          echo "<td>".$row["password"]."</td>";
          echo "<td>".$row["is_admin"]."</td>";
          echo "</tr>";
        }
      
        // Output table footer
        echo "</table>";
      } else {
        echo "0 results";
      }
      $output=ob_get_clean();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["Submit"])){
            $id=$_POST["id"];
            $ad=$_POST["admin"];
            mysqli_query($conn,"UPDATE users SET is_admin = '$ad' WHERE id = '$id';");
            header("Location: index.php");
        }

        if(isset($_POST["delete"])){
            $id=$_POST["id"];
            mysqli_query($conn,"DELETE FROM users WHERE id='$id';");
            header("Location: admin.php");
        }
    }
?>