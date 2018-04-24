<aside class="sidebar">
	<div class="widget">
		
			<h2>Category</h2>
            <?php
              
    
          foreach ($cat as  $value) {
             ?>
			<ul>
				<li><a href="<?php echo BASE_URL; ?>/Index/postbyCat/<?php echo $value['cId'];  ?>"><?php echo $value['cName'];  ?></a></li>
				
			</ul>
	        <?php } ?>

	</div>

		<div class="widget">
		
			<h2>Latest Post</h2>
            <?php foreach ($latestpost as  $value) { ?>
			<ul>
				<li><a href="<?php echo BASE_URL;?>/Index/postDetails/<?php  echo $value['pId']; ?>"><?php echo $value['pTitle'];  ?></a></li>
				
			</ul>
	        <?php } ?>
	</div>


</aside>