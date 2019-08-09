
						<?php
						require('config.php');
							if(isset($_SESSION['status']))
							{
								echo '<h2>Hello :  '.$_SESSION['unm'].'</h2>';
							}
							else
							{
								echo '<form action="process_login.php" method="POST">
										<h2>LogIn</h2>
											<b>Username:</b>
											<br><input type="text" name="usernm" placeholder="Username"><br>
											<br>
											
											
											<b>Password:</b>
											<br><input type="password" name="pwd" placeholder="Password">
											<br>&nbsp;</br>
											<input type="submit" id="x" value="Login" <a href = "../index.php" />
											<br>&nbsp;</br>
											
											
											<p>  Not a user?<a href="../register.php"> Register Here!  </a> </p>
											
										</form>';
										
							}
						?>
			