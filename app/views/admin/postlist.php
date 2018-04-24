<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>

<h2>Post List...</h2>
<?php
 if (!empty($_GET['msg'])) {
 	  $msg=unserialize(urldecode($_GET['msg']));
 	  foreach ($msg as $key => $value) {
 	  	 echo $value;
 	  }
 }

 ?>
<table class="display" id="myTable">
	<thead>
	<tr>
		<th width="15%">Serial No</th>
		<th width="20%">Title</th>
		<th width="30%">Content</th>
		<th width="20%">Category</th>
		<th width="15%">Action</th>
	</tr>
	</thead>
	<?php 
	$i=0;
     foreach ($allpost as $key => $value) {
      $i++;
	?>
	<tbody>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $value['pTitle']; ?></td>
		<td><?php 
		
		    $text=$value['content'];
              if (strlen($text)>40) {
              	 $text=substr($text, 0,40);
              	 echo $text; 

              }


		?></td>
		<td>
			
			<?php 
			foreach ($cat as $key => $catlist) {
				if ($catlist['cId']==$value['cat']) {
					echo $catlist['cName']; 
				}
			}
			
			?>
				
		</td>
		<td>
			<a href="<?php echo BASE_URL ;?>/Admin/editPost/<?php echo $value['pId'];  ?>">Edit</a>--
             <a href="<?php echo BASE_URL ;?>/Admin/delPost/<?php echo $value['pId'];  ?>">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>
</tbody>
<script type="text/javascript">
	$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>