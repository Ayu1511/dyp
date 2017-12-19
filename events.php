<h2>Events</h2>

      <div class="row">
<?php 
include "connect.php";
  $sql = "SELECT * from info";

      if($result=(mysqli_query($conn,$sql)))
      { 
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
            $id=$row['id'];
            $title = $row['title'];
            $info = $row['info'];
            $img = $row['img'];
            
         
?>


       <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#">
               <?php echo '<img class="card-img-top" src="images/'.$img.'" alt="'.$title.'">';
              ?>
              </a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"><?php echo $title;?></a>
              </h4>
              <p class="card-text"><?php echo $info; ?></p>
            </div>
          </div>
        </div>
    <?php
     }
   }
 }
      ?>