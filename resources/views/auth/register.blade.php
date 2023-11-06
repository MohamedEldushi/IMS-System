<x-auth>
    @error ('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

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
            text-align: center;
        }
            .underline-red {
            text-decoration: underline;
            color: #2c3bc3;
    }
        .header{
            margin-top:7% ;
            padding: 20px ;
            background: linear-gradient(183deg, rgba(62, 239, 228, 0.85) -93.41%, rgba(42, 48, 96, 0.89) 103.36%, rgba(38, 45, 97, 0.85) 103.38%);
            box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.30);
        }





    .custom-button {
        border: 1px solid #242b65;
        background: #2F387F;
        padding: 1.7% 9%;
        transition: background-color 0.3s;
    }

    .custom-button:hover {
        background: #38449f;
    }
</style>

    {{-- header --}}
    {{-- <div class="header">
        <h3>It only takes a minute to register for your account</h3>


    </div> --}}


<div class="container">

        <div class="row align-items-center  mx-auto g-lg-5 py-5">


            <form class="" action="{{ route('auth.post-register') }}" method="POST">
                @csrf
                <h3 style="text-align: left; color:#2F387F" class="col-lg-7 col-md-12 col-sm-12 mb-4 ">Miles & Smiles Membership Enrollment Details</h3>



            <div class="row pt-2 pb-2">

              <div class="col-md-6 ">
                <div class="form-floating mb-3 ">
                    <input type="text" class="rounded-2 form-control" id="floatingInput" required name="firstname" placeholder="firstname">
                    <label   for="floatingInput"> First name (as per passport)</label>
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input type="text" class="rounded-2 form-control" id="floatingInput" required name="surname" placeholder="surname">
                    <label   for="floatingInput">Surname (as per passport)</label>
                </div>

            </div>
            </div>

            <div class="row">

            <div class="col-md-6">
                <div class="form-floating mb-3">
                  <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                    <option selected>Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <label class="text-primary"  for="floatingSelectGrid">Nationality</label>
                </div>
              </div>

              <div class="col-md-3">
            <div class="form-floating mb-3">
                <input  type="date" class="form-control " id="floatingInput" placeholder="dd/mm/yyyy">
                <label   for="floatingInput">Date of Birth</label>
              </div>

            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                  <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                    <option selected>Select</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
                  <label class="text-primary"  for="floatingSelectGrid">Title</label>
                </div>
              </div>
            </div>


            <hr class=" my-4">
               {{-- contact details --}}

            <h3 style="text-align: left; color:#2F387F" class="col-lg-7 col-md-12 col-sm-12 mb-4 ">Contact details</h3>

            <div class="row">

                <div class="col-md-3">
                    <div class="form-floating mt-3">
                      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                        <option selected>Select</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                      </select>
                      <label class="text-primary"  for="floatingSelectGrid">Country / Region</label>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-floating mt-3">
                      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                        <option selected>Select</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                      </select>
                      <label class="text-primary"  for="floatingSelectGrid">City</label>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-floating mt-3">

                            <input type="text" class="rounded-2 form-control" id="floatingInput" required name="surname" placeholder="">
                            <label  for="floatingInput">Zip/Postal code</label>
                        </div>
                    </div>
            </div>


            <div class="form-floating mt-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="address">
                <label for="floatingInput">Address</label>
              </div>


              <div class="row">

                <div class="col-md-6">
                <div class="form-floating mt-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                  </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-floating mt-3">
                          <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                            <option selected>Select</option>

                          </select>
                          <label class="number"  for="floatingSelectGrid">Area code</label>
                        </div>
                      </div>

                        <div class="col-md-4">
                            <div class="form-floating mt-3">
                                <input type="number" class="form-control" id="floatingInput" placeholder="phone">
                                <label for="floatingInput">Phone number</label>
                              </div>
                        </div>



              </div>
              <div class="row">
               <div class="col-md-6">
                <div class="form-floating mt-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
               </div>
                <div class="col-md-6">
                 <div class="form-floating mt-3 mb-3">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Confirm Password</label>
                    </div>


              </div>




            </div>

            <hr class=" my-4">




{{--sign up info  --}}


<h3 style="text-align: left; color:#2F387F" class="col-lg-7 col-md-12 col-sm-12 mb-4 ">Sign up for our news and offers</h3>
<p>I would like to receive news and offers from:</p>
<div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
        Privilege Club partners
    </label>
  </div>
  <div class="form-check mb-4">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">
        Other Medsky alrways group entities
    </label>
  </div>

  <hr class=" my-4">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
    <label class="form-check-label col-md-5" for="flexCheckChecked">
        I agree to the Privilege Club <u class="underline-red"> Terms and Conditions</u>, and understand that my information will be processed in accordance with the Medsky Airways<u class="underline-red"> Privacy Notice</u>
    </label>
  </div>

  {{-- <hr class=" my-4"> --}}
  <div class="d-flex justify-content-center">
    <button class="m-5 btn btn-lg btn-primary rounded-1 custom-button" type="submit">Create an account</button>
</div>









            {{-- <div class="col-lg-7 text-center text-lg-start">
                <h1 style="font-size: 3rem; font-weight: 500; margin-top: 100px" class="display-3 lh-1 mb-4">Don’t have an account yet?</h1>            <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
            </div> --}}


              {{-- <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
              <hr class="my-4">
              <small class="text-body-secondary">By clicking Register, you agree to the terms of use.</small> --}}
            </form>


        </div>
    </div>

</x-auth>
