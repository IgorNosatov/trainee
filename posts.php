<?php
require("partials/header.php");
require("data/posts_data.php");
?>
<section class="main_content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
        for ($row = 0; $row < 3; $row++) {
          echo '<div class="post-info">';
          echo " <h4>Post name:" . $posts[$row][0] . "</h4>" . "<p>" . $posts[$row][1] . "</p>";
          echo ' </div>';
        }
        ?>
        <nav aria-label="Page navigation ">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>
<?php
require("partials/footer.php");
?>