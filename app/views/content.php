
<div class="content">
 

 <article class="postcontent">
 <?php
 foreach ($allpost as $key => $value) {
 	# code...
 

 ?>
 	 <div class="post">
 	 	<h2><a href="<?php echo BASE_URL;?>/Index/postDetails/<?php  echo $value['pId']; ?>"><?php echo $value['pTitle'];  ?></a></h2>
 	 	<P>
 	 		<?php 
              $text=$value['content'];
              if (strlen($text)>200) {
              	 $text=substr($text, 0,200);
              	 echo $text; 

              }

 	 		



 	 		 ?>
 	 		<div class="readmore">
 	 			<a href="<?php echo BASE_URL;?>/Index/postDetails/<?php  echo $value['pId']; ?>">Read More</a>
 	 		</div>
 	 	</P>
 	 </div>
 	 <?php } ?>
 	 
 </article>





 