<?php
    include_once './header.php';
?>

<section>
		<div class="wrapper-input">
			<form class="add-form" action="add_case.php" method="post">
				<div>
					<p>Dodaj etui do bazy</p>
				</div>
				<div class="row-space">
					<div id="col-prod-etui">
					<div class="input-group">
						<label class="label">Producent</label>
						<select class="selection" name="Producent" required>
							
							<?php
							$file_path = './seria_etui.txt';
							$file_array = file($file_path);
							foreach ($file_array as $producent){
								echo '<option ' ;
								if ($producent == "YouTab") 
								{ 
									echo 'selected ';
								} 
								echo 'value="'.trim($producent).'" > '.$producent.' </option>';
							}
							?>
							
						</select>
					</div>
				</div>
					<div id="col-nazwa-etui">
						<div class="input-group">
							<label class="label">Nazwa Etui</label>
							<input class="input-style" type="text" autocomplete="off" name="NazwaEtui" minlength="3" spellcheck="false" tabindex="1" autofocus required> 
						</div>
					</div>
				</div>
				<div class="row-space">
					<div id="col-atrybuty">
						<div class="input-group">
							<label class="label">Sprzedawana Nazwa</label>
							<input class="input-style" type="text" autocomplete="off" name="Atrybuty" minlength="3" spellcheck="false"  placeholder="Domyślnie: wartość pola 'Nazwa Etui'" required> </div>
					</div>
				</div>
				<div class="row-space">
					<div id="col-atrybuty">
						<div class="input-group">
							<label class="label">Atrybuty</label>
							<input class="input-style" type="text" autocomplete="off" name="Atrybuty" minlength="3" spellcheck="false" tabindex="2" placeholder="Po każdym atrybucie użyj średnika" required> </div>
					</div>
				</div>
				<div class="row-space">
					<div id="col-uwagi">
						<div class="input-group">
							<label class="label">Uwagi</label>
							<textarea class="input-style" type="text" autocomplete="off" name="Uwagi" spellcheck="false" maxlength="512" tabindex="3" ></textarea> </div>
					</div>
				</div>
				<div class="row-space">
					<div class="col-3">
						<div class="input-group">
							<label class="label">Ochrona Ekranu</label>
							<div class="checkbox-cont-wrapper">
								<label class="checkbox-cont">Szkło
									<input class="checkbox" type="checkbox" checked="checked" name="china"> <span class="box">&#10007</span> </label>
								<label class="checkbox-cont">Folia
									<input class="checkbox" type="checkbox" checked="checked" name="china"> <span class="box">&#10007</span> </label>
							</div>
						</div>
					</div>
					<div class="add-form-button-wrapper">
						<button class="add-form-button" name="submit" tabindex="4" type="submit">DODAJ</button>
					</div>
				</div>
			</form>
		</div>
	</section>

<?php
include_once './footer.php';
?>
