<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo ASSETS ?>styles/style.css">
	<link rel="stylesheet" href="<?php echo ASSETS ?>styles/bootstrap.css">

	<script src="<?php echo ASSETS ?>js/bootstrap.bundle.js" defer></script>

    <title><?=$data["title"] ?></title>
</head>
<body>

<div class="mt-1 container">

        <section class="container-fluid vh-100" style="background-color: #ffffff;">
        <div class="container py-1 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card border border-2 border-primary" style="border-radius: 1rem;">
                <div class="row g-0">
                    <div class="col-md-6 col-lg-5 d-none d-md-block">
        <!--            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"    -->
                    <img src="<?=ASSETS?>images/The-Importance-of-Making-Women-Laugh-woman-laughing.jpg" 
                        alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-1 p-lg-5 text-black">

                        <form>

                        <div class="d-flex align-items-center mb-1 pb-1">
                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                            <span class="h1 fw-bold mb-0">Login</span>
                        </div>

                        <h5 class="fw-normal mb-1 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                        <div class="form-outline mb-1">
                            <input type="email" id="form2Example17" class="form-control form-control-lg" />
                            <label class="form-label" for="form2Example17">Email address</label>
                        </div>

                        <div class="form-outline mb-1">
                            <input type="password" id="form2Example27" class="form-control form-control-lg" />
                            <label class="form-label" for="form2Example27">Password</label>
                        </div>

                        <div class="pt-1 mb-1">
                            <button class="btn btn-outline-dark btn-lg btn-block" type="button">Login</button>
                        </div>

                        <a class="small text-muted" href="#!">Forgot password?</a>
                        <p class="mb-1 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                            style="color: #393f81;">Register here</a></p>
                        
                        </form>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
</div> 



</body>
</html>
