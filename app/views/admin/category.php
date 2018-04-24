<h2>Category List</h2>
<?php
 if (!empty($_GET['msg'])) {
 	  $msg=unserialize(urldecode($_GET['msg']));
 	  foreach ($msg as $key => $value) {
 	  	 echo $value;
 	  }
 }

?>

<table class="tblone">

	 <tr>
	 	<th>Serial NO</th>
	 	<th>Category Name</th>
	 	<th>Category Title</th>
	 	<th>Action</th>
	 </tr>
	 <?php 
	  $i=0;
   foreach ($cat as $key => $value) {
     	 $i++;
      

?>
	 <tr>
	 	<td><?php echo $i; ?></td>
	 	<td><?php echo $value['cName']; ?></td>
	 	<td><?php echo $value['title']; ?></td>
	 	<td>
	 		 <a href="<?php echo BASE_URL ;?>/Admin/editCat/<?php echo $value['cId'];  ?>">Edit</a>--
             <a href="<?php echo BASE_URL ;?>/Admin/delCat/<?php echo $value['cId'];  ?>">Delete</a>
	 	</td>
	 </tr>
   <?php } ?>
</table>
   