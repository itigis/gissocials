
	<?php
		$content     = $_POST['content'];
		$userId      = 7;
		$createdTime = time(); 
		$createdTimeStamp = date("Y-m-d H:i:s", $createdTime);
		// DB connection
		$dbconn  = pg_connect('host=localhost port=5432 dbname=SocialNetwork2 user=postgres password=postgres');
		
		//Insert Into DB
		$insertStatement = "insert into post (content, userid, createddate) values ('$content', $userId, '$createdTimeStamp')";
		pg_query($dbconn,$insertStatement);
		pg_close($dbconn);
		header("Location: blank.php");
		
	?>
