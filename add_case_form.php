<?php
    include './dbh.php';
    include_once './header.php';
?>
<section class="main">
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
							<option>YouTab</option>
							<option>Dux Ducis</option>
							<option>Spigen</option>
							<option>Tech-Protect</option>
							<option>UAG</option>
							<option>Nillkin</option>
							<option>Ringke</option>
							<option>ESR</option>
							<option>Supcase</option>
						</select>
						<div class="select-dropdown"></div>
					</div>
				</div>
					<div id="col-nazwa-etui">
						<div class="input-group">
							<label class="label">Nazwa Etui</label>
							<input class="input-style" type="text" autocomplete="off" name="NazwaEtui" minlength="3" spellcheck="false" autofocus required> 
						</div>
					</div>
				</div>
				<div class="row-space">
					<div id="col-atrybuty">
						<div class="input-group">
							<label class="label">Atrybuty</label>
							<input class="input-style" type="text" autocomplete="off" name="Atrybuty" minlength="3" spellcheck="false" placeholder="Po każdym atrybucie użyj średnika" required > </div>
					</div>
				</div>
				<div class="row-space">
					<div id="col-uwagi">
						<div class="input-group">
							<label class="label">Uwagi</label>
							<textarea class="input-style" type="text" autocomplete="off" name="Uwagi" spellcheck="false" maxlength="512" ></textarea> </div>
					</div>
				</div>
				<div class="row-space">
					<div class="col-3">
						<div class="input-group">
							<label class="label">Szkło</label>
							<div class="checkbox-cont-wrapper">
								<label class="checkbox-cont">Chiny
									<input class="checkbox" type="checkbox" checked="checked" name="china"> <span class="box">&#10007</span> </label>
								<label class="checkbox-cont">3MK
									<input class="checkbox" type="checkbox" name="3mk"> <span class="box">&#10007</span> </label>
								<label class="checkbox-cont">ScreenPro+
									<input class="checkbox" type="checkbox" checked="checked" name="screenpro"> <span class="box">&#10007</span> </label>
							</div>
						</div>
					</div>
					<div class="add-form-button-wrapper">
						<button class="add-form-button" name="submit" type="submit">DODAJ</button>
					</div>
				</div>
			</form>
		</div>
	</section>
	
</body>
	</html>