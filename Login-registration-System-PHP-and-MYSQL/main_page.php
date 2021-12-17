<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <!-- Linking the stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Linking the Jquery script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".fa-search").click(function () {
                $(".icon").toggleClass("active");
                $("input[type='text']").toggleClass("active");
            });
        });
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Interview Cracker</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <nav>
        <div class="logo">
            <a href="main_page.php">Interview Cracker</a>
        </div>

        <div class="nav-items">

            <!-- The Menu items -->
            <li><a href="./Dbms/dbms.php">DBMS</a></li>
            <li><a href="#">Computer Networks</a></li>
            <li><a href="#">Operating System</a></li>
            <li><a href="#">Quiz</a></li>
        </div>

        <!-- Defining the search bars -->
        <div class="searchbar">
            <input type="text" placeholder="search">
            <div class="icon">
                <i class="fas fa-search"></i>
                
            </div>
        </div>

        <!-- Defining the login button -->
        <div class="licon">
            <li>
                <a href="#">
                    <!-- <i class="fas fa-user-circle
						fa-2x" style="color: white;">
                    </i> -->
                    <div class="fas fa-user-circle
						fa-2x" style="color: white;" id="icon_name"><?php echo $_SESSION['name']; ?></div>
                </a>
            </li>
        </div>
    </nav>
        <p id="line"><span style="color: #FC6D6D;font-weight: bold;">Interview Cracker</span> helps you<span style="color: #8ebb52;"> Crack Your Interview </span>and get you <span style="color: #8ebb52;">Placed In Your Dream Job</span>.</p>
        <div id="im">
            <img src="./styles/Logo image.jpg" alt="">
        </div>
    <div id="first">
        <div class="wrapper">
            <div class="static-txt">One Stop Destination for</div>
            <ul class="dynamic-txts">
              <li><span>Coding</span></li>
              <li><span>Designing</span></li>
              <li><span>Developing</span></li>
              <li><span>Placement</span></li>
            </ul>
          </div>
      </div>
</body>

</html>
<?php 
}else{
     header("Location: ./login_and_Register/index.php");
     exit();
}
 ?>