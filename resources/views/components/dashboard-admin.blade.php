<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav style="background-color: #262D61" class="navbar navbar-expand-lg fixed-top navbar-light  p-2">

        <div class="container-fluid">
          <a href="">  <img src="{{url('images/Screenshot 2023-11-01 012013.png')}}" width="90" alt=""></a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">

            <ul class="navbar-nav me-auto  px-5  my-2 my-lg-1 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item mt-1 px-3">
                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item mt-1 px-3">
                <a class="nav-link active text-white" aria-current="page" href="#">About</a>
              </li>
              <li class="nav-item mt-1 px-3">
                <a class="nav-link active text-white" aria-current="page" href="#">Services</a>
              </li>
              <li class="nav-item mt-1 px-3">
                <a class="nav-link active text-white" aria-current="page" href="#">Contact us</a>
              </li>

            </ul>
            <form class="d-flex">
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 px-4 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                      <li class="nav-item">
                        <a  class="btn btn-sm mt-1 p-1   btn-outline text-white"aria-current="page" href="#"></i><svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 10px" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>Sign up</a>


                      </li>

                      <div class="col-md-1">
                        <div style="  border-left: 2px solid #ffffff74;
                        height: 60%;
                        margin: 13px;
                        padding: 0;
                      " class="vertical-line"></div>
                      </div>

                      <li class="nav-item mt-1 ">
                        <a class="btn btn-sm  mx-2 p-1 btn-outline text-white"aria-current="page" href="#">Login </a>           </ul>
                    </div>

            </form>
          </div>
        </div>
      </nav>
    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30"class=" text-primary my-2 mx-2" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V2Zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6ZM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1H2Z"/>
              </svg>
            <a class="navbar-brand fw-bold display-4 " href="{{url('dashboard')}}">IMS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <form class="d-flex pt-3 pb-3 ">
                <ul class="navbar-nav text-primary  my-2 fw-bold ">
                    <li class="nav-item  p-2 mx-2">Hello, {{ auth()->user()->name }}</li>
                    <li class="nav-item  p-2 mx-2"><a href="{{ url('admin/') }}" style="text-decoration: none" class="text-black">Dashboard</a></li>
                    <li class="nav-item  p-2 mx-2"><a href="{{ url('admin/profile') }}" style="text-decoration: none" class="text-black">Profile</a></li>
                    <li class="nav-item  p-2 mx-2"><a href="{{ url('auth/logout') }}" style="text-decoration: none" class="text-black">Logout</a></li>
                </ul>
            </form>
          </div>
        </div>
      </nav> --}}
    <div class="container">
      {{ $slot }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
