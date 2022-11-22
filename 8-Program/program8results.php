<html>
	<body>
		<?php
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="test";
		$conn=new mysqli($servername,$username,$password,$dbname);
		if($conn->connect_error){
			die("Connection failed: ".$conn->connect_error);
		}
		$sql="SELECT * FROM book WHERE title='$_POST['title']'";
		$result=$conn->query($sql);
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				echo "<br/>Title: ".$row['title']."<br/>Author".$row['author']."<br/>Publisher: ".$row['publisher'];
			}
		}
		else{
			echo "No books with that name";
		}
		$conn->close();
		?>
		<br/><br/>
		<body>
			<a href="book.html">Back to Home</a>
	</body>
	</html>