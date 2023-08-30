<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
	</head>
	<body class="bg-white d-block d-sm-none">
    <div class="container">

    </div>    
    <nav class="navbar navbar-expand-lg" style="background-color: #0D2B5B;">
      <div class="container-fluid">
      <img src="images/logo-nav.png" alt="">
        <button class="navbar-toggler" style="margin-right:5px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
          <span><img src="images/bars-solid.png" alt=""></span>
        </button>
        <div class="collapse navbar-collapse top_nav" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
          <li class="nav-item "><a href="#" class="nav-link">Menu 1</a>
          </li>
          <li class="nav-item "><a href="#" class="nav-link">Menu 2</a>
          </li>
          <li class="nav-item "><a href="#" class="nav-link">Menu 3</a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <p class="custom-header">Courier Info</p>
    </div>
    <div class=" container">
      <div class="row">
        <div class="col-6 text-left">
          <label>Input Resi Number</label>
        </div>
        <!-- Alert -->
        <div class="col-6 text-right">
          <p class="alert-courier alert-invalid">Invalid Receipt Number</p>
        </div>
        <!-- End Alert -->
      </div>
      <div class="form-group">
          <input type="text" name="" class="form-control" placeholder="Please input order resi number" id="resiNumber">
      </div>
      <div class="form-group text-right">
        <button class="btn" style="color: #FFFFFF; background-color: #0D2B5B; align-items: right; text-align: right; font-weight: 800; padding: 10 10 30 30;" onclick="checkResi()">Check</button>
      </div>
    </div>
    <span id="demo"></span>
    <div class="container-fluid relevant-results">
      <div class="card border-solid border-primary mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col-6">
            <div></div>
              <img src="images/delivery-logo.png" alt="">
            </div>
            <div class="col-6">
              <p style="color: #0D2B5B; font-size:21px; font-weight: 600;">Delivery Info</p>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row border-primary">
            <div class="col-6">
            <div></div>
              <p style="color: #0D2B5B; font-size:15px; font-weight: 600;">Reciever Name</p>
            </div>
            <div class="col-6">
              <p style="color: #0D2B5B; font-size:11  px; font-weight: 400;">Valdy Andrean</p>
            </div>
          </div>
          <div class="row border-primary">
            <div class="col-6">
              <p style="color: #0D2B5B; font-size:15px; font-weight: 600;">Reciever Address</p>
            </div>
            <div class="col-6">
              <p style="color: #0D2B5B; font-size:11  px; font-weight: 400;">Permata pamulang blok E XI/7</p>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-6">
            <div></div>
              <p style="color: #0D2B5B; font-size:15px; font-weight: 600;">Reciever Call</p>
            </div>
            <div class="col-6 text-center">
              <a href="{{ route('call') }}">
                <img src="images/phone-call.png">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer py-3 text-white text-center fixed-bottom" style="background-color: #0D2B5B;">
        <div class="container-fluid">
          <span class="">Copyright @2023</span>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
      // Elemenent started html
      $('.relevant-results').hide();
      $('.alert-invalid').hide();
      // Check resi
      function checkResi() {
        let resiNumber = Number(document.getElementById("resiNumber").value);
        if (document.getElementById("resiNumber").value == "12345") {
          $('.relevant-results').show();
          $('.alert-invalid').hide();
        } else {
          $('.alert-invalid').show();
          $('.relevant-results').hide();
        }
      }
    </script>
  </body>
</html>