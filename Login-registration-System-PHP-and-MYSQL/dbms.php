<?php

    include "content.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
    <link rel="stylesheet" href="./styles/dbms.css">
    <title>DBMS</title>
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="#"></a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>
        
  <div class="box" >
      <h1 >DBMS IMP QUES</h1>
      <?php foreach($query as $q){ ?>
        <div class="col s12 m7">
          <div class="card horizontal" id="card_horz">
            <div class="card-stacked">
              <div class="card-content">
              <h5 class="card-title"><?php echo $q['title'];?></h5>
              
              <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Show Answer <span class="text-danger">&rarr;</span></a>
              </div>
            </div>
          </div>
        </div>
        <?php }?>
  </div>

</body>
</html>
