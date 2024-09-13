<?php if (isset($_SESSION['notification']['message'])) : ?>
      <div class="alert alert-<?= $_SESSION['notification']['type'] ?> alert-dismissible" role="alert">
          <!-- This is a primary dismissible alert — check it out! -->
          <h5><?= $_SESSION['notification']['message'] ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php $_SESSION['notification'] = [] ?>
  <?php endif ?>