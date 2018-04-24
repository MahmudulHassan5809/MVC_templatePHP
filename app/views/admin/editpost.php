<script src="http://cdn.ckeditor.com/4.7.3/basic/ckeditor.js"></script>

<style type="text/css">
	.cat{
		width: 300px;
	}
</style>
   	   <h2>Edit Post....</h2>
         <?php
 if (!empty($_GET['msg'])) {
     $msg=unserialize(urldecode($_GET['msg']));
     foreach ($msg as $key => $value) {
       echo $value;
     }
 }

?>
 
   
<?php 
   foreach ($postbyid as $key => $value) {
  
?>
 <form action="<?php echo BASE_URL;?>/Admin/updatepost/<?php echo $value['pId'] ; ?>" method="POST">
 	<table>
 		<tr>
 			<td>Title</td>
 			<td><input type="text" name="pTitle" value="<?php echo $value['pTitle'] ; ?>"></td>
 		</tr>
 			<tr>
 			<td>Content</td>
 			<td>
 				
 			<textarea name="content">
          <?php echo $value['content'] ; ?>     
         </textarea>
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
                       foreach ($cat as $key => $category) {
                      
 					 ?>
 					<option
                <?php 
                  if ($value['cat']==$category['cId']) {?>
                    selected="selected" 
                 <?php  }
                 ?> 
               value="<?php echo $category['cId'] ;?>"><?php echo $category['cName'] ;?>
                  

               </option>
 					<?php } ?>
 				</select>
 			</td>
 		</tr>
 			<tr>
 			<td></td>
 			<td><input type="submit" value="Update Post" name="submit"></td>
 		</tr>
 	</table>
 </form>
 <?php } ?>







  

