<?php
		if($conn == false){
            die("Baza danych niedostępna" .mysqli_connect_error());
        }
		else				
			$EtuiProducent = trim(mysqli_real_escape_string($conn, $_REQUEST['Producent']));
			$NazwaEtui = trim(mysqli_real_escape_string($conn, $_REQUEST['NazwaEtui']));
			$Atrybuty = trim(mysqli_real_escape_string($conn, $_REQUEST['Atrybuty']));
			$Szklo_CH = mysqli_real_escape_string($conn, $_REQUEST['china']);
			$Szklo_3MK = mysqli_real_escape_string($conn, $_REQUEST['3mk']);
			$Szklo_SPP = mysqli_real_escape_string($conn, $_REQUEST['screenpro']);
			$Uwagi = trim(mysqli_real_escape_string($conn, $_REQUEST['Uwagi']));

			$UserID = 1;
			
			$NazwaEtui = ucwords(mb_strtolower($NazwaEtui,'UTF-8'));
			$Atrybuty = mb_strtoupper($Atrybuty,'UTF-8');

			if ($Szklo_CH == "on" ){$Szklo_CH = "Tak";}else $Szklo_CH = "Nie";
			if ($Szklo_3MK == "on"){$Szklo_3MK = "Tak";}else $Szklo_3MK = "Nie";
			if ($Szklo_SPP == "on"){$Szklo_SPP = "Tak";}else $Szklo_SPP = "Nie";


			$sql = "INSERT INTO etui (EtuiProducent,EtuiNazwa,EtuiAtrybut,EtuiSzklo_CH,EtuiSzklo_3MK,EtuiSzklo_SPP,UserID,Uwagi) VALUES ('$EtuiProducent', '$NazwaEtui', '$Atrybuty','$Szklo_CH', '$Szklo_3MK', '$Szklo_SPP', '$UserID', '$Uwagi')";

			if(mysqli_query($conn, $sql))
			{	

				header("Location: add_case_form.php");
			} 
			else{
				if(mysqli_errno($conn) == 1062)
				{
					echo "Dane etui już istnieje !";
					
					header("Location: add_case_form.php");
				}
				else
				echo "ERROR: $sql. " . mysqli_error($conn);
			}
			
?>