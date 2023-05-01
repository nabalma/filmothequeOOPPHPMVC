<!doctype html>
<html lang="en">
  <head>
  	<title>Film</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="<?php echo ASSETS ?>styles/style.css">
	<link rel="stylesheet" href="<?php echo ASSETS ?>styles/bootstrap.css">

	<script src="<?php echo ASSETS ?>js/bootstrap.bundle.js" defer></script>
	

	</head>
	<body>

	<div class="container">

		<!-- Title -->
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-1">
					<h2 class="heading-section">
						<svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 24 24"><path fill="red" d="M18.001 20H20v2h-8C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10a9.985 9.985 0 0 1-3.999 8ZM12 10a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm-4 4a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm8 0a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm-4 4a2 2 0 1 0 0-4a2 2 0 0 0 0 4Z"/>
						</svg>
				ANDRE FILMOTHEQUE</h2>
				</div>
			</div>
		</div>
		<!-- Title -->

		

		


<div class="container mt-1 rounded-3 bg-primary">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">FILMOTHEQUE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ADMIN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>


<!-- Header Informations -->
<div class="container-fluid mt-1">
<div class="row border rounded-3 border-dark mt-1 mb-1">
    <h5 class="rounded-3 bg-light mb-1 mx-auto fw-bold"><span>Titre : </span>John Q.</h5>
    <div class="row">
        <h6 class="col "><span class="text-primary">Acteur : </span>Denzel Washington</h6>
        <h6 class="col text-dark"><span  class="text-primary">Catégorie : </span>Suspens</h6>       
        <h6 class="col "><span  class="text-primary">Durée : </span>01:20:56</h6>
        <h6 class="col-5"><span  class="text-primary">Tags : </span>Risques Emotionel Famille Decision Otage</h6>
</div> 
</div>
</div>
<!-- End of Header Informations -->

<!-- Video Player -->
<div class="container-fluid mt-2">
<video class="img-thumbnail w-100 h-100" controls>
  <source src="<?php echo ASSETS?>movies/A Father's Resolve (John Q).mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>
<!-- End of Video Player -->



	</body>
</html>

