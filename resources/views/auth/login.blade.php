<x-auth>
    {{-- Backend Team: --}}
    {{-- 1. Show error message from session --}}
    {{-- 2.  --}}

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif


   <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Azure DevOps Bootcamp</h1>
          <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
          <form class="p-4 p-md-5 m-4 border rounded-3 bg-body-tertiary" action="{{route('auth.post-login')}} " method="POST">

            @csrf
            <h3 class="mx-auto col-lg-3 col-md-1 col-sm-1 mb-4">Login</h3>

            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" required name="email"  placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPassword" required name="password" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <hr class="my-4">
            <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
          </form>
        </div>
      </div>
</x-auth>
