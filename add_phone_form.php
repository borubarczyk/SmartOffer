<?php
    include_once './header.php';
?>
	<section>
	<div class="wrapper-input">
			<form class="add-form" action="add_phone.php" method="post">
				<div>
					<p>Dodaj telefon do bazy</p>
				</div>
				<div class="row-space">
					<div id="col-prod">
						<div class="input-group" >
							<label class="label">Producent</label>
							<select class="selection" name="Producent" autofocusss tabindex="1" required>
							
							<?php
							$file_path = './data/producenci_telefony.txt';
							$file_array = file($file_path);
							foreach ($file_array as $producent){
								echo '<option value="'.trim($producent).'" > '.$producent.' </option>';
							}
							?>

							</select>
							<div class="select-dropdown"></div>
						</div>
					</div>
					<div id="col-nazwa">
						<div class="input-group">
							<label class="label" title="Wpisz nazwę modelu od 3 znaków">Nazwa modelu</label>
							<input class="input-style" type="text" autocomplete="off" name="NazwaModelu" minlength="3" spellcheck="false" tabindex="2" required> </div>
					</div>
				</div>
				<div class="row-space">
					<div id="col-cale">
						<div class="input-group">
							<label class="label">Cale</label>
							<input class="input-style" type="number" autocomplete="off" name="Cale" value="6.67" minlength="3" min="0" max="30" step="0.01" spellcheck="false" tabindex="3" required> </div>
					</div>
					<div id="col-url">
						<div class="input-group">
							<label class="label">GSM Arena URL</label>
							<input class="input-style" type="url" name="url" autocomplete="off" spellcheck="false" pattern="https://.*" tabindex="4"> </div>
					</div>
					<div id="col-inna-nazwa">
						<div class="input-group">
							<label class="label">Inna nazwa</label>
							<input class="input-style" type="text" name="InnaNazwa" autocomplete="off" spellcheck="false"> </div>
					</div>
				</div>
				<div class="row-space">
					<div id="col-uwagi">
						<div class="input-group">
							<label class="label">Uwagi</label>
							<textarea class="input-style" type="text" autocomplete="off" name="uwagi" spellcheck="false" maxlength="512" tabindex="5"></textarea> </div>
					</div>
				</div>
				<div class="row-space">
					<div class="col-3">
						<div class="input-group">
							<label class="label">Szkło</label>
							<div class="checkbox-cont-wrapper">
								<label class="checkbox-cont">Tanie
									<input class="checkbox" type="checkbox" name="china"> <span class="box">&#10007</span> </label>
								<label class="checkbox-cont">3MK
									<input class="checkbox" type="checkbox" name="3mk"> <span class="box">&#10007</span> </label>
								<label class="checkbox-cont">ScreenPro+
									<input class="checkbox" type="checkbox" name="screenpro"> <span class="box">&#10007</span> </label>
							</div>
						</div>
					</div>
					<div class="add-form-button-wrapper">
						<button class="add-form-button" name="submit" type="submit"  tabindex="6">DODAJ</button>
					</div>
				</div>
			</form>
		</div>
	</body>
						</section>

<?php
	include_once './footer.php';
?>