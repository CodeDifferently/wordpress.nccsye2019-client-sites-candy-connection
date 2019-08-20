<?php?>
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><?php insertImage($img, 'class="card-img-top"') ?></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">
          <?php echo $itemName?></a>
        </h4>
        <h5>
          <?php echo $itemPrice?>
        </h5>
        <p class="card-text">
          <?php echo $cardText?>
        </p>
      </div>
      <div class="card-footer">
      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>





<!-- 
<//?php
function echoStars($numberOfStars) {
  $result = "";
  for($i=0; $i < $numberOfStars; $i++) {
    $result .= "&#9733; ";
  }
  preg_replace(" $", '', $result);
  echo $result;
}
?>  -->