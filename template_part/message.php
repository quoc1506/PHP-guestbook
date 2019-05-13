<?php
?>
<div class="col-12 col-md-6 col-lg-4 col-item">
    <form action="/action_page.php" method="post" id="updateMessage-<?php echo $message['id'] ?>">
        <input hidden name="action" value="updateMessage">
        <input hidden name="id" value="<?php echo $message['id'] ?>">
        <input hidden name="name" value="<?php echo $message['name'] ?>">
        <div id="message-<?php echo $message['id'] ?>" class="form-group">
            <textarea style="display: none;width: 100%" name="message"><?php echo $message['message'] ?></textarea>
            <h5>
                <?php echo $message['message'] ?>
            </h5>
        </div>
    </form>

    <div class="span-name">
        <h5>
            <?php echo $message['name'] ?>
        </h5>
    </div>
    <div class="span-time">
        <span class="float-left">
            <?php echo (new DateTime($message['created_at']))->format('jS M, Y \a\t h:ia') ?>
            </span>
        <?php
        if ($isAdmin) {
            ?>
            <div class="float-right item-margin">
                <button type="button" class="btn-circle" id="edit-<?php echo $message['id'] ?>"
                        onclick="editMessage(<?php echo $message['id'] ?>);">
                    <i class="fas fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn-circle" id="cancel-<?php echo $message['id'] ?>"
                        style="display: none;"
                        onclick="cancelMessage(<?php echo $message['id'] ?>);">
                    <i class="fas fa-ban"></i>
                </button>
                <button type="button" class="btn-circle" id="save-<?php echo $message['id'] ?>"
                        style="display: none;"
                        onclick="updateMessage(this, <?php echo $message['id'] ?>)">
                    <i class="fas fa-save"></i>
                </button>

                <form action="/action_page.php" method="post" class="float-right">
                    <input hidden name="action" value="deleteMessage">
                    <input hidden name="id" value="<?php echo $message['id'] ?>">
                    <button type="button" class="btn-circle" onclick="deleteMessage(this)">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </div>
            <?php
        }
        ?>
    </div>
</div>
