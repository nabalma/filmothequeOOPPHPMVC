<!doctype html>
<html lang="en">
  <head>
  	<title>Andre Filmotheque</title>
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
    <a class="navbar-brand" href="<?php ROOT ?>">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php ROOT ?>">FILMOTHEQUE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php ROOT ?>admin/">ADMIN</a>
		 
        </li>
      </ul>
      <form class="d-flex" method="post">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-primary" type="submit" name="submit_search">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>





	<!-- Categories Buttons -->
	<div class="row container mx-auto d-flex justify-content-between mt-2">

		<form class="col btn" method="post">
			<button class="col btn btn-outline-dark" type="submit" name="submit_Category_Tous">
			<svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24"><path fill="currentColor" d="M3 14h4v-4H3v4zm0 5h4v-4H3v4zM3 9h4V5H3v4zm5 5h13v-4H8v4zm0 5h13v-4H8v4zM8 5v4h13V5H8z"/></svg>
				Tous
			</button>
		</form>
		<form class="col btn" method="post">
			<button class="col btn btn-outline-dark" type="submit" name="submit_Category_Action">
				<svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 512 512"><path fill="currentColor" d="M371.984 305.035c-13.512 50.421-65.335 80.346-115.76 66.832c-50.413-13.507-80.338-65.337-66.829-115.755c13.512-50.42 65.335-80.341 115.753-66.832c50.425 13.513 80.345 65.333 66.836 115.755zm50.755-62.632c-11.252-37.641-8.781-85.581 1.538-125.371C436.646 69.336 403.557 16.19 355.01 3.183C305.54-10.07 250.636 19.276 237.63 68.714c-9.964 37.88-30.14 75.11-56.251 103.12c-29.642 31.132-67.354 53.261-109.624 64.586c-51.499 13.8-82.087 66.826-68.284 118.34c13.815 51.5 66.762 82.09 118.284 68.272c38.458-9.816 83.883-12.17 120.92-.59c44.85 14.024 75.184 31.778 109.082 64.938c36.67 35.872 97.125 30.817 131.917-3.967c35.313-35.3 38.553-96.17 3.28-132.798c-29.76-30.902-50.321-61.734-64.216-108.212z"/></svg>
				Actions
			</button>
		</form>
		<form class="col btn" method="post">
			<button class="col btn btn-outline-dark" type="submit" name="submit_Category_Suspens">
			<svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24"><path fill="currentColor" d="M21.16 4.258c.033 3.5.59 4.81.787 6.701a9.98 9.98 0 0 1-2.875 8.112c-3.666 3.666-9.471 3.89-13.4.673l2.852-2.853a6.002 6.002 0 0 0 8.368-8.368l4.267-4.265Zm-2.83-.002l-2.852 2.853a6.002 6.002 0 0 0-8.368 8.368l-4.267 4.265c-.034-3.5-.591-4.811-.788-6.701A9.98 9.98 0 0 1 4.93 4.929c3.666-3.666 9.471-3.89 13.4-.673ZM12 8a4 4 0 1 1 0 8a4 4 0 0 1 0-8Zm0 2.5a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3Z"/></svg>
			Suspens
		</button>
		</form>
		<form class="col btn" method="post">
			<button class="col btn btn-outline-dark" type="submit" name="submit_Category_Aventure">
			<svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12C2 6.48 6.48 2 12 2s10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12zm10 6c3.31 0 6-2.69 6-6s-2.69-6-6-6s-6 2.69-6 6s2.69 6 6 6z"/></svg>
			Aventure
		</button>
		</form>
		<form class="col btn"  method="post">
			<button class="col btn btn-outline-dark" type="submit" name="submit_Category_Fiction">
				<svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24"><path fill="currentColor" d="M5.75 2.02A1.75 1.75 0 0 0 4 3.77v2.5c0 .966.784 1.75 1.75 1.75h12.5A1.75 1.75 0 0 0 20 6.27v-2.5a1.75 1.75 0 0 0-1.75-1.75H5.75Zm0 7A1.75 1.75 0 0 0 4 10.77v2.5c0 .966.784 1.75 1.75 1.75h12.5A1.75 1.75 0 0 0 20 13.27v-2.5a1.75 1.75 0 0 0-1.75-1.75H5.75Zm0 7A1.75 1.75 0 0 0 4 17.77v2.5c0 .966.784 1.75 1.75 1.75h12.5A1.75 1.75 0 0 0 20 20.27v-2.5a1.75 1.75 0 0 0-1.75-1.75H5.75Z"/></svg>
				Fiction
			</button>
		</form>
		<form class="col btn"  method="post">
			<button class="col btn btn-outline-dark" type="submit" name="submit_Category_Romance">
				<svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24"><path fill="currentColor" d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53L12 21.35Z"/></svg>
				Romance
			</button>
		</form>
		<form class="col btn" method="post">
			<button class="col btn btn-outline-dark" type="submit" name="submit_Category_Horreur">
			<svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 20 20"><path fill="currentColor" d="M9.5 3v4H3V6a3 3 0 0 1 3-3h3.5Zm1 0v9H17V6a3 3 0 0 0-3-3h-3.5ZM17 13h-6.5v4H14a3 3 0 0 0 3-3v-1Zm-7.5 4V8H3v6a3 3 0 0 0 3 3h3.5Z"/>
			</svg>
			Horreur
		</button>
		</form>

	</div>

<!-- End Categories Buttons -->

<!-- Cards -->
		<div class="p-2 mx-auto container-fluid bg-dark">

			<div class="row container-fluid mx-auto g-2">

		
			<?php foreach ($data as $row): ?>
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
					<div class="card me-1"  >
					<img src="<?php echo ASSETS ?>posters/<?=$row["poster"]?>" class="mt-2 card-img-top" alt="..." style="max-height:350px">
					<div class="card-body">
						<div class="row d-flex justify-content-between">
						<h5 class="col-10 p-0 card-title"><?=$row["title"]?></h5>
						<h5 class="visually-hidden col-2 p-0 card-title "><span class="p-2 rounded-circle border border-dark border-1"><?=$row["ref"]?></span></h5>
						</div>
						<p class="p-0 card-text"><?=$row["catchexpression"]?></p>
						<div class="row d-flex justify-content-between">
						<p class="col-8 p-0 card-text"><span class="fw-bold">Catégorie :</span> <?=$row["category"]?></p>
						<p class="col-4 p-0 card-text"><span class="fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2v.07a6.958 6.958 0 0 1 2.812 1.058l.908-.908a.75.75 0 1 1 1.06 1.06l-.8.8A7 7 0 1 1 7 2.07V2a1 1 0 0 1-1-1Zm7.5 8a5.5 5.5 0 1 1-11 0a5.5 5.5 0 0 1 11 0ZM8.75 5.75a.75.75 0 0 0-1.5 0v3.56l.22.22l2.254 2.254a.75.75 0 1 0 1.06-1.06L8.75 8.689V5.75Z" clip-rule="evenodd"/></svg></span> <?=$row["duree"]?></p>
						</div>
					</div>						
					
					<div class="d-flex justify-content-between card-footer">
						<span class="fw-bold"><?=$row["actor"]?></span>
						<a href="<?=ROOT?>lecteur/index?id=<?= $row["ref"]?>" class="card-link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Plus de détails"><svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 24 24"><path fill="red" d="M12 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m0-6a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m0-6a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2Z"/></svg></a>
					</div>

					</div>
					
				</div>

				<?php endforeach; ?>
					

			</div>

		</div>
		<!-- Cards -->

</div>



	</body>
</html>

