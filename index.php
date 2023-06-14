<?php include 'view/home/head.php'?>
	<body>
		<header>
			<?php include_once 'view/home/header.php';?>
		</header>


		<div id="carouselExample" class="carousel slide container">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="src/img/03.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="src/img/03.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="src/img/03.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

		<div class="container">
			<main>
				<div class="container">
					<div class="row row-cols-sm-1 row-cols-md-2  row-cols-lg-3 row-cols-xl-4">
	
							<div>
								<img  class="img-thumbnail" src="src/img/03.jpg">
								<p>Primera Imagen</p>
							</div>
							
							<div>
								<img  class="img-thumbnail" src="src/img/03.jpg">
								<p>Segunda Imagen</p>
							</div>
			
							<div>
								<img  class="img-thumbnail" src="src/img/03.jpg">
								<p>Segunda Imagen</p>
							</div>
		
							<div>
								<img  class="img-thumbnail" src="src/img/03.jpg">
								<p>Segunda Imagen</p>
							</div>
					</div>
				</div>
			</main>
		</div>
		
		<!-- Container Text -->
		<div class="container mt-5">
			<p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur enim, quo harum, soluta officiis suscipit non sint nostrum fugiat quis illum facere ea. Eveniet harum unde praesentium veniam quasi repellat beatae explicabo odit iure quod ipsam magni doloribus, aut ratione veritatis nostrum. Est error laborum eum odit accusamus sed rerum consequatur earum excepturi reiciendis sunt repellendus, exercitationem soluta, vero velit quasi recusandae. Facilis alias quisquam harum asperiores ex, at cupiditate delectus voluptatibus facere voluptates, earum, voluptate eum quia amet nostrum assumenda tempora voluptatem quaerat iure molestias dolores similique! Id expedita labore optio debitis molestias sed adipisci facere sint minus quaerat?</p>
		</div>

		<!-- Container Cards -->
		<div class="container">
			<div class="card mb-3 me-auto mt-5" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-md-4">
					<img src="src/img/03.jpg" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
					</div>
					</div>
				</div>
			</div>	
	
			<div class="card mb-3 m-auto mt-5" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-md-4">
					<img src="src/img/03.jpg" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
					</div>
					</div>
				</div>
			</div>	
	
			<div class="card mb-3 ms-auto mt-5" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-md-4">
					<img src="src/img/03.jpg" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
					</div>
					</div>
				</div>
			</div>	
		</div>

	<?php include_once 'view/home/footer.php';?>
