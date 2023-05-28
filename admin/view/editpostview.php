<?php  

if(isset($_GET['status'])){
    if($_GET['status']=='editpost'){

        $id=$_GET['id'];
       $posda= $obj->get_post_info($id);
    }

    if(isset($_POST['update_btn'])){
   
      $msg= $obj->update_post($_POST);
    }
}




?>




<div class="shadow m-5 p-5">

    <form action="" method="post" class="form">
      <?php if(isset($msg)){
        echo $msg;
      } ?>
        <input type="hidden" name="editp_id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label class="mb-1" for="edit_post">Edit Post</label><br>
            <input value="<?php echo $posda['post_title']; ?>"  class="form-control" name="edit_post" class="py-4" id="edit_post" />
        </div>


        <div class="form-group">
            <label class="mb-1" for="edit_post">Edit Content</label><br>
          <textarea class="form-control" name="edit_cont" id="edit_cont" cols="30" rows="10">
          <?php echo $posda['post_content']; ?>
          </textarea>
        </div>

        <input type="submit" value="Update Post" name="update_btn" class="btn btn-info">
    </form>
</div>