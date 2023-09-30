<x-dashboard-applicant>
    {{-- <h1>Name: {{ $user->name }}</h1>
    <h1>E-mail: {{ $user->email }}</h1> --}}

        <!-- Include Bootstrap CSS -->

            <div class="row  mt-5 justify-content-center">
                <div class="col-md-8">
                    <div class="card ">
                        <div class="card-header  p-3 ">
                            <h2>Profile</h2>
                        </div>
                        <div class="card-body py-4">
                            <h4 class="card-title">Name: {{ $user->name }}</h4>
                            <h4 class="card-title">E-mail: {{ $user->email }}</h4>
                        </div>
                    </div>
                </div>
            </div>





</x-dashboard-applicant>
