<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="<KEY>" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class=" px-4 py-5 my-5 text-center mt-5">


        <svg xmlns="http://www.w3.org/2000/svg"  width="45" height="45"class="  mt-5 text-primary mb-4 my-2 mx-2" fill="currentColor" class=" bi bi-copy" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V2Zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6ZM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1H2Z"/>
          </svg>

        <h1 class="display-5 fw-bold text-body-emphasis mt-3  mb-5">Welcome to <span class="text-primary ">IMS</span> System</h1>

        <div class="col-lg-8 mx-auto">

          <p style="font-size:19px" class="  fw-bold  text-body-emphasis mb-4">Our internship website offers a user-friendly platform where applicants can effortlessly apply for internships by submitting a comprehensive online form, while administrators benefit from a dedicated dashboard for efficient application review and management. Applicants can easily track the status of their submissions, receive real-time updates, and ensure their applications are under consideration. Administrators have the capability to thoroughly evaluate applications, make informed decisions on approvals or rejections, and maintain organized records. Privacy and data security are paramount, ensuring a secure and seamless experience for both applicants and administrators throughout the internship application process.</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center ">

            <a href="{{route('auth.register')}}" class="btn btn-primary mt-3  btn-lg px-5 gap-3"> Register</a>
            <a href="{{ route('auth.login') }}" class="btn btn-outline-secondary mt-3 btn-lg px-5 mx-3   ">Login</a>



          </div>


        </div>
      </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
