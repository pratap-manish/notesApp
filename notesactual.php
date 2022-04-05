<!DOCTYPE html>
<html lang="en">
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
    <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
       






            <form method="POST" action="notescreated.php">
            <div
                class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start"
              >
                <p class="lead fw-normal mb-0 me-3" style="margin-bottom :30px;">Create New Note</p>
                
              </div>
             

              <!-- Email input -->
              <div class="form-outline mb-4" style="margin-top:2rem;width:26.5rem;">
                <input
                  type="text"
                  id="form3Example3"
                  class="form-control form-control-lg"
                  placeholder="Enter Title for your note"
                  name="title"
                />
                <label class="form-label" for="form3Example3"
                  >Title</label
                >
              </div>

              <!-- Password input -->
              <div class="form-outline mb-3">
                  
                  <textarea name="content" 
                  placeholder="Create your note"
                   id="" cols="50" rows="5"></textarea>
                <!-- <input
                  type="text"
                  id="form3Example4"
                  class="form-control form-control-lg"
                  placeholder="Create your note"
                  name="content"
                /> -->
                <label class="form-label" for="form3Example4"></label>
            

              <div style="margin-left:0; margin-right:0;" class="text-center text-lg-start mt-4 pt-2">
                <button
                  type="submit"
                  class="btn btn-primary btn-lg"
                  style="padding-left: 2.5rem; padding-right: 2.5rem"
                >
                  Create note
                </button>
               
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary"
        style="margin-top:17rem;" >
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
          Copyright © 2022. All rights reserved.
        </div>
        <!-- Copyright -->

        <!-- Right -->
        
        <!-- Right -->
      </div> -->
    </section>

    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"
    ></script>
  </body>
</html>