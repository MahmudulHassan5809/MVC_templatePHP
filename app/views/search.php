<style type="text/css">
.searchoption{ border-bottom: 2px solid #3399FF;margin-bottom: 15px;padding-bottom: 10px;overflow: hidden; }	
.menu{float: left;margin-top: 10px;font-size: 18px;}
.menu a{text-decoration: none;background: #f2f2f2;border:1px solid #999; color: #666;padding: 5px 10px;}
.search{float:right;}
.catsearch{border:1px solid #ddd; font-size: 16px;margin-bottom: 5px;padding: 5px;width: 228px;cursor: pointer;}
.submitbtn{cursor: pointer;font-size: 18px;padding: 3px 10px;}
</style>





<div class="searchoption">
	<div class="menu">
		 <a href="<?php echo BASE_URL; ?>">Home</a>
	</div>
    <div class="search">
    	<form action="<?php echo BASE_URL;?>/Index/search" method="post">
    		<input type="text" name="keyword" placeholder="Search Here..">
    		<select class="catsearch" name="cat">
    			<option value="">Select One</option>

                <?php 
                    foreach ($cat as $key => $value) {
                         
                       

                ?>
    			<option value="<?php echo $value['cId']; ?>"><?php echo $value['cName']; ?></option>
    			<?php  } ?>
    		</select>
    		<button class="submitbtn" type="submit">Search</button>
    	</form>
    </div>
</div>