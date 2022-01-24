<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>@yield('title')</title>
  </head>
  <body>
    <div class="row">
        <div class="col-lg-2 bg-info min-vh-100">
            {{-- profile  --}}
            <div class="row bg-primary py-4">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-6 d-flex justify-content-center align-item-center">
                            <img src="" alt="avatar">
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col">
                                    Pawan Subedi
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    online
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- general  --}}
            <div class="row py-4 bg-info">
                <div class="col ">
                    <h4 class="text-center">General</h4>
                </div>
            </div>
            {{-- horizontal line  --}}
            <div class="row bg-info">
                <div class="col">
                    <hr class="border-top border-danger"> 
                </div>
            </div>
            {{-- DashBoard  --}}
            <div class="row bg-info pl-4">
                <div class="col">
                    <a href="" class="text-dark "><h4>Dashboard</h4></a>
                </div>
            </div>
            {{-- Users  --}}
            <div class="row pl-4">
                <div class="col">
                    <a href="" class="text-dark "><h4>Users</h4></a>
                </div>
            </div>
            {{-- movies  --}}
            <div class="row pl-4">
                <div class="col">
                    <a href="" class="text-dark "><h4>Movies</h4></a>
                </div>
            </div>
            {{-- payments  --}}
            <div class="row pl-4">
                <div class="col">
                    <a href="" class="text-dark"><h4>Paymentes</h4></a>
                </div>
            </div>
            {{-- Reviews  --}}
            <div class="row pl-4">
                <div class="col">
                    <a href="" class="text-dark"><h4>Reviews</h4></a>
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            {{-- nav bar  --}}
            <div class="row bg-info">
                <div class="col-lg-1 py-4 text-center">
                    <a href="" class="text-dark"><i class="fas fa-bars"></i></a>
                </div>
                <div class="col-lg-8">

                </div>
                <div class="col-lg-3 d-flex align-items-center justify-content-end">
                    <div class="dropdown bg-danger py-4 px-2">
                        <a class="text-dark font-weight-bold dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                          Pawan Subedi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- main content  --}}
            <div class="row">
                <div class="col min-vh-100">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>