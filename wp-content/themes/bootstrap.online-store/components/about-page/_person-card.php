<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <?php insertImage($img, 'class="card-img-top"'); ?>
    <div class="card-body">
      <h4 class="card-title"><?php echo $name; ?></h4>
      <p class="card-text"><?php echo $description; ?></p>
    </div>
    <div class="card-footer">
      <?php insertLink($link, 'class="btn btn-primary"'); ?>More</a>
    </div>
  </div>
</div>