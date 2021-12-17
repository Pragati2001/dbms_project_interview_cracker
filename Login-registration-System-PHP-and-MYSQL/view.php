<?php

    include "./Dbms/content.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Answer</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>

    <nav>
        <div class="logo">
            Interview Cracker
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
   <div class="container mt-5">

        <?php foreach($query as $q){?>
            <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h1><?php echo $q['title'];?></h1>
            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
        <?php } ?>    

        <a href="./Dbms/dbms.php" class="btn btn-outline-dark my-3">Go Home</a>
   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</body>
</html>