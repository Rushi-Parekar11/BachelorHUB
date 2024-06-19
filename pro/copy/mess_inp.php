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
    <title>Mess inp</title>
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
//include("databasecopy.php");
$servername="localhost";
 $username="root";
 $passward="";
 $dbname="phptut";
 //create the connection 
 $conn= new mysqli( $servername,$username, $passward,$dbname);



 
if(isset($_POST['submit'])){
    extract($_POST);
    $date=date("Y-m-d  H:i:s");
    $sql="INSERT INTO  copydbsy (namefV,rentV,addressfV,contactV,VN,datefV)  VALUES ('$namef','$rent','$addressf','$contact','$VN','$date') ";
  // echo "<pre>";
   //print_r($result);
  //exit;

    $result = $conn -> query($sql);  
    if($result){
        $message = "User has been created.";
        echo "<script>
            alert('$message');
            window.location.href = 'mess_canteen.php';
        </script>";
        exit();
    } else {
        echo "<br>Something went wrong.";
    }    
}
?>



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
                    
                    </ul>

                </div>
            </div>
        </nav>
        <!-- navbar End -->

    </div>
    <div class="main">
        <div class="con">
            <form action="mess_inp.php" method="post">
                <h1>Info About Mess/Canteen</h1>
                <div class="one">
                    <input type="text" name="namef" id="passward" placeholder="Enter Mess/Canteen Name" required>
                </div>
                <div class="onwee"><input type="number" name="rent" id="passward" placeholder="enter the rent" required >
                </div>
                <div class="three"><input type="text" name="contact" id="passward" placeholder="contact" required>
              </div>
              <div class="three"><input type="text" name="VN" id="passward" placeholder="Veg/NON-Veg" required>
            </div>
            <div class="twooo"><input type="text" name="addressf" id="passward" placeholder="Address Of Mess/Canteen" required>
                </div>
                <div class="five"></div>
                <button type="submit" name="submit" class="sb">submit</button>
        </div>
        </form>

    </div>
</body>

</html>
