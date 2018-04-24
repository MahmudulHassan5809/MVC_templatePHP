
   	   <h2>Update  Category....</h2>

 <?php 
   foreach ($catbyid as $key => $value) {
  

 ?>   
 
 <form action="<?php echo BASE_URL;?>/Admin/updateCat/<?php  echo $value['cId'] ;?>" method="POST">
 	<table>
 		<tr>
 			<td>Category Name</td>
 			<td><input type="text" name="cName" value="<?php echo $value['cName'] ; ?>"></td>
 		</tr>
 			<tr>
 			<td>Category Title</td>
 			<td><input type="text"  value="<?php echo $value['title'] ; ?>" name="title"></td>
 		</tr>
 			<tr>
 			<td></td>
 			<td><input type="submit" value="Update" name="submit"></td>
 		</tr>
 	</table>
 </form>
<?php } ?>






  

