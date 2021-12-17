<?php

    include "./content.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../styles/dbms.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>DBMS</title>
</head>
<body>
  <nav>
        <div class="logo" >
        <a href="../main_page.php">Interview Cracker</a>
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
                    <div class="fas fa-user-circle
						fa-2x" style="color: white;" id="icon_name"><?php echo $_SESSION['name']; ?></div>
                </a>
            </li>
        </div>
    </nav>
    <h1 id="dbms_heading">DBMS IMP QUES</h1>
    <div class="card text-center">
    <?php foreach($query as $q){ ?>
        <div class="card-header">
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $q['title'];?></h5>
            <a href="../view.php?id=<?php echo $q['id']?>" class="btn btn-primary">Show Answer</a>
        </div>
    <?php }?>
    </div>
  

</body>
</html>
