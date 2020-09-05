<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="card o-hidden shadow-lg my-5">
          <div class="col">
            <img src="{{ ('img/aa.png')}}" width="250px" class="rounded mx-auto d-block">
          </div>
            <div class="col">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                </div>
                <form class="user" method="POST" action="{{ route('login') }}">
                  @csrf      
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="">
                  </div>
                  @if (session('message'))
                  <small class="text-danger">{{ session('message')}}</small>
                  @endif
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                  <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                  <label class="custom-control-label" for="remember-me">Remember Me</label>
                  </div>
                  </div>
                  
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                </form>  
                  <div class="text-center my-3">
                    <a class="" href="#">Lupa Password?</a>
                  </div>
                  <hr>
                  <div class="text-center">
                  <a class="" href="#">Belum mempunyai akun?</a>
                  </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>