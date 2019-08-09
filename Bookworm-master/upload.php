<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta charset="UTF-8">
  <title>Book Worm</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style2.css">
</head>
</head>

<body>
			
			
			<!-- start page -->

					<div id="page_upload">
						<!-- start content -->
							<div id="content">
								<div class="post">
									
									
									<div class="entry" >
										<div class="container">

									
										<form action="process_upload.php" method="POST">

										<div class="row">
    									  <h4>Sell Your Book</h4>

    									  <div class="input-group input-group-icon">	

    									  Full Name<br>
												<input type='text' name='bseller' size=35>
												
												
      											</div>		

      											E-mail ID:<br>
												<input type='text' name='bemail' size=35>
												
      											</div>								

											<br>Book Name :<br>
												<input type='text' name='bname' size=35>
												<br><br><br>

												<div class="input-group input-group-icon">
												
												

												Category ID:<br>
												<input type='text' name='bcategory' size=35>
												<br><br><br>
												
												

												ISBN ID:<br>
												<input type='text' name='bisbnl' size=35>
												<br><br><br>

												Publisher:<br>
												<input type='text' name='bpublisher' size=35>
												<br><br><br>

												Edition:<br>
												<input type='text' name='bedition' size=35>
												<br><br><br>

												Author ID:<br>
												<input type='text' name='bauthor' size=35>
												<br><br><br>

												Price:<br>
												<input type='text' name='bprice' size=35>
												<br><br><br>


												Total Pages:<br>
												<input type='text' name='bpage' size=35>
												<br><br><br>

												Description:<br>
												<textarea cols="57" rows="10" name='bdescription' ></textarea>
												<br><br><br>

												
												<div class="btn btn-custom btn-lg"">
												<input  type='submit' name='btn' value='   OK   '  >
											</div>


										<!-- eto do(image add) -->		
										</form>
									</div>
									
									</div>
									
								</div>
								
							</div>
						<!-- end content -->
						
						
						
			<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>
</body>
</html>
