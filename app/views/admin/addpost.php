<script src="http://cdn.ckeditor.com/4.7.3/basic/ckeditor.js"></script>

<style type="text/css">
	.cat{
		width: 300px;
	}
</style>
   	   <h2>Add New Post....</h2>
     <?php 
         if (isset($postErrors)) {
         	echo "<div style='color:red;font-size:25px;'>";
         	foreach ($postErrors as $key => $value) {
         		switch ($key) {
         			case 'pTitle':
         				foreach ($value as $val) {
         					echo "Title".$val."<br>";
         				}
         				break;
         				case 'content':
         				foreach ($value as $val) {
         					echo "content".$val."<br>";
         				}
         				break;
         				case 'cat':
         				foreach ($value as $val) {
         					echo "Category".$val."<br>";
         				}
         				break;
         				
         			
         			default:
         				# code...
         				break;
         		}
         	}
         	echo "</div>";
         }


     ?>
   

 <form action="<?php echo BASE_URL;?>/Admin/addNewPost" method="POST">
 	<table>
 		<tr>
 			<td>Title</td>
 			<td><input type="text" name="pTitle"></td>
 		</tr>
 			<tr>
 			<td>Content</td>
 			<td>
 				
 			<textarea name="content"></textarea>
		    <script>
			CKEDITOR.replace('content');
		      </script>
 			</td>
 		</tr>
 		<tr>
 			<td>Category</td>
 			<td>
 				<select name="cat" class="cat">
 					<option>Select One</option>
 					<?php
                       foreach ($cat as $key => $value) {
                      
 					 ?>
 					<option value="<?php echo $value['cId'] ;?>"><?php echo $value['cName'] ;?></option>
 					<?php } ?>
 				</select>
 			</td>
 		</tr>
 			<tr>
 			<td></td>
 			<td><input type="submit" value="Add Post" name="submit"></td>
 		</tr>
 	</table>
 </form>







  

