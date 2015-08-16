<div class="darkcover">
	<div class="window">
		<div class="windowbar">
			Login
		</div>
		<div class="windowcontent">
			<div style="padding:15px">
				<form  method="POST">
					<div class="center">Group ID:</div>
					<input type="text" class="biginput dark blockcenter space" name="groupid" style="width:100px">
					<div class="center space">User ID:</div>
					<input type="text" class="biginput dark space" name="userid">
					<div class="center space">Password: </div>
					<input type="password" class="biginput dark space" name="password">
					<input type="submit" value="Log In" class="button gray bigrounded blockcenter space" name="submit" style="margin-top:15px">
				</form>
				<?php 
					if(isset($_POST['submit'])) {
						if($_POST['groupid'] == "0068" && $_POST['userid'] == "mother_mumbai" && $_POST['password'] == "mumbai") {
							$_SESSION['username'] = "mother_mumbai";
							header("location:index.php");
						}
						else echo "<div style='color:#ff0000'>Bad login info.</div>";
					}
				?>
			</div>
		</div>
	</div>
</div>