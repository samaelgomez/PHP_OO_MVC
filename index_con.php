<?php
    if ((isset($_GET['page'])) && ($_GET['page']==="controller_user") ){
		include("view/inc/top_page_user.php");
	}else{
		include("view/inc/top_page.php");
	}
	session_start();
?>
<div id="wrapper">		
    <div id="header">    	
    	<?php
    	    include("view/inc/header.php");
    	?>        
    </div>
    <div id="">
    	<?php 
		    include("view/inc/pages.php");
		?>
        <br style="clear:both;" />
    </div>
</div>
<?php
    include("view/inc/bottom_page.php");
?>