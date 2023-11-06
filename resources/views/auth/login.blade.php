<x-auth>
    {{-- Backend Team: --}}
    {{-- 1. Show error message from session --}}
    {{-- 2.  --}}

<style>
    body{
        margin: 0%;
        padding: 0%;
        background: #F2F3FA;;
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
        margin-top:7% ;
            padding: 20px ;


background: linear-gradient(183deg, rgba(62, 239, 228, 0.85) -93.41%, rgba(42, 48, 96, 0.89) 103.36%, rgba(38, 45, 97, 0.85) 103.38%);

box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.30);
    }

    .custom-button{
        border: 1px solid #242b65;
        background: #2F387F;
        padding:10px
    }
    .custom-button:hover {
        background: #38449f;
    }
</style>














        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif


    {{-- <div class="header">
        <h3>It only takes a minute to register for your account</h3>


    </div> --}}




    <div class="container ">

        <div class="row align-items-center py-5">




            {{-- first part --}}


        <div class="col-md-10 col-lg-5 mx-auto">
            <form class="p-4 p-md-5 rounded-3" action="{{ route('auth.post-login') }}" method="POST">
            @csrf
            <h3 style="color: #242b65" class="col-md-3 mb-2">Log in </h3>


            <div class="form-floating mb-3">
                <input type="email" class="rounded-2 form-control" id="floatingInput" required name="email" placeholder="name@example.com">
                <label style="color: rgba(0, 0, 0, 0.46)"  for="floatingInput">Enter your email address</label>
            </div>

                <div class="input-group form-floating mb-3">
                    <input type="password" class="form-control rounded-2" id="password" name="password" placeholder="Password" />
                    <label style="color: rgba(0, 0, 0, 0.46)" for="floatingPassword">Enter your password</label>
                    <div  style="background: #F2F3FA" class="input-group-text border-0 text-dark ">
                    <input type="checkbox" id="showPasswordCheckbox">
                    <label for="showPasswordCheckbox" class="form-check-label">Show</label>
                    </div>
                </div>

            <p class="mt-1"><a style="color: #262D61; font-weight: 500;" class="link-opacity-200-hover" href="#">Forgotten password?</a></p>

            <div class="d-flex justify-content-center">
                <button  class="w-100 btn btn-lg btn-primary rounded-1 custom-button" type="submit">Log In</button>
            </div>

            <hr class="my-4">
            <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
            </form>

        </div>




{{-- right part --}}



        <div class="col-lg-6 text-center mx-auto">
            <div class="row">
            <div class="col-2 mx-auto d-none d-lg-block">
                <div style="  height: 450.168px; border-left: 1px solid #00000027;"></div>
            </div>
            <div class="col-lg-10 text-center mx-auto">
                <h1 style="font-size: 3rem; font-weight: 500; margin-top: 100px" class="display-3 lh-1 mb-4">Don’t have an account yet?</h1>
                <p class="fs-4">Manage your bookings and receive our latest news and offers just for you</p>
                <div class="d-flex justify-content-center">
                    <a href="{{ url('auth/register') }}" class="w-30 p-3 m-2 rounded-1 border-2 btn btn-outline-info" style="border: 2px solid #36408e; color: #36408e;">Create a new account</a>
                </div>

            </div>
            </div>
        </div>
        </div>
    </div>
    <hr class="my-4">



     <!-- Include Bootstrap CSS and JavaScript as shown in the previous example -->



     <script>
        const passwordInput = document.getElementById("password");
        const showPasswordCheckbox = document.getElementById("showPasswordCheckbox");

        showPasswordCheckbox.addEventListener("change", function () {
          if (this.checked) {
            passwordInput.type = "text"; // Show password
          } else {
            passwordInput.type = "password"; // Hide password
          }
        });
      </script>


</x-auth>
