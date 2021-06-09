<?php
		include './dbh.php';
        $conn = mysqli_connect(db_server , db_username, db_password, db_name);
        
		if($conn == false){
            die("Baza danych niedostępna" .mysqli_connect_error());
        }
		else				
			$EtuiProducent = mysqli_real_escape_string($conn, $_REQUEST['Producent']);
			$NazwaEtui = mysqli_real_escape_string($conn, $_REQUEST['NazwaEtui']);
			$Atrybuty = mysqli_real_escape_string($conn, $_REQUEST['Atrybuty']);
			$Szklo_CH = mysqli_real_escape_string($conn, $_REQUEST['china']);
			$Szklo_3MK = mysqli_real_escape_string($conn, $_REQUEST['3mk']);
			$Szklo_SPP = mysqli_real_escape_string($conn, $_REQUEST['screenpro']);

			$UserID = 1;
			
			$NazwaEtui = ucwords(mb_strtolower($NazwaEtui,'UTF-8'));
			$Atrybuty = mb_strtoupper($Atrybuty,'UTF-8');

			if ($Szklo_CH == "on" ){$Szklo_CH = "Tak";}else $Szklo_CH = "Nie";
			if ($Szklo_3MK == "on"){$Szklo_3MK = "Tak";}else $Szklo_3MK = "Nie";
			if ($Szklo_SPP == "on"){$Szklo_SPP = "Tak";}else $Szklo_SPP = "Nie";

			$sql = "INSERT INTO etui (EtuiProducent,EtuiNazwa,EtuiAtrybut,EtuiSzklo_CH,EtuiSzklo_3MK,EtuiSzklo_SPP,UserID) VALUES ('$EtuiProducent', '$NazwaEtui', '$Atrybuty','$Szklo_CH', '$Szklo_3MK', '$Szklo_SPP', '$UserID')";

			if(mysqli_query($conn, $sql))
			{	
				header("Location: add_case.html");
			} 
			else{
				if(mysqli_errno($conn) == 1062)
				{
					echo "Dane etui już istnieje !";
					
					header("Location: add_case.html");
				}
				else
				echo "ERROR: $sql. " . mysqli_error($conn);
			}

?>