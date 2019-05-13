<?php
?>
<div class="col col-item">
    <div>
        <h5>
          <?php echo $message['message'] ?>
        </h5>
    </div>
    <div class="span-name">
        <h5>
      <?php echo $message['name'] ?>
            </h5>
    </div>
    <div class="span-time">
        <span class="float-left">
            <?php echo $message['created_at'] ?>
            </span>
        <div class="float-right item-margin">
            <button class="btn-circle">
                <i class="fas fa-pencil-alt"></i>
            </button>
            <button class="btn-circle">
                <i class="fas fa-trash-alt"></i>
            </button>
        </div>
    </div>
</div>
