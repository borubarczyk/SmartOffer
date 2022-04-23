<?php
include "header.php";
include FUNCTIONS;
?>

<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Akcesoria do urządzeń mobilnych</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="./index.php">Pulpit</a></li>
			<li class="breadcrumb-item"><a href="./accessories.php">Wyszukaj</a></li>
			<li class="breadcrumb-item active">Dodaj</li>
		</ol>

		<div class="row">
			<div class="col-xl-6">
				<div class="card mb-4">
					<div class="card-header"><i class="fa-solid fa-plus me-1"></i>Dodaj serię</div>
					<div class="card-body">
						<div class="row ">
							<label for="NazwaModelu" class="form-text">Nazwa serii</label>
							<div class="input-group">
								<input type="text" name="AccessoriesName" required minlength="6" class="form-control" id="AccessoriesName">
								<span role="button" class="input-group-text bg-primary"><a href="#"><i class="fa-solid fa-magnifying-glass text-white"></i></a></span>
							</div>
						</div>

						<div class="row ">
							<div class="col-12">
								<label for="AccessoriesFullName" class="form-text">Pełna nazwa serii</label>
								<div class="input-group">
									<input type="text" name="AccessoriesFullName" required minlength="6" class="form-control" id="AccessoriesFullName">
								</div>
							</div>
						</div>

						<div class="row ">
							<div class="col-sm-7">
								<label for="AccessoriesAtributte" class="form-text">Atrybuty</label>
								<div class="input-group">
									<input type="text" name="AccessoriesAtributte" required minlength="6" class="form-control" id="AccessoriesAtributte">
								</div>
							</div>
							<div class="col-sm-5">
								<label for="AccessoriesExtraInfo" class="form-text">Uwagi</label>
								<div class="input-group">
									<input type="text" name="AccessoriesExtraInfo" required minlength="6" class="form-control" id="AccessoriesExtraInfo">
								</div>
							</div>
						</div>

						<div class="row ">
							<div class="col-sm-4">
								<label for="ManufactureAccessoriesID" class="form-text">Producent:</label>
								<select class="form-select" name="ManufactureAccessoriesID" id="ManufactureAccessoriesID">
									<option selected>Wybierz...</option>
								</select>
							</div>

							<div class="col-sm-3">
								<label for="AccessoriesType" class="form-text">Typ:</label>
								<select class="form-select" id="AccessoriesType">
									<option selected>Wybierz...</option>
								</select>
							</div>

							<div class="col-sm-5">
								<label for="AccessoriesSKU" class="form-text">SKU</label>
								<div class="input-group">
									<input type="text" id="AccessoriesSKU" name="AccessoriesSKU" class="form-control" form-text>
									<span role="button" class="input-group-text bg-primary"><i class="fa-solid fa-code text-white"></i></span>
								</div>
							</div>

						</div>

						<div class="row">
							<div class="col-sm-6">
								<label for="Uwagi" class="form-text">Uwagi:</label>
								<input type="text" name="uwagi" id="Uwagi" class="form-control" form-text>
							</div>

							<div class="col-sm-6">
								<label for="PhotoLink" class="form-text">Zdjęcie:</label>
								<input id="PhotoLink" name="link_zdjecie" class="form-control" type="file" id="formFile">
							</div>
						</div>

						<div class="row m-0 my-3">
							<div class="border border-primary rounded bg-light">
								<p class="text-primary">SZKŁA DOSTĘPNE W ZESTAWACH:</p>

								<div class="row p-1 mb-3">
									<div class="col-4">
										<div class="form-check form-switch">
											<input class="form-check-input" type="checkbox" id="Case3MKglass" checked>
											<label class="form-check-label text-uppercase" name="Case3MKglass" for="Case3MKglass">Szkło 3MK</label>
										</div>
									</div>
									<div class="col-4">
										<div class="form-check form-switch">
											<input class="form-check-input" type="checkbox" id="CaseCHglass" checked>
											<label class="form-check-label text-uppercase" name="CaseCHglass" for="CaseCHglass">Szkło CH</label>
										</div>
									</div>
									<div class="col-4">
										<div class="form-check form-switch">
											<input class="form-check-input" type="checkbox" id="CaseSPPglass" checked>
											<label class="form-check-label text-uppercase" name="CaseSPPglass" for="CaseSPPglass">Szkło SPP</label>
										</div>
									</div>

								</div>
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
								<label for="AccessoriesManufactureExtraInfo" class="form-text">Dodatkowe info</label>
								<div class="input-group">
									<input type="text" name="AccessoriesManufactureExtraInfo" required minlength="6" class="form-control" id="AccessoriesManufactureExtraInfo">
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
								<button class="btn cus-btn-primary mt-2 fw-normal"><i class="fa-solid fa-list pe-2"></i>AKTUALNA LISTA</button>
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
								<button class="btn cus-btn-primary mt-2 fw-normal"><i class="fa-solid fa-list pe-2"></i>AKTUALNA LISTA</button>
							</div>
						</div>
					</div>
					<div class="card-footer text-end "><i class="fa-solid fa-info mx-2"></i></div>
				</div>
			</div>

		</div>
	</div>
</main>
<?php
include "footer.php";
?>

<script>
	GetDataList(AccessoriesManList, 'ManufactureAccessoriesID', 'option');
	GetDataList(AccessoriesTypeList, 'AccessoriesType', 'option');
</script>