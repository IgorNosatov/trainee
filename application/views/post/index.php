
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <?php
        for ($row = 0; $row < 3; $row++) {
          echo '<div class="post-info">';
          echo " <h4 class='pt-2'>Post name:" . $news[$row][0] . "</h4>" . "<p>" . $news[$row][1] . "</p>";
          echo ' </div>';
        }
        ?>
      </div>
    </div>
  </div>
