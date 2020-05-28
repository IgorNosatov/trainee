
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-12">
      <?php foreach ($posts as $val) : ?>
        <h3><?php echo $val['name']; ?></h3>
        <p><?php echo $val['description']; ?></p>
        <hr>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
