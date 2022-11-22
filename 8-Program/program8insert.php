<html>
	<body>
		<?php
			$servername="Localhost";
			$username="root";
			$password="";
			$dbname="test3";
			$conn=new mysqli($servername,$username,$dbname);
			if($conn->connect_error){
				die("Connection failed: ".$con->connect_error);
			}
			$sql="INSERT INTO book(title,author,publisher)
				values('$_POST[title]','$_POST[author]','$_POST[publisher]')";
			if($conn->query($sql)==TRUE)
			{
				echo "New Record created successfully";
			}
			else{
				echo "Error: ".$sql."<br/>".$conn->error;
			}
			$conn->close();
			?>
			<form action="bookresults.php" method="post">
				Title:<input type="text" name="title"/>
				<input type="submit" value="submit"/>
			</form>
			</body>
			</html>