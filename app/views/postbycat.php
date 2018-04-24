
<div class="content">
 

 <article class="postcontent">
 <?php
 foreach ($postbycat as $key => $value) {
     # code...
 

 ?>
      <div class="post">

         <div class="title">
               <h2>
                    <?php echo $value['pTitle']; ?>

               </h2>
               <P>Category:<a href="<?php echo BASE_URL; ?>/Index/postbyCat/<?php echo $value['pId'];  ?>"><?php echo $value['cName']; ?></a></P>
           </div>

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





 