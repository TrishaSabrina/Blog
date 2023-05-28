<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'editimg') {

        $id = $_GET['id'];

    }

    if (isset($_POST['change_image_btn'])) {

        $msg = $obj->edit_image($_POST);
    }
}


?>



<div class="shadow m-5 p-5">

    <form action="" method="post" class="form" enctype="multipart/form-data">
        <?php if (isset($msg)) {
            echo $msg;
        } ?>
        <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label class="small mb-1" for="change_image">Change Thumbnail</label><br>
            <input name="change_image" class="py-4" id="change_image" type="file" />
        </div>

        <input type="submit" value="Change Thumbnail" name="change_image_btn" class="btn btn-info">
    </form>
</div>