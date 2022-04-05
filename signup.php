


<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

<!DOCTYPE html>
<html lang="en" class="html-2">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <section class="vh-100 my-3">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
                     
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">






            <form method="POST" action="registered.php">
              <div
                class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start"
              >
                <p class="lead fw-normal mb-0 me-3" style="margin-bottom :30px;">Sign up</p>
                
              </div>

              

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input
                  type="text"
                  id="form3Example3"
                  class="form-control form-control-lg"
                  placeholder="Enter a valid email address"
                  name="username"
                  required
                />
                <label class="form-label" for="form3Example3"
                  >Username</label
                >
              </div>
              <div class="form-outline mb-4">
                <input
                  type="email"
                  id="form3Example3"
                  class="form-control form-control-lg"
                  placeholder="Enter a valid email address"
                  name="email"
                  required
                />
                <label class="form-label" for="form3Example3"
                  >Email address</label
                >
              </div>

              <!-- Password input -->
              <div class="form-outline mb-3">
                <input
                  type="password"
                  id="form3Example4"
                  class="form-control form-control-lg"
                  placeholder="Enter password"
                  name="pass"
                  required
                />
                <label class="form-label" for="form3Example4">Password</label>
              </div>


              <div class="text-center text-lg-start mt-4 pt-2">
                <button
                  type="submit"
                  class="btn btn-primary btn-lg"
                  style="padding-left: 2.5rem; padding-right: 2.5rem"
                >
                  Sign up
                </button>
                <p class="small fw-bold mt-2 pt-1 mb-0">
                  Already registered?
                  <a href="login.php" class="link-danger">Login </a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
  
    </section>

    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"
    ></script>
  </body>
</html>