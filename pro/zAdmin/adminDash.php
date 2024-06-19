

<?php 
$servername="localhost";
$username="root";
$passward="";
$dbname="phptut";

//create the connection 
$conn= new mysqli( $servername,$username, $passward,$dbname);
//get all users
$sql="select * from copydb";
$result=$conn -> query($sql);



$servername="localhost";
$username="root";
$passward="";
$dbname="phptut";

//create the connection 
$conn= new mysqli( $servername,$username, $passward,$dbname);
//get all users
$sql="select * from copydbsy";
$result=$conn -> query($sql);

//echo "<pre>";
//print_r($result);
//exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    
    <title>Document</title>
    <style>
        *{
            padding: 0;margin: 0;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
        body { font-family: 'Poppins', sans-serif;}
        .container-fluid{
  background-color: rgba(77, 77, 131, 0.647);
  border-radius: 13px;

}
.contentbox{
   display: flex;
   align-items: center;
   justify-content: center;
    }
   .content{
      height: 200px;
      width: 85%;
      background-color: rgba(87, 87, 241, 0.237);
      border-radius: 7px;
      display: flex;justify-content: center;
      font-weight: bolder;
      font-size: 20px;
   }

  .section {width: 80%;margin: auto;}
  .sys {width: 80%;margin: auto;}

  .imgcontainer {text-align: center;margin: 15px 0 8px 0;}
  img.avatar {width: 40%;border-radius: 50%;}
  .container { padding: 16px; }
  span.psw {float: right;padding-top: 10px;}
  #users {font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;}
  #users td,#users th {border: 1px solid #ddd;padding: 1px;font-size: 12px;}
  #users th {padding-top: 5px;padding-bottom:5px;text-align: left;background-color: rgba(77, 77, 131, 0.647);color: white;}
.button {border: none;color: white;padding: 8px 12px;text-align: center;text-decoration: none;display: inline-block;font-size: 7px;border-radius: 4px;}

.edit {background-color:rgb(24, 24, 170)}
.delete {background-color: red; }

h3{height: 7vh;width: 100vw;  background-color: rgba(130, 130, 172, 0.647);color: white;text-align: center;}
    </style>

</head>



<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bachlor's HUB.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/php/WTP/pro/main/index.html">Home</a>
                    </li>
                    <!-- Add my -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Add My Business
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="\php\WTP\pro\copy\flat_inp.php">Add Room,Flat,Hostel</a></li>
                          <li><a class="dropdown-item" href= "\php\WTP\pro\copy\mess_inp.php">Add Mess & Canteen</a></li>
                        </ul>
                      </li>
                     <!-- Add my -->

                    <!-- users -->
                    <li class="nav-item dropdown">
                       
                        
                      </li>
                     <!-- users end -->
                </ul>

            </div>
        </div>
    </nav>
    <!-- navbar End -->
    <div class="contentbox" >
            <div class="content">
            <?php 
$sql = "SELECT COUNT(*) AS total_users FROM copydb"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br>Total Hotel/Room/Flat Users: " . $row["total_users"];
    }
} else {
    echo "No users found";



}$sql = "SELECT COUNT(*) AS total_users2 FROM copydbsy"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo " <br>Total Mess/Canteen Users: " . $row["total_users2"];
    }
} else {
    echo "No users found";
}

?>

                
            </div>
        </div>



   
<!-- users list start -->
    <section class="section">
    <?php 
 $servername="localhost";
 $username="root";
 $passward="";
 $dbname="phptut";

 //create the connection 
 $conn= new mysqli( $servername,$username, $passward,$dbname);

 //delet user
 if (isset($_GET['id'])) {
    extract($_GET);
    $sql = "DELETE FROM copydb where id = " . $id;
    $result = $conn->query($sql);
    if ($result)
        echo "User has been deleted";
    else
        echo "Something went wrong, please try again";
}

 //all users
 $sql="select * from copydb";
 $result=$conn -> query($sql);
?>
        
       
        <h4> Users for Hostel & Room</h4>

        <table id="users">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Rent</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['namef'] ?>
                            </td>
                            <td>
                            <?php echo $row['rent'] ?>
                            </td>
                            <td>
                            <?php echo $row['addressf'] ?>
                            </td>
                            <td>
                            <?php echo $row['contact'] ?>
                            </td>
                            <td>
                            <?php echo $row['Gender'] ?>
                            </td>
                            <td>
                                <a href="edit-user.php?id=<?php echo $row['id'] ?>" class="button edit">Edit</a>
                                <a href="adminDash.php?id=<?php echo $row['id'] ?>" class="button delete">Delete</a>
                            </td>
                        </tr>
                    <?php  }
            } else {
                echo "<tr><td colspan='3'>No record found!</td></tr>";
            }
            ?>
            </tbody>
        </table>

        <div class="container" style="background-color:#f1f1f1">
            <hr><hr><hr>
        </div>
    </section>





 <section class="sys">
    <?php 
 $servername="localhost";
 $username="root";
 $passward="";
 $dbname="phptut";

 //create the connection 
 $conn= new mysqli( $servername,$username, $passward,$dbname);

  //delet user
  if (isset($_GET['idV'])) {
    extract($_GET);
    $sql = "DELETE FROM copydbsy where idV = " . $idV;
    $result = $conn->query($sql);
    if ($result)
        echo "User has been deleted";
    else
        echo "Something went wrong, please try again";
}


 //user retrive
 $sql="select * from copydbsy";
 $result=$conn -> query($sql);
?>
    <h4> Users form Mess</h4>

        <table id="users">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Rent</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Veg/Non-Veg</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['namefV'] ?>
                            </td>
                            <td>
                            <?php echo $row['rentV'] ?>
                            </td>
                            <td>
                            <?php echo $row['addressfV'] ?>
                            </td>
                            <td>
                            <?php echo $row['contactV'] ?>
                            </td>
                            <td>
                            <?php echo $row['VN'] ?>
                            </td>
                            <td>
                            <a href="edit-user2.php?idV=<?php echo $row['idV'] ?>" class="button edit">Edit</a>
                                <a href="adminDash.php?idV=<?php echo $row['idV'] ?>" class="button delete">Delete</a>
                            </td>
                        </tr>
                        <?php  }
            } else {
                echo "<tr><td colspan='3'>No record found!</td></tr>";
            }
            ?>
            </tbody>
        </table>


  
        </section>

</body>

</html>