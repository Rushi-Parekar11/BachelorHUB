<!-- Admin verification -->

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
    <title>Bachlor's Hub.com</title>
    <script>
    window.onload = function() {
        alert("Admin Can Ascess");
    }
</script>
    <style>
        .main {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .con {
            height: 300px;
            width: 500px;
            background-color: rgb(203, 202, 202);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .main {
            height: 100vh;
            width: 100vw;
            background-color: rgba(77, 77, 131, 0.647);
        }

        #name {
            border: none;
            border-radius: 4px;
            width: 400px;
            margin: 10px;
            font-size:smaller;
            height: 29px;
        }
        #password {
            border: none;
            border-radius: 4px;
            width: 400px;
            margin: 10px;
            font-size:smaller;
            height: 29px;
        }

        @media only screen and (max-width:500px) {
            .con {
                height: 200px;
                width: 230px;
                font-size: smaller;
            }
            #in{
                width: 200px;
                margin: 3px;
                height: 20px;
            }.sb {
                width: 80px;
                font-size: smaller;
                margin-top: 4px;
        }
        }

        .sb {
            border: none;
            background-color: rgb(125, 125, 244);
            color: white;
            border-radius: 4px;
            width: 120px;
        }
    </style>
    <script>
        function checkLogin() {
            var name = document.getElementById("name").value;
            var password = document.getElementById("password").value;
    
            // Check if name and password match the required values
            if (name === "hub" && password === "123456789") {
                // Open a new page
                window.location.href = "adminDash.php";
            } else {
                alert("Invalid credentials. Please try again.");
            }
        }
    </script>
</head>

<body>
    <div class="main">
        <div class="con">
            <h1>Admin Login</h1>
            <input type="text" id="name" name="name" placeholder="Enter the Name" required>
            <input type="password" id="password" name="password" placeholder="Enter the password" required><br>
            <button type="button" class="sb" onclick="checkLogin()">Login</button>
        </div>

    </div>
</body>

</html>