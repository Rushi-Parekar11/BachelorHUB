
<?php 
//include("databasecopy.php");
$servername="localhost";
$username="root";
$passward="";
$dbname="phptut";

//create the connection 
$conn= new mysqli( $servername,$username, $passward,$dbname);
//get all users
$sql="select * from copydb";
$result=$conn -> query($sql);

//echo "<pre>";
//print_r($result);
//exit;

?>
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
    <title>Document</title>
    <style>
        
        .container-fluid{background-color: rgba(77, 77, 131, 0.647);border-radius: 13px;}

        .all{
            display: flex;align-items: start;height: auto;width: 100%;
        }
        .container{
            height: auto;width:50vw;margin-left: -12px;
        }
        .card{height: 190px;width: 600px;margin-top: 27px;margin-bottom: 10px;box-shadow: 2px 1px 9px 0px;margin-left: 90px; } 
        .imgs{height: 100vh;width: 30vw;position:fixed;margin-left: 1000px;margin-top: 100px;}
        
        h2{margin-left: 40px;margin-top: 10px;} 
        .h6{margin-left: 40px;margin-top: 10px;font-weight: 400;}
        .rent{margin-left: 40px;margin-top: 10px;} .ren{font-weight: 700;font-size: 18px;}
        a{margin-left: 40px;margin-top: 10px;} 
        .contact{margin-left: 40px;margin-top: -10px;}
        .hrr{margin-top: 10px};

        .std{height: 10vh;width: 100vw;background-color: aqua;}
        #dtd{font-size: 10px;color: green;margin-left: 400px;margin-top: -11px;}
        .stic{
            position: sticky;
               top: 0px;
               z-index: 6;
        }
#mor{text-decoration: none;}
#tp{
    margin-top: 15px;
    margin-left: 10px;
}
   #hom{
    margin-top: 15px;
   }     
   .sortcon{
    height: 280px;width: 180px;
    background-color: rgba(134, 122, 177, 0.452);
    border-radius: 10px;
    margin-left: 10px;
    margin-top: 70px;
    position: sticky;
    top: 140px;
    box-shadow:1px 1px 9px 2px ;
   }
 .nam{height: 50px;width: 180px;color: white;background-color: rgb(50, 50, 86);text-align: center;border-radius: 6px;}
 #xyz:hover{background-color: rgba(120, 108, 168, 0.6);}
 /* /////more link//// */

</style>
    
</head>

<body>
    <div class="stic">
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
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/php/WTP/pro/main/index.html">Home</a>
                    </li> -->

                    <li id="hom" style="text-decoration: none;color: black;">
                        <a href="/php/WTP/pro/main/index.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-house-door-fill" viewBox="0 0 16 16" >
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" href="index.html"/>
                          </svg>
                        </a>
                    </li>
                    
                    <li class="nav-item ">
                        <a class="nav-link" href="\php\WTP\pro\zAbout\about.html">About</a>
                    </li>
                    <!-- users -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Users
                        </a>
                        <ul class="dropdown-menu">
                         
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href= "\php\WTP\pro\zAdmin\verifyAdmin.php">Admin</a></li>
                        </ul>
                      </li>
                     <!-- users end -->

                     <li id="tp">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16" onclick="scrollToTop()">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5" onclick="scrollToTop()"/>
</svg>
                     </li>
                    </ul>

                </div>
                
            </div>
        </nav>
        <!-- navbar End -->
        </div>
</div>
</div>

<!-- filter div start -->
   <div class="all">
   <div class="sortcon">
   <div class="nam">Filter 
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
  <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5z"/>
</svg></div>
<div class="xy"id="xyz">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <strong style="margin-left: -20px;" >Sort by:</strong>Relevance
                        </a>
                        <ul class="dropdown-menu">
                          <li style="margin-left: -27px;" ><a class="dropdown-item"  onclick="sortData()"> Rent-Low to High</a></li>

                          <li><hr class="dropdown-divider"></li>
                          <li style="margin-left: -27px;" ><a class="dropdown-item" href= "#"> Rent-High to Low</a></li>
                        </ul> 
  <hr>    
  </div>  
  <div class="xy"id="xyz">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Relevance
                        </a>
                        <ul class="dropdown-menu">
                          <li style="margin-left: -27px;" ><a class="dropdown-item" href="#">Top Reated</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li style="margin-left: -27px;" ><a class="dropdown-item" href= "#">Low Reated</a></li>
                        </ul> 
  <hr>    
  </div>   
  <div class="xy"id="xyz">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Gender
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">MALE</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href= "#">FEMALE</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href= "#">CO-LIVING</a></li>
                        </ul> 
  <hr>    
  </div> 
  	</div>
    <!-- filter div end -->



    
   
       <div class="container">     
        
       <?php
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
       <div class="card">
        <h2><?php echo $row['namef'] ?></h2>
        <div class="h6">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/></svg>
            <?php echo $row['addressf'] ?></div>

         <div class="rent"><strong class="ren">₹ <?php echo $row['rent'] ?> </strong> / Month &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong>For</strong>/<?php echo $row['Gender'] ?></div> 
         <hr class="hrr">
          <div class="contact">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
              </svg>
              <?php echo $row['contact'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
              <!-- <a href="more.php?id=<?php echo $row['id'] ?>" class="button edit" id="mor" >more+</a> -->

           <section id="dtd">UPDATED( <?php echo $row['datef'] ?> )</section> 
          </div>
       </div>
       <?php  }
            } else {
                echo "not any user";
            }
            ?>


        </div>

        <div class="imgs">
            <div class="carousel-item active">
                <img src="slid hostel 2.jpg" class="d-block w-100" alt="mian img">
                <h1>Hostel/Room/Flat</h1>
                <h3>For Bachlor's</h3>
            </div>
            
        </div>



        <script>
  // top scroll fun
  var scrollToTopBtn = document.getElementById("scrollToTopBtn");
  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      scrollToTopBtn.style.display = "block";
    } else {
      scrollToTopBtn.style.display = "none";
    }
  }
  function scrollToTop() {
    document.body.scrollTop = 0; 
    document.documentElement.scrollTop = 0; 
  }
</script>



    </div>   
</body>
</html>
