<?php
require('includes/config.php');	
	
	if(!empty($_POST))
	{
		$msg=array();
		
		if(empty($_POST['bname']) || empty($_POST['bemail']))
		{
			$msg[]="Please full fill all requirement";
		}
		
				
			
		if(is_numeric($_POST['bemail']))	//See this validation for @,21212 Later
		{
			$msg[]="Name must be in appropriate Format...";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			$bname=$_POST['bname'];
			$bemail=$_POST['bemail'];
			$bcategory=$_POST['bcategory'];
			$bedition=$_POST['bedition'];
			$bdescription=$_POST['bdescription'];
			$bisbnl=$_POST['bisbnl'];
			$bpublisher=$_POST['bpublisher'];
			$bauthor=$_POST['bauthor'];
			$bprice=$_POST['bprice'];
			$bpage=$_POST['bpage'];
			$bseller=$_POST['bseller'];
			$query="insert into book(b_nm,b_subcat,b_desc,b_publisher,b_edition,b_isbn,b_page,b_price,b_seller,b_semail)
			values('$bname','$bcategory','$bdescription','$bpublisher','$bedition','$bisbnl','$bpage','$bprice','$bseller','$bemail')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			
			header("location:upload.php");
		}
	}
	else
	{
		header("location:index.php");
	}
?>