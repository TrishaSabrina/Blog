<?php
$data=$obj->display_category();
if(isset($_GET['status'])){
    if($_GET['status']=='delete'){

        $del=$_GET['id'];
       $msg= $obj->delete_category($del);
    }
}
?>



<h2>Manage Category</h2>
<?php if(isset($msg)){

    echo $msg;
}    ?>
<table class="table">
<thead>

<tr>
    <th>ID</th>
    <th>Category Name</th>
    <th>Description</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php while($datas=mysqli_fetch_assoc($data)) {?>
<tr>
    <td><?php echo $datas['cat_id'] ; ?></td>
    <td><?php echo $datas['cat_name'] ;  ?></td>
    <td><?php echo $datas['cat_des'] ;  ?></td>
    <td>
        <a href="edit.php?status=edit&&id=<?php echo $datas['cat_id'] ; ?>" class="btn btn-primary">Edit</a>
        <a href="?status=delete&&id=<?php echo $datas['cat_id'] ; ?>" class="btn btn-danger">Delete</a>
    </td>
</tr>
<?php } ?>
</tbody>


</table>