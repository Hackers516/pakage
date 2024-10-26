<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="Assets/Css/signup.css">
    <title>Sign Up</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
          <b><a href="index.html" class="navbar-brand"> 
              <img src="Assets/Images/logo.jpg" alt="" width="45px">Abdullah's Store</a></b>
          <button class="navbar-toggler" 
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav">
              <span class="navbar-toggler-icon">
               </span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
             

              <ul class="navbar-nav ">
                <li class="navbar-item">
                  <a class="nav-link" href="login.html">Login</a>
              </li>
              <li class="navbar-item">
                  <a class="nav-link" href="signup.html">Sign Up</a>
              </li>
                  <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="navbar-item">
                  <a class="nav-link" href="features.html">Features</a>
              </li>
              <li class="navbar-item">
                  <a class="nav-link" href="about.html">About Us</a>
          </ul>
      </div>
      </div>
  </nav>
  
    <div class="container-fluid bg-dark text-light py-2">
        <header class="text-center">
            <h1 class="display-6">Sign Up Here.</h1>
         </header>
    </div>
        <section class="container">
            <form action="{{route('nawab')}}" method="post" class="row g-3 bg-secondary text-light py-3 my-3">
                <div class="col-md-6">
                 @csrf
                  <input type="email"name="email" class="form-control" placeholder="Email" id="inputEmail4">
                @error('email')
                <p>{{$message}}</p>
                @enderror
                </div>
                <div class="col-md-6">
                  <input type="password" name="password" class="form-control" placeholder="Password" id="inputPassword4">
                  @error('password')
                <p>{{$message}}</p>
                @enderror
                </div>
                <div class="col-12">
                  
                  <input type="text"name="address1" class="form-control" id="inputAddress" placeholder="Address 1">
                  @error('address1')
                <p>{{$message}}</p>
                @enderror
                </div>
                <div class="col-12">
                  <input type="text"name="address2" class="form-control" id="inputAddress2" placeholder="Address 2">
                  @error('address2')
                <p>{{$message}}</p>
                @enderror
                </div>
                <div class="col-md-6">
                  <input type="text"name="city" class="form-control" id="inputCity" placeholder="City">
                  @error('city')
                <p>{{$message}}</p>
                @enderror
                </div>
                <div class="col-md-2">
                  <input type="text" name="zipcode" class="form-control" id="inputZip" placeholder="Zip Code">
                  @error('zipcode')
                <p>{{$message}}</p>
                @enderror
                </div>
                
               
                <div class="col-md-6">
        <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Phone Number">
        @error('phone')
                <p>{{$message}}</p>
                @enderror
                
    </div>
    <div class="col-md-2">
        <input type="number" name="age" class="form-control" id="inputAge" placeholder="Age">
        @error('age')
                <p>{{$message}}</p>
                @enderror
        
    </div>
    <div class="col-md-4">
        <input type="text" name="country" class="form-control" id="inputCountry" placeholder="Country">
        @error('country')
                <p>{{$message}}</p>
                @enderror
    </div>
    
    <div class="text-center col-12">
        <button type="submit" class="btn btn-secondary ml-400">Sign Up</button>
    </div>
              </form>
        </section>

    <section>
      @foreach($showformdata as $items)

    <p class="btn btn-primary"> {{ $items->id }} </p>
    <p class="btn btn-primary"> {{ $items->email }} </p> 
    <p class="btn btn-primary"> {{ $items->password }} </p> 
     <a href="{{ route('edit', $items->id) }}" class="btn btn-danger"> Edit </a> 
    <br>

      @endforeach
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>