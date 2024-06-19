<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit-user</title>
    <style>
        .container-fluid{
  background-color: rgba(77, 77, 131, 0.647);
  border-radius: 13px;
}

        .msg {
            background-color: rgba(77, 77, 131, 0.647);
        }

        .main {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .con {
            height: 400px;
            width: 600px;
            background-color: rgb(203, 202, 202);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .main {
            height: 90vh;
            width: 100vw;
            background-color: rgba(147, 147, 172, 0.59)
        }

        #passward {
            border: none;
            border-radius: 4px;
            width: 400px;
            margin: 10px;
            font-size: smaller;
            height: 29px;
        }
        .sb {
            border: none;
            background-color: rgb(125, 125, 244);
            color: white;
            border-radius: 4px;
            width: 120px;
        }

        .sb:hover {
            transform: scale(1.1, 1.1)
        }
 @media only screen and (max-width:500px) {
            .con {
                height: 270px;
                width: 240px;
                font-size: smaller;
            }

            #in {
                width: 200px;
                margin: 3px;
                height: 20px;
            }

            .sb {
                width: 80px;
                font-size: smaller;
                margin-top: 4px;
            }

            .sent {
                height: 20px;
                width: 80px;
            }
            h1 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="msg">

        <?php 
//Database is
$servername="localhost";
 $username="root";
 $passward="";
 $dbname="phptut";
 $conn= new mysqli( $servername,$username, $passward,$dbname);

## Step 1 - Get user's data, by user id
if (isset($_GET['id'])) {
    $sql = "select * from copydb where id = " . $_GET['id'];
    $result = $conn->query($sql);
    $user = mysqli_fetch_assoc($result);
  
} else {
    echo "<h1>Invalid request</h1>";
    exit;
}
 
##update
if(isset($_POST['submit'])){
    extract($_POST);
  $sql = "UPDATE copydb  SET `namef`='$namef',`rent`='$rent',`addressf`='$addressf',`contact`='$contact',`Gender`='$Gender' where id = " . $_GET['id']; 
    
    $result = $conn->query($sql);
    if ($result) {
        $message = "User has been updated";
         echo "<script>
             alert('$message');
             window.location.href = 'adminDash.php';
         </script>";
         exit();
       
    } else {
        $_SESSION['error'] = "Something went wrong, please try again";
    }
}
?>



    </div>
    <div class="main">
        <div class="con">
            <form action="edit-user.php?id=<?php echo $user['id'] ?>" method="post">
                <h1>Update the info</h1>
                <div class="one">
                    <input type="text" name="namef" id="passward" placeholder="Enter flat or hostel name" required value="<?php echo $user['namef'] ?>">
                </div>
                <div class="onwee"><input type="number" name="rent" id="passward" placeholder="enter the rent"  required value="<?php echo $user['rent'] ?>">
                </div>
                <div class="three"><input type="text" name="contact" id="passward" placeholder="contact" required value="<?php echo $user['contact'] ?>">
              </div>
              <div class="three"><input type="text" name="Gender" id="passward" placeholder="Male/Female" required value="<?php echo $user['Gender'] ?>">
            </div>
            <div class="twooo"><input type="text" name="addressf" id="passward" placeholder="address" required value="<?php echo $user['addressf'] ?>">
                </div>
                <div class="five"></div>
                <button type="submit" name="submit" class="sb">Update</button>
        </div>
        </form>

    </div>
</body>

</html>