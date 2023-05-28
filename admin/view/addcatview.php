
<?php

if(isset($_POST['btn'])){
    $return_msg=$obj->add_category($_POST);
}

?>


<h2>Add Post Category </h2>


<?php if(isset($return_msg)){
echo $return_msg;

}  
?>
<form action="" method="POST">



<div class="form-group">
<label class="small mb-1" for="cat_name">Category Name</label>
<input name="cat_name" class="form-control py-4" id="cat_name" type="text"/>
 </div>

 <div class="form-group">
<label class="small mb-1" for="cat_des">Description</label>
<input name="cat_des" class="form-control py-4" id="cat_des" type="text"/>
 </div>

 <input type="submit" name="btn" value="Add Category" class="form-control btn btn-block  btn-success">

</form>