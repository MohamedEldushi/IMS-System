<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSA5Jz6P1C5F5SL5r5M" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSA5Jz6P1C5F5SL5r5M" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet">



</head>


<style>
    body{
        margin: 0px;
        padding: 0px;
        background-color: #F2F3FA;
    }
    h3{
        color: #FFF;


font-size: 2rem;
font-style: normal;
font-weight: 400;
line-height: normal;
text-align: center
    }

    .header{
        margin-top:8% ;
            padding:7% 0px ;

            color: #FFF;
background: linear-gradient(183deg, rgba(62, 239, 228, 0.85) -93.41%, rgba(42, 48, 96, 0.89) 103.36%, rgba(38, 45, 97, 0.85) 103.38%);

box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.30);
    }
/* Add this CSS to your stylesheet or <style> block */
.icon {
    transition: transform 0.2s;

    color: #c4f3fa; /* Initial icon color */
}

.icon:hover {
        transform: rotate(45deg);
        color: #f4d1369f; /* New color on hover */
    }

    /* Style the menu list items and their hover effects */
    .menu .nav-link {
    text-decoration: none;
    position: relative;
    color: #fff; /* Default text color */
    transition: color 0.3s;
    }

    .menu .nav-link:after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 100%;
    height: 2px;

    background-color: #f4d1369f; /* Underline color */
    transform: scaleX(0); /* Initial underline scale (hidden) */
    transform-origin: right;
    transition: transform 0.3s ease-in-out;
    }
    #aa {
    color: white;
    position: relative;
    transition: color 0.3s;
    }

    #aa::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 2px;
    background: transparent;
    /* transition: background 0.3s, width 0.3s; */
    }

    #aa:hover {
    color: #f4d1369f;
    }

    #aa:hover::after {
    background: #f4d1369f; /* Underline color */
    width: 100%;
    }


    .menu .nav-link:hover:after {
    transform: scaleX(1); /* Show the underline on hover */
    transform-origin: left;
    color: #799498
    }
    /* Style the list items and their hover effects */
    .nav.flex-column li {
    position: relative;
    margin: 0;
    padding: 0;
    list-style: none;
    transition: color 0.3s; /* Smooth transition for text color */
    }

    .nav.flex-column a {
    position: relative;
    color: #ffffffb3; /* Default text color */
    text-decoration: none;
    transition: transform 0.3s;
    }

    .nav.flex-column a:hover {
    color: #f4d1369f; /* Text color on hover */
    text-decoration: underline; /* Underline the text on hover */
    }


    .last{
        color: rgba(220, 220, 225, 0.538);
    }



</style>
<body>


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
                    <li class="nav-item p-2 mx-2"><a href="{{ url('dashboard/application') }}" style="text-decoration: none" class="text-black">Apply</a></li>
                    <li class="nav-item p-2 mx-2"><a href="{{ url('dashboard/') }}" style="text-decoration: none" class="text-black">Dashboard</a></li>
                    <li class="nav-item  text-primary  p-2 mx-2"><a href="{{ url('dashboard/profile') }}" style="text-decoration: none" class="text-black">Profile</a></li>
                    <li class="nav-item p-2 mx-2"><a href="{{ url('auth/logout') }}" style="text-decoration: none" class="text-black">Logout</a></li>
                </ul>
            </form>
          </div>
        </div>
      </nav> --}}


      <style>
        .header {
            text-align: center; /* Center-align the text within the div */
        }

        .header h1 {
            text-align: left;
            margin-left: 310px; /* Align the h1 element to the left */
        }
        h4{
            text-align: left;
            margin-left: 310px;
            color: #f4d1369f;

        }

    </style>

    <div class="header">
        <h4 class="fw-light">Welcome!</h4>
        <h1>{{auth()->user()->name}}</h1>
        <h5 style="text-align: left;
        margin-left: 310px;" class="my-0 fs-3 fw-normal mt-5 ">0 Total Miles</h5>
        <p style="text-align: left;
        margin-left: 310px;">CC - TK637666571</p>
    </div>

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
                        {{-- <a  class="btn btn-sm mt-1 p-1   btn-outline text-white"aria-current="page" href="#"></i><svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 10px" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>Sign up</a> --}}


                      </li>

                      <div class="col-md-1">
                        <div style="  border-left: 2px solid #ffffff74;
                        height: 60%;
                        margin: 11px;
                        padding: 0;
                      " class="vertical-line"></div>
                      </div>

                      <li class="nav-item mt-1 ">
                        <a class="btn btn-sm  mx-2 p-1 btn-outline text-white"aria-current="page" href="#"></i><svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 10px" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>Hello, {{ auth()->user()->name }} </a>           </ul>
                    </div>

            </form>
          </div>
        </div>
      </nav>

      <div class="container">


          {{ $slot }}
        </div>

    <footer style="background-color: #262D61 ;border:5px solid rgba(197, 48, 48, 0);border-radius: 60px 60px 0px 0px;"class="text-light py-5 pb-0">
        <div class="container">
                <div class=" row">

                    <div class="container">
                        <div class="row">
                        <div class="col-12 col-md-6 col-lg-3 mb-3">
                            <h5>Medsky Airways</h5>
                            <ul class="nav flex-column mt-4">
                                <li class="nav-item mb-2">
                                    <div class="effect-one"><a href="#" class="nav-link p-0 ">About us</a></div>
                                </li>
                                <li class="nav-item mb-2">
                                    <div class="effect-one"><a href="#" class="nav-link p-0 ">Features</a></div>
                                </li>
                                <li class="nav-item mb-2">
                                    <div class="effect-one"><a href="#" class="nav-link p-0 ">Careers</a></div>
                                </li>
                                <li class="nav-item mb-2">
                                    <div class="effect-one"><a href="#" class="nav-link p-0 ">Travel Agents</a></div>
                                </li>
                                <li class="nav-item mb-2">
                                    <div class="effect-one"><a href="#" class="nav-link p-0 ">Our commitment to you</a></div>
                                </li>
                            </ul>

                        </div>

                        <div class="col-12 col-md-6 col-lg-3 mb-3">
                            <h5>Site Support</h5>
                            <ul class="nav flex-column mt-4 ">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Login Help</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Booking Information</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Accessibility</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Site Map</a></li>
                            </ul>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3 mb-3">
                            <h5>Help</h5>
                            <ul class="nav flex-column mt-4  ">
                            <li class="nav-item mb-2"><a   href="#" class=" nav-link p-0 ">Contact us</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Comment/Complaint</a></li>
                            </ul>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3 mb-3 mt-3 ">
                            <div class="d-flex justify-content-end " >

                            <a href="">  <img src="{{url('images/Screenshot 2023-11-01 012013.png')}}" width="220" alt=""></a>

                        </div>


                        </div>
                        </div>
                    </div>



                    <div class="container pb-0 mt-5">

                        {{-- <p class="fw-light   ">© Medsky Airways Limited. All rights reserved.</p>
                        {{-- <h5 class="d-inline d-flex justify-content-end d-inline">Contact with us</h5>
                        <p class=" d-inline d-flex justify-content-end">Share your experience.</p> --}}
                        {{-- <div class="d-inline d-flex justify-content-end">
                            <ul class="list-unstyled d-flex">
                                <li class="ms-0"><a class="link-dark" href="#"><i class="fab fa-instagram fa-2x text-light"></i></a></li>
                                <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-facebook fa-2x text-light"></i></a></li>
                                <li class="ms-3"><a class "link-dark" href="#"><i class="fab fa-linkedin fa-2x text-light"></i></a></li>
                                <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-twitter fa-2x text-gray"></i></a></li>
                            </ul>
                        </div>  --}}

                        <div  class="d-flex flex-column flex-sm-row justify-content-between ">
                            <p style="color: rgba(255, 255, 255, 0.589);" class="fw-light">© Medsky Airways Limited. All rights reserved.</p>
                            <ul  class="list-unstyled d-flex  ">
                                <li class="ms-0 "><a class="link-dark" href="#"><i class="fab fa-instagram fa-2x  icon   "></i></a></li>
                                <li style="padding-left:30px" class="  "><a class="link-dark" href="#"><i class="fab fa-facebook fa-2x  icon"></i></a></li>
                                <li style="padding-left:30px" class="  "><a class "link-dark" href="#"><i class="fab fa-linkedin fa-2x  icon"></i></a></li>
                                <li style="padding-left:30px" class=" "><a class="link-dark" href="#"><i class="fab fa-twitter fa-2x  icon"></i></a></li>
                            </ul>
                        </div>






                        <div class="d-flex flex-column flex-md-row justify-content-md-between py-4 my-2 border-top">
                        <div  class="last d-flex flex-wrap text-light">
                            <div  class=" last fw-light order-3 order-md-1 p-2">Cookie policy</div>
                            <div  class="last fw-light order-2 order-md-2 p-2">Accessibility</div>
                            <div class="last fw-light order-1 order-md-3 p-2">Privacy</div>
                            <div class="last fw-light order-1 order-md-4 p-2">Customer service commitment</div>
                            <div class="last fw-light order-1 order-md-5 p-2">Conditions for carriage</div>
                            <div class="last fw-light order-1 order-md-6 p-2">Legal</div>
                            <div class="last fw-light order-1 order-md-8 p-2">Optional services and fees</div>
                            <div class="last fw-light order-1 order-md-7 p-2">Tarmac delay plan</div>
                        </div>
                        </div>
                    </div>



            </div>
            </footer>
            </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



        </body>
</html>
