<?php   
       
		$dbhost ="localhost";
	    $dbuser="id3242175_guha_5599";
	    $dbpass="guha0804";
	    $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, "id3242175_guha");
	    $q=mysqli_query($conn,"select * from books");
	    $data = array();
		while($row = mysqli_fetch_assoc($q))
		{
			$data[] = $row;
		}
		
		$x = json_encode($data);
	  
	    echo $x;
?>