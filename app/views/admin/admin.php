<!doctype html>
<html lang="en">
  <head>
  	<title>Andre Filmotheque | Admin</title>
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
				FILMOTHEQUE</h2>
				</div>
			</div>
		</div>
		<!-- Title -->

        <div class="d-flex justify-content-center">
        <h3 class="btn btn-secondary text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" viewBox="0 0 24 24"><path fill="currentColor" d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5s3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5z"><animateTransform attributeName="transform" attributeType="XML" dur="10s" from="0 12 12" repeatCount="indefinite" to="360 12 12" type="rotate"/></path></svg>
        ADMINISTRATION DE LA FILMOTHEQUE</h3>
        </div>

<div class="container mt-1 rounded-3 bg-primary">
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid ">
    <a class="navbar-brand" href="<?= ROOT ?>home">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= ROOT ?>">FILMOTHEQUE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">ADMIN</a>
		 
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

<!-- Add Film  -->
<div class="container mt-1 mb-2 card w-75 mx-auto border border-dark d-none d-md-block">

    <div class="row container" >
        <div class="col-3 bg-light "style="border-radius:5px 0px 0px 5px">

        </div>
       
        <form class="col-9" method="post" enctype="multipart/form-data">
        <h6 class="ms-2 fw-bold row">Informations</h6>
        <div class="row mt-1 mb-1">
        <div class="col">
            <input type="text" class="form-control" name="length" placeholder="Durée (hh:mm:ss)" aria-label="Duree">
            </div>
        <div class="col">
            <input type="text" class="form-control" name="actor" placeholder="Actor" aria-label="Actor">
        </div>

        <div class="col">
            <input type="text" class="form-control" name="title" placeholder="Titre" aria-label="Titre">
        </div>
        

        </div>


        <div class="row mt-1 mb-1">
        <div class="col">
        <textarea class="form-control" aria-label="With textarea" name="catchexpression" placeholder="catchexpression"></textarea>
        </div>
        <div class="col">
        <textarea class="form-control" aria-label="With textarea" name="tags" placeholder="tags séparés par un espace"></textarea>
        </div>
       
        </div>

        <h6 class=" ms-2 fw-bold row">Catégorie</h6>
        <div class=" row mt-1 mb-1 d-flex justify-content-between ">
            <div class="col d-flex justify-content-around form-check form-check-inline ">
            <input class="form-check-input" type="radio" id="inlineCheckbox1" value="action" name="category">
            <label class="form-check-label" for="inlineCheckbox1">Action</label>
            </div>
            <div class="col d-flex justify-content-around form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox2" value="suspens" name="category">
            <label class="form-check-label" for="inlineCheckbox2">Suspens</label>
            </div>
            <div class="col d-flex justify-content-around form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox3" value="aventure" name="category">
            <label class="form-check-label" for="inlineCheckbox3">Aventure</label>
            </div>
            <div class="col d-flex justify-content-around form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox3" value="fiction" name="category">
            <label class="form-check-label" for="inlineCheckbox3">Fiction</label>
            </div>
            <div class="col d-flex justify-content-around form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox3" value="romance" name="category">
            <label class="form-check-label" for="inlineCheckbox3">Romance</label>
            </div>
            <div class="col d-flex justify-content-around form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox3" value="horreur" name="category">
            <label class="form-check-label" for="inlineCheckbox3">Horreur</label>
            </div>
        </div>


        <h6 class="ms-2 fw-bold row">Fichiers</h6>
        <div class="mt-1 row">
            <div class="col input-group mb-1">
            <input type="file" class="form-control" id="inputGroupFile01" name="poster">
            <label class="input-group-text" for="inputGroupFile01">Téléverser Poster</label>
            </div>
        </div>
        
        <div class="mt-1 row">    
            <div class="col input-group mb-1">
            <input type="file" class="form-control" id="inputGroupFile02" name="film">
            <label class="input-group-text" for="inputGroupFile02">Téléverser le Film</label>
            </div>           
        </div>

        <div class="mb-1 d-flex justify-content-end col-12">
            <button class="btn btn-primary" type="submit" name="ajout_Film">Ajouter un Film</button>
        </div>


        </form>
    </div>


       
</div>
<!-- End Add Film -->



<!-- Film List Table -->

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Tags</th>
      <th scope="col">Categories</th>
      <th scope="col">Poster</th>
      <th scope="col">Film</th>
      <th scope="col">Acteur</th>
      <th scope="col">Accroche</th>
      <th scope="col">Durée</th>
      <th scope="col">Lecture</th>
      <th scope="col">Edition</th>
      <th scope="col">Suppression</th>
     


    </tr>
  </thead>
  <tbody>

<?php foreach ($this->displayedData as $key => $value) : ?>
    <tr>
      <th scope="row"><?= $value["ref"] ?></th>
      <td><?= $value["title"] ?></td>
      <td><?= $value["tags"] ?></td>
      <td><?= $value["category"] ?></td>
      <td><img src=<?= ASSETS."posters/". $value["poster"] ?> class="img-thumbnail" alt="..."></td>
      <td><?= $value["movie"] ?></td>
      <td><?= $value["actor"] ?></td>
      <td><?= $value["catchexpression"] ?></td>
      <td><?= $value["duree"] ?></td>
      <td class="m-auto">
        <svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" viewBox="0 0 24 24"><path fill="red" d="m9.5 16.5l7-4.5l-7-4.5v9ZM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Z"/>
          </svg>
      </td>
      <td>
        <svg class="" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24"><path fill="#063E61" d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z"/>
        </svg>
    </td>
      <td>
      <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 28 28"><path fill="#B00315" d="M11.5 6h5a2.5 2.5 0 0 0-5 0ZM10 6a4 4 0 0 1 8 0h6.25a.75.75 0 0 1 0 1.5h-1.31l-1.217 14.603A4.25 4.25 0 0 1 17.488 26h-6.976a4.25 4.25 0 0 1-4.235-3.897L5.06 7.5H3.75a.75.75 0 0 1 0-1.5H10Zm2.5 5.75a.75.75 0 0 0-1.5 0v8.5a.75.75 0 0 0 1.5 0v-8.5Zm3.75-.75a.75.75 0 0 0-.75.75v8.5a.75.75 0 0 0 1.5 0v-8.5a.75.75 0 0 0-.75-.75Z"/>
        </svg>
      </td>
    </tr>
    <?php  endforeach; ?>


  </tbody>
</table>

<!-- Film List Table -->





</div>



	</body>
</html>

