<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Green News </title>
    <!-- <style media="screen">
      
    </style> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="home-style.css">
  </head>
  <body>
    <?php include 'navbar.php' ?>
    <br><br>
    <div class="container news-container">
      <?php
      include 'db.php';

      $sql="SELECT * from create_news order by id desc";
      $query=mysqli_query($conn,$sql);

      while ($info=mysqli_fetch_array($query)) {
        ?>

        <div class="news-content">
          <img class=news-img src="image/<?php echo $info['images']; ?>" alt="">
          <div class="news-date-container">
           <p class="day-date"> <span>  Day: </span> <?php echo formatDate3($info['date']); ?></p> 
           <p class="day-date"> <span>  Date: </span> <?php echo formatDate1($info['date']); ?></p>
           <p class="time"> <span>  Time: </span> <?php echo formatDate2($info['date']); ?></p>

          </div>
          <div class="new-from-data">
            <?php echo $info['news']; ?>
          </div>

          
          <form class="" action="fullnews.php" method="post">
            <input type="text" name="id" value="<?php echo $info['id']; ?>" hidden>
            <input id="readfullnews" type="submit" name="fullnews" value="Read Full News">

          </form>

        </div>

        <?php
      }

      ?>

    </div>
    <?php include 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
