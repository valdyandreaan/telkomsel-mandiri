<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  </head>
  <body class="d-block d-sm-none">
    <div class="p-5 text-white text-center">
      <img src="images/logo.png" class="img-fluid img-custom">
    </div>
    <div class="container mt-5">
      <div class="form-group">
        <label class="custom-label">LOGIN</label>
        <input type="number" name="" class="form-control" placeholder="Input your phone number" id="phone" onkeyup="myNumber()">
        <span id="login"></span>
      </div>
      <div class="form-group text-right">
        <a href="{{route('courier')}}" class="btn custom-login relevant-results">LOGIN</a>
        <button class="btn custom-login irelevant-results" onclick="Invalid()" id="Invalid">LOGIN</button>
      </div>
      <!-- Alert -->
      <div class="text-center">
          <label class="alert alert-invalid" id="alert-invalid">Invalid Login, Please contact administator</label>
      </div>
      <!-- End Alert -->
    </div>
    <footer class="footer py-3 text-white text-center fixed-bottom">
      <div class="container-fluid">
        <span class="">Copyright @2023</span>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
      // element started html
      $('.relevant-results').hide();
      $('#alert-invalid').hide();
      $('.irelevant-results').show();
      // Key up phone number
      $('#phone').keyup(function() {
       if (document.getElementById("phone").value == "081617315842") {
          $('.relevant-results').show();
          $('.irelevant-results').hide();
          $('#alert-invalid').hide();
        }
      });
      // On click login button
      function Invalid() {
          if (document.getElementById("phone").value != "081617315842") {
            $('.irelevant-results').show();
            $('#alert-invalid').show();
          } else {
            $('.relevant-results').hide();
          }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>       
  </body>
</html>