<?php
		include './dbh.php';
        $conn = mysqli_connect(db_server , db_username, db_password, db_name);
        
		if($conn == false){
            die("Baza danych niedostępna" .mysqli_connect_error());
        }
		else				
			$ProducentID = mysqli_real_escape_string($conn, $_REQUEST['Producent']);
			$NazwaModelu = mysqli_real_escape_string($conn, $_REQUEST['NazwaModelu']);
			$Cale = mysqli_real_escape_string($conn, $_REQUEST['Cale']);
			$GsmArenaUrl = mysqli_real_escape_string($conn, $_REQUEST['url']);
			$InnaNazwa = mysqli_real_escape_string($conn, $_REQUEST['InnaNazwa']);
			$Szklo_CH = mysqli_real_escape_string($conn, $_REQUEST['china']);
			$Szklo_3MK = mysqli_real_escape_string($conn, $_REQUEST['3mk']);
			$Szklo_SPP = mysqli_real_escape_string($conn, $_REQUEST['screenpro']);
			$Uwagi = mysqli_real_escape_string($conn, $_REQUEST['uwagi']);
			$UserID = 1;
			
			if ($Szklo_CH == "on" ){$Szklo_CH = "Tak";}else $Szklo_CH = "Nie";
			if ($Szklo_3MK == "on"){$Szklo_3MK = "Tak";}else $Szklo_3MK = "Nie";
			if ($Szklo_SPP == "on"){$Szklo_SPP = "Tak";}else $Szklo_SPP = "Nie";
			switch ($ProducentID){
				case "Xiaomi": 
					$ProducentID = 1; 
					break;
				case "Samsung": 
					$ProducentID = 2;
					break; 
				case "OnePlus": 
					$ProducentID = 3; 
					break;
				case "Oppo": 
					$ProducentID = 4; 
					break;
				case "Nokia": 
					$ProducentID = 5; 
					break;
				case "Apple": 
					$ProducentID = 6; 
					break;
				case "Blackview": 
					$ProducentID = 7; 
					break;
				case "Asus": 
					$ProducentID = 8; 
					break;
				case "Vivo": 
					$ProducentID = 9;
					break;
			}
			$sql = "INSERT INTO modele (ProducentID,NazwaModelu,InnaNazwa,Cale,GsmArenaUrl,Szklo_CH,Szklo_3MK,Szklo_SPP,UserID,Uwagi) VALUES ('$ProducentID', '$NazwaModelu', '$InnaNazwa', '$Cale', '$GsmArenaUrl', '$Szklo_CH', '$Szklo_3MK', '$Szklo_SPP', '$UserID','$Uwagi')";

			if(mysqli_query($conn, $sql))
			{	
				header("Location: add_phone.html");
			} 
			else{
				if(mysqli_errno($conn) == 1062)
				{
					echo "Dany model już istnieje !";
					
					header("Location: add_phone.html");
				}
				else
				echo "ERROR: $sql. " . mysqli_error($conn);
			}

?>