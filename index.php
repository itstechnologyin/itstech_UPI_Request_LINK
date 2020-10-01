<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>UPI Request Money | It's Technology</title>
	<link rel="shortcut icon" type="image/ico" href="../images/its.png">
</head>
<style type="text/css">
	body{
		background: #2C3335;
	}
	.card{
		border: 3px solid #DAE0E2;
		border-radius: 20px;
		width: 350px;

	}
	.text-box{
		padding: 10px 20px;
		margin: 10px 0;
		box-sizing: border-box;
	}
	.btn{
		background-color: #4CAF50; 
		border: none;
		color: white;
		padding: 10px 20px;
		text-align: center;
		cursor: pointer;
		font-size: 16px;
	}
	.btn:hover{
		background-color: #019031;
		padding: 12px 22px;
	}
	.card-content{
		padding: 20px;
	}
</style>
<body>

	<center>
		<div class="card">
			<div class="card-content">
				<a href="https://itstechnology.in"><img src="logo.png" height="70"></a>
				<br>
				<h4 style="color: #DAE0E2;">Create UPI Payment Request Link </h4>
				<img src="upi.png" height="100">
				<br>
				<form action="">
					<label style="color: #DAE0E2;">Enter Upi Id:</label><br>
					<input type="email" name="upi" class="text-box" placeholder="Enter UPI Id" required><br>
					<label style="color: #DAE0E2;">Enter Amount (Optional):</label><br>
					<input type="number" name="amt" class="text-box" placeholder="Enter Amount (Optional)"><br>

					<input type="submit" value="Create Link" class="btn">
					<br>
				</form>

				<?php

					if(isset($_GET["upi"])){

						$upi = $_GET["upi"];
						$amt = $_GET["amt"];
						$link = "https://itstechnology.in/upi/pay.php?upi=".$upi."&amt=".$amt;

						echo '<textarea class="text-box" id="upiUrl">'.$link.'</textarea><br>';
						echo '<button onclick="copyUpiUrl()" class="btn" id="btn-copy">Copy Link</button>';
					}

				?>
			</div>
		</div>
	</center>

</body>
<script>
function copyUpiUrl() {
  var copyText = document.getElementById("upiUrl");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  document.getElementById("btn-copy").innerHTML = "Copied";
}
</script>
</html>