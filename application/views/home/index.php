<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<center><h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1></center>

	<div class="row">
		<div class="col-12">
			<!-- map -->
			<center><div class="content center mb-4" id="map-canvas" style="width: 100%; height: 470px"></div></center> 
			<!-- end maps -->
		</div>

		<div class="col">
			<div class="card text-white bg-danger mb-3" style="max-width: 25rem;">
				<div class="card-body">
					<h6 class="card-title font-weight-bold">PEKALONGAN BARAT</h6>
					<small><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p></small>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card text-white bg-success mb-3" style="max-width: 25rem;">
				<div class="card-body">
					<h6 class="card-title font-weight-bold">PEKALONGAN UTARA</h6>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card text-white bg-info mb-3" style="max-width: 25rem;">
				<div class="card-body">
					<h6 class="card-title font-weight-bold">PEKALONGAN TIMUR</h6>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card text-white bg-warning mb-3" style="max-width: 25rem;">
				<div class="card-body">
					<h6 class="card-title font-weight-bold">PEKALONGAN SELATAN</h6>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card text-white bg-primary mb-3" style="max-width: 25rem;">
				<div class="card-body">
					<h6 class="card-title font-weight-bold">DATA PEKALONGAN</h6>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
			<div class="stats-small stats-small--1 card card-small">
				<div class="card-body">
					<h6 class="card-title" class="text-center" style="text-align: center;">Data Graph : Kondisi Telecenter</h6>
					<p class="card-text"  class="text-center" style="text-align: center;">Statistik Data Kondisi Telecenter</p>
					<body>
						<div id="piechart2" style="width: 100%;  class="text-center" style="text-align: center;" class="d-flex justify-content-center"></div>
					</body>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
			<div class="stats-small stats-small--1 card card-small">
				<div class="card-body">
					<h6 class="card-title" class="text-center" style="text-align: center;">Data Graph : Data Masuk</h6>
					<p class="card-text"  class="text-center" style="text-align: center;">Statistik Data yang telah masuk pada sistem</p>
					<body>
						<div id="piechart" style="width: 100%;  class="text-center" style="text-align: center;" class="d-flex justify-content-center"></div>
					</body>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-12 col-sm-12 mb-4">
			<div class="stats-small stats-small--1 card card-small">
				<div class="card-body">
					<h6 class="card-title" class="text-center" style="text-align: center;">Data Graph : Status PC</h6>
					<p class="card-text"  class="text-center" style="text-align: center;">Statistik Data Status Komputer</p>
					<body>
						<div id="piechart3" style="width: 100%;  class="text-center" style="text-align: center;" class="d-flex justify-content-center"></div>
					</body>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- End of Main Content -->



