<?php
include "header.php"
?>

<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Dodaj Urządzenie</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="./index.php">Pulpit</a></li>
			<li class="breadcrumb-item">Telefony</li>
			<li class="breadcrumb-item"><a href="./devices.php">Wyszukaj</a></li>
			<li class="breadcrumb-item active">Dodaj</li>
		</ol>
		<div class="row">
			<div class="col-xl-6">
				<div class="card mb-4">
					<div class="card-header"><i class="fa-solid fa-plus me-1"></i>Dodaj telefon</div>
					<div class="card-body">
						<div class="row m-0">
							<div class="col">
								<div class="row">
									<div class="col-9">
										<label for="DeviceModelName" class="form-text">Nazwa modelu</label>
										<div class="input-group">
											<input type="text" name="DeviceModelName" required minlength="6" class="form-control" id="DeviceModelName">
											<span role="button" class="input-group-text bg-primary"><a href="" target="blank"><i class="fa-solid fa-magnifying-glass text-white"></i></a></span>
										</div>

									</div>
									<div class="col-3">
										<label for="DeviceScreenSize " class="form-text">Cale</label>
										<input type="number" required id="DeviceScreenSize" name="DeviceScreenSize" min="0" step=0.01 class="form-control" max="20" aria-label="Cale">
									</div>
								</div>

								<div class="row">

									<div class="col-4">
										<label for="ManufactureID" class="form-text">Producent:</label>
										<select class="form-select" name="ManufactureID" id="ManufactureID">
											<option selected>Wybierz...</option>
										</select>
									</div>
									<div class="col-4">
										<label for="TypeID" class="form-text">Typ:</label>
										<select class="form-select" id="TypeID">
											<option selected>Wybierz...</option>
										</select>
									</div>
									<div class="col-4">
										<label for="DeviceExtraInfo" class="form-text">Uwagi:</label>
										<input type="text" name="DeviceExtraInfo" id="DeviceExtraInfo" class="form-control" form-text>
									</div>


								</div>

								<div class="row">
									<div class="col-12">
										<label for="DeviceGSMLink" class="form-text">GSM Link:</label>
										<div class="input-group">
											<input id="DeviceGSMLink" type="link" name="DeviceGSMLink" class="form-control" form-text>
											<button class="btn btn-outline-primary" onclick="LoadDeviceFromLink(this)">Załaduj<i class="fa-solid fa-download px-1"></i></button>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-12">
										<label for="DevicePhotoLink" class="form-text">Link do zdjęcia:</label>
										<input id="DevicePhotoLink" name="DevicePhotoLink" type="link" class="form-control" form-text>
									</div>
								</div>
								<div class="row m-0 mt-3">
									<div class="border border-primary rounded bg-light">
										<p class="text-primary">SZKŁA KOMPATYBILNE</p>

										<div class="row p-1 mb-3">
											<div class="col-4">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="Device3MKglass" checked>
													<label class="form-check-label text-uppercase" name="Device3MKglass" for="Device3MKglass">Szkło 3MK</label>
												</div>
											</div>
											<div class="col-4">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="DeviceCHglass" checked>
													<label class="form-check-label text-uppercase" name="DeviceCHglass" for="DeviceCHglass">Szkło CH</label>
												</div>
											</div>
											<div class="col-4">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="DeviceSPPglass" checked>
													<label class="form-check-label text-uppercase" name="DeviceSPPglass" for="DeviceSPPglass">Szkło SPP</label>
												</div>
											</div>

										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6">
										<label for="DeviceSKU" class="form-text">SKU</label>
										<div class="input-group">
											<input type="text" id="DeviceSKU" name="DeviceSKU" class="form-control" form-text>
											<span role="button" class="input-group-text bg-primary" onclick="CreateSKU('');"><i class="fa-solid fa-code text-white"></i></span>
										</div>
									</div>

									<div class="col-3">
										<label for="DevicePrice" class="form-text">Cena</label>
										<input type="number" id="DevicePrice" name="DevicePrice" class="form-control" placeholder="2500" step="10" min="500" form-text>
									</div>
									<div class="col-3">
										<label for="DeviceReleaseDate" class="form-text">Rok premiery</label>
										<input type="number" id="DeviceReleaseDate" name="DeviceReleaseDate" class="form-control" min="2000" max="2050" form-text>
									</div>
								</div>

								<div class="row mt-3 justify-content-end">
									<div class="col-auto">
										<button type="submit" class="btn cus-btn-green mt-2 px-4"><i class="fa-solid fa-plus pe-1"></i>DODAJ</button>
									</div>
									<div class="col-auto">
										<button class="btn cus-btn-red mt-2 px-4"><i class="fa-solid fa-eraser pe-1"></i>WYCZYŚĆ</button>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="card-footer text-end "><i class="fa-solid fa-info mx-2"></i></div>
				</div>
			</div>
			<div class="col-xl-6">

				<div class="card mb-4">
					<div class="card-header"><i class="fa-solid fa-plus me-1"></i>Dodaj producenta</div>
					<div class="card-body">
						<div class="row">
							<label for="AccessoriesManufactureName" class="form-text">Nazwa producenta</label>
							<div class="input-group">
								<input type="text" name="AccessoriesManufactureName" required minlength="6" class="form-control" id="AccessoriesManufactureName">
								<span role="button" class="input-group-text bg-primary"><a href="#"><i class="fa-solid fa-magnifying-glass text-white"></i></a></span>
							</div>
						</div>

						<div class="row">
							<div class="col-6">
								<label for="ManufactureSKU" class="form-text">SKU</label>
								<div class="input-group">
									<input type="text" name="ManufactureSKU" required minlength="6" class="form-control" id="ManufactureSKU">
								</div>
							</div>

							<div class="col-6">
								<label for="AccessoriesManufactureLogo" class="form-text">Logo:</label>
								<input id="AccessoriesManufactureLogo" name="AccessoriesManufactureLogo" class="form-control" type="file" id="formFile">
							</div>
						</div>

						<div class="row mt-3 justify-content-end">
							<div class="col-auto">
								<button type="submit" class="btn cus-btn-green mt-2 fw-normal"><i class="fa-solid fa-plus pe-1"></i>DODAJ</button>
							</div>
							<div class="col-auto">
								<button class="btn cus-btn-red mt-2 fw-normal"><i class="fa-solid fa-eraser pe-1"></i>WYCZYŚĆ</button>
							</div>

							<div class="col-auto">
								<button class="btn cus-btn-primary mt-2 fw-normal" data-bs-toggle="modal" data-bs-target="#ModalExpmle" onclick="GetDataList(DevicesManList,'ModalData','p')"><i class="fa-solid fa-list pe-2"></i>AKTUALNA LISTA</button>
							</div>
						</div>

					</div>
					<div class="card-footer text-end "><i class="fa-solid fa-info mx-2"></i></div>
				</div>

				<div class="card mb-4">
					<div class="card-header"><i class="fa-solid fa-plus me-1"></i>Dodaj typ</div>
					<div class="card-body">
						<div class="row">
							<label for="AccessoriesTypesName" class="form-text">Nazwa Typu</label>
							<div class="input-group">
								<input type="text" name="AccessoriesTypesName" required minlength="6" class="form-control" id="AccessoriesTypesName">
								<span role="button" class="input-group-text bg-primary"><a href="#"><i class="fa-solid fa-magnifying-glass text-white"></i></a></span>
							</div>
						</div>
						<div class="row mt-3 justify-content-end">
							<div class="col-auto">
								<button type="submit" class="btn cus-btn-green mt-2 fw-normal"><i class="fa-solid fa-plus pe-1"></i>DODAJ</button>
							</div>
							<div class="col-auto">
								<button class="btn cus-btn-red mt-2 fw-normal"><i class="fa-solid fa-eraser pe-1"></i>WYCZYŚĆ</button>
							</div>

							<div class="col-auto">
								<button class="btn cus-btn-primary mt-2 fw-normal" data-bs-toggle="modal" data-bs-target="#ModalExpmle" onclick="GetDataList(DevicesTypeList,'ModalData','p')"><i class="fa-solid fa-list pe-2"></i>AKTUALNA LISTA</button>
							</div>
						</div>
					</div>
					<div class="card-footer text-end "><i class="fa-solid fa-info mx-2"></i></div>
				</div>
			</div>
		</div>
</main>

<div class="modal fade" id="ModalExpmle" tabindex="-1" aria-labelledby="Devices" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="Devices"></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div id="ModalContent">
				<div id="ModalData"></div>	
			</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn cus-btn-primary b" data-bs-dismiss="modal">Zamknij</button>
			</div>
		</div>
	</div>
</div>


<?php
include "footer.php"
?>


<script>
	GetDataList(DevicesManList, 'ManufactureID', 'option');
	GetDataList(DevicesTypeList, 'TypeID', 'option');
</script>