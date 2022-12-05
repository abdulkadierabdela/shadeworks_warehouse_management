

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Checkout example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: start;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
       
      <img class="d-block mx-auto mb-4" src="../images/background.jpg" alt="" width="72" height="57">
      <h2>purchase form</h2>
      
    </div>

  
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">purchase information</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">product name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>

              
              <label for="productcode" class="form-label">product code</label>
              <input type="number" class="form-control" id="productcode" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid code is required.
              </div>
            </div>
            </div>

              

        

            <div class="col-3">
              <label for="email" class="form-label">unit price <span class="text-muted">(Optional)</span></label>
              <input type="number" class="form-control" id="email" placeholder="$">
              <div class="invalid-feedback">
                Please enter a valid price  for shipping updates.
              </div>
            </div>

            <div class="col-md-3">
              <label for="price" class="form-label">Tottal prics</label>
              <input type="number" class="form-control" id="zip" placeholder="$" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

            <div class="col-4">
              <label for="model" class="form-label">model</label>
              
              <input type="text" class="form-control" id="address" placeholder="model" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <div class="col-4">
              <label for="model" class="form-label">Quantity</label>
              
              <input type="text" class="form-control" id="address" placeholder="quantity" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
    

            <div class="col-md-4">
              <label for="country" class="form-label">supplied </label>
              <select class="form-select" id="country" required>
                <option>imported</option>
                 <option>local supplier</option>
                  <option>our product</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Store name</label>
              <select class="form-select" id="state" required>
                <option value="">piasssa</option>
                <option>mekanisa</option>
                <option>hana</option>

              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            
            <hr class="my-4">

<button class="w-80 btn btn-primary btn-lg" type="submit">save</button>
          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>

          <hr class="my-4">

          

          
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 AKICT</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
