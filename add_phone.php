<?php				
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
			
			$NazwaModelu = trim(ucwords($NazwaModelu));
			$Cale = str_replace("%.%",",",$Cale);

			if ($Szklo_CH == "on" ){$Szklo_CH = "Tak";}else $Szklo_CH = "Nie";
			if ($Szklo_3MK == "on"){$Szklo_3MK = "Tak";}else $Szklo_3MK = "Nie";
			if ($Szklo_SPP == "on"){$Szklo_SPP = "Tak";}else $Szklo_SPP = "Nie";

			switch ($ProducentID){
				case "Apple": 
					$ProducentID = 1; 
					break;
				case "Asus": 
					$ProducentID = 2;
					break; 
				case "Blackview": 
					$ProducentID = 3; 
					break;
				case "Google": 
					$ProducentID = 4; 
					break;
				case "HTC": 
					$ProducentID = 5; 
					break;
				case "Huawei": 
					$ProducentID = 6; 
					break;
				case "LG": 
					$ProducentID = 7; 
					break;
				case "Lenovo": 
					$ProducentID = 8; 
					break;
				case "Meizu": 
					$ProducentID = 9;
					break;
				case "Nokia": 
					$ProducentID = 10;
					break;
				case "OnePlus": 
					$ProducentID = 11;
					break;
				case "Oppo": 
					$ProducentID = 12;
					break;
				case "Realme": 
					$ProducentID = 13;
					break;
				case "Samsung": 
					$ProducentID = 14;
					break;
				case "Sony": 
					$ProducentID = 15;
					break;
				case "Vivo": 
					$ProducentID = 16;
					break;
				case "Xiaomi": 
					$ProducentID = 17;
					break;
				case "ZTE": 
					$ProducentID = 18;
					break;
				}
				
			$sql = "INSERT INTO modele (ProducentID,NazwaModelu,InnaNazwa,Cale,GsmArenaUrl,Szklo_CH,Szklo_3MK,Szklo_SPP,UserID,Uwagi) VALUES ('$ProducentID', '$NazwaModelu', '$InnaNazwa', '$Cale', '$GsmArenaUrl', '$Szklo_CH', '$Szklo_3MK', '$Szklo_SPP', '$UserID','$Uwagi')";

			if(mysqli_query($conn, $sql))
			{	
				header("Location: add_phone_form.php");
			} 
			else{
				if(mysqli_errno($conn) == 1062)
				{
					echo "Dany model już istnieje !";
					
					header("Location: add_phone_form.php");
				}
				else
				echo "ERROR: $sql. " . mysqli_error($conn);
			}

?>