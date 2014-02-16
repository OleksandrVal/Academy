<!doctype html>
<html>
	<head>
		<title>About me</title>
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link href='http://fonts.googleapis.com/css?family=Lemon' rel='stylesheet' type='text/css'>
		<script language="javascript">
			 function myFunction()
				{
					alert("The car, that you see on an image, is Chevrolet Chevelle SS 1970");
				};
		</script>
	</head>
	<body>
			<div id="wrap">	
				<div id="first">
					<img  id="image" src="images/image.jpg"/>
				</div>
				<div id="about">
					<span>
						
							<p><?php echo "My name is Oleksandr Val." ?></p>
							<p><?php echo"I live in Chernitsi, Ukraine. I'm studying in Yuriy Fedkovych Chernitsi National University on 4'th year of study." ?></p>
							<p><?php echo "Push the button, to see javascript implementation." ?></p>
					</span>
					<form>
					<input type="button" onClick="myFunction()" value="Push"/>
					</form>
				</div>
			</div>	
	</body>
</html>