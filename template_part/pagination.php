<?php
?>
<nav aria-label="Page navigation example">
    <ul class="pagination">
      <?php
      if ($page > 1) {
        ?>
          <li class="page-item">
              <a class="page-link" href="/?page=<?php echo $page - 1 ?>" aria-label="Previous">
                  <span aria-hidden="true">&lt;</span>
                  <span class="sr-only">Previous</span>
              </a>
          </li>
          <li class="page-item"><a class="page-link"
                                          href="/?page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a></li>
        <?php
      }
      ?>
      <?php
      if (count($messages['data'])) {
        ?>
          <li class="page-item active"><a class="page-link" href="/?page=<?php echo $page ?>"><?php echo $page ?></a></li>
        <?php
      }
      ?>
      <?php
      if ($page < $total) {
        ?>
          <li class="page-item"><a class="page-link" href="/?page=<?php echo $page + 1 ?>"><?php echo $page + 1 ?></a>
          </li>
          <li class="page-item">
              <a class="page-link" href="/?page=<?php echo $page + 1 ?>" aria-label="Next">
                  <span aria-hidden="true">&gt;</span>
                  <span class="sr-only">Next</span>
              </a>
          </li>

        <?php
      }
      ?>
    </ul>
</nav>
