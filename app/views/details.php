
<div class="content">


 <article class="postcontent">
     <div class="details">
     <?php
     if (isset($postbyid)) {
    
      foreach ($postbyid as  $value) {
 

     ?>
     	 <div class="title">
     	 	<h2>
     	 		<?php echo $value['pTitle']; ?>

     	 	</h2>
     	 	<P>Category:<a href="<?php echo BASE_URL; ?>/Index/postbyCat/<?php echo $value['cat'];  ?>"><?php echo $value['cName']; ?></a></P>
     	 </div>
     	 <div class="desc">
     	 	 <p>
     	 	 	<?php echo $value['content']; ?>
     	 	 </p>
     	 </div>
     </div>
 	 <?php }}else {} ?>
 </article>





 