<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
  <title>Sign Up Form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style2.css">

		
</head>

<body>
			
			<!-- start page -->

				<div id="page">
						<!-- start content -->
				
							<div id="content">
					
								<div class="post">
									<h1 class="title">Welcome to Registration!</h1>
						
									<div class="entry">
									<br><br>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="blue">You are successfully Registered..</font>';
												echo '<br><br>';
											}
										
										?>
										
     

									
										
											<div class="container">
											<form action="process_register.php" method="POST">
												<div class="row">
													<h4>Account</h4>
												
													
													<div class="input-group input-group-icon">
													Full Name :<br>
													<input type='text' size="30" name='fnm'  />
												</div>
												
												
												E-mail Address:</br>
													<input type='text' name='mail' size="30" >

												User Name :</br>
													 <input type='text' size="30" maxlength="30" name='unm' >
													 

												
												&nbsp;
												
												
													<b>Password :</b>&nbsp;&nbsp;
													<input type='password' name='pwd' size="30" >
									
												
												&nbsp;
												
											

													<b>Confirm Password:</b>&nbsp;&nbsp;
													<input type='password' name='cpwd' size="30" >
													
												
												
												
												
													<b>Gender:</b>
													<input type="radio"  value="Male" name="gender" id='m' ><label> Male</label>
														<input type="radio" value="Female" name="gender" id='f'><label>Female</label>
														
												
												
												&nbsp;
																				
												
												
												&nbsp;
												
												
													<b>Contact No.:</b>&nbsp;&nbsp;
													<input type='text' name='contact' size="30" >
													
												
												
												&nbsp;
												
												
											
													<b>City:</b>&nbsp;&nbsp;
												
													<select style="width: 195px;" name="city">
														
															<option>Ahmedabad
															<option>Baroda
															<option>Jamnagar
															<option>Rajkot
															<option>Porbandar
															<option>Anand
															<option>Surat
															<option>Surendranagar
															<option>Jamnagar
															<option>Junagadh
															<option>Amreli
															<option>Bhavnagar
															<option>Mehsana
															
														
													</select>
												
											
											    &nbsp;
												
												
												
												<tr>
													<td colspan='2' align='center'>
														<input type='submit' value="  OK  ">
													</td>
												</tr>
											</div>
											</form>
										</div>
										</table>
									</div>
									
								</div>
					
					
							</div>
				
						<!-- end content -->
						
						
			  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>

</body>
</html>
