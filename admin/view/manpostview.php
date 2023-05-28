<?php

$post= $obj->display_post();

?>


<h2>Manage Posts</h2>


<div class="table-responsive">

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Thumb</th>
                <th>Author</th>
                <th>Date</th> 
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

        </thead>
        <tbody>
        <?php while($pos=mysqli_fetch_assoc($post)){ ?>
        <tr>
          <td><?php echo $pos['post_id']; ?></td>
          <td><?php echo $pos['post_title']; ?></td>
          <td><?php echo $pos['post_content']; ?></td>
          <td>
            <img  height= "50px" src="../upload/<?php echo $pos['post_image']; ?>">
            <a href="edit_img.php?status=editimg&&id=<?php echo $pos['post_id']; ?>">Change</a>
          </td>
          <td><?php echo $pos['post_author']; ?></td>
          <td><?php echo $pos['post_date']; ?></td>
          <td><?php echo $pos['cat_name']; ?></td>
          <td><?php echo $pos['post_status']; ?></td>
          <td><a href="edit_post.php?status=editpost&&id=<?php echo $pos['post_id']; ?>" class="btn btn-primary">Edit</a>
        </td>
        <td>
        <a href="#" class="btn btn-danger">Delete</a>
    </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>