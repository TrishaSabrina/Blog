
<?php

if(isset($_GET['status'])){
    if($_GET['status']=='edit'){
       $id= $_GET['id'];
   
       $rd=$obj->display_data_by_id($id);
    }
   
    if(isset($_POST['edit_btn'])){
   
     $msg=$obj->update_data($_POST);
    }
   
   
   }
?>



<h2>Edit Post Category </h2>


<?php if(isset($msg)){echo $msg;} ?>
<form action="" method="POST">



<div class="form-group">
<label class="small mb-1" for="cat_namey">Category Name</label>
<input name="cat_namey" class="form-control py-4" id="cat_namey" type="text" value="<?php echo $rd['cat_name']   ?>"/>
 </div>

 <div class="form-group">
<label class="small mb-1" for="cat_desy">Description</label>
<input name="cat_desy" class="form-control py-4" id="cat_desy" type="text"  value="<?php echo $rd['cat_des']   ?>"/>
 </div>

 <input type="hidden" name="id" value="<?php echo $rd['cat_id'] ;  ?>">

 <input type="submit" name="edit_btn" value="Update Category" class="form-control btn btn-block  btn-success">

</form>