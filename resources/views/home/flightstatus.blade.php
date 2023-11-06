<x-home>



    {{-- search section --}}
    <div class="container  ">
        <div class=" milestone shadow p-0 mx-5 mb-5 pb-2 col-md-11 mx-auto  bg-body rounded-5 text-center text-md-start">
            <div class="d-flex flex-wrap ">
                <a style="background-color: #262d61 ;border-radius:32px 0px 0px 0px" href="{{url('home/index')}}" class="text-light btn p-3  text-center mb-3 mb-md-0 col-12 col-md-4">
                    <i class="fas fa-plane mx-2"></i> Book a flight
                </a>

                <a style="background-color: #262d61" href="{{ route('checkin') }}" class="text-light    btn p-2 rounded-0 px-4 text-center mb-3 mb-md-0 col-12 col-md-4">
                    <i class="fas fa-check-circle mx-2"></i> Manage / Check in
                </a>

                <a style="background-color: #262d6100 ;border-radius:0px 32px 0px 0px" href="{{ route('flightstatus') }}" class="text-dark btn p-2 text-center col-12 col-md-4">
                    <i class="fas fa-plane-arrival  mx-2 "></i> Flight status
                </a>
            </div>




            <div class="d-flex mt-4 mx-4 mb-4 p-0 pb-2 border-bottom">
                <a href="manage-booking-page.html" class="btn text-primary mx-4 fs-6">By route</a>
                <a href="check-in-page.html" class="btn  fs-6">By flight number</a>
            </div>


            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-12 col-12 d-flex flex-wrap">
                        <div class="form-floating mb-3 col-md-3 col-12">
                            <input type="text" class="form-control rounded-1 rounded-end-0 border-end-0" id="floatingInput1" placeholder="name@example.com">
                            <label for="floatingInput1">From &nbsp;&nbsp; </label>

                        </div>
                        <div class="form-floating mb-3 col-md-3 col-12">
                            <input type="text" class="form-control rounded-1 rounded-end-0 border-end-0 rounded-start-0 border-start-0" id="floatingInput2" placeholder="name@example.com">
                            <label for="floatingInput2">To</label>
                        </div>

                        <div class="col-md-3 col-12">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control rounded-1  rounded-start-0 border-start-0" id="departureDate" placeholder="Select departure date">
                                <label for="departureDate"> Date</label>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 mt-3 mt-md-0 ml-auto">
                            <button style="background-color: #262D61; margin-left:60px" class="p-3 shadow px-5  rounded-5 text-light btn">Search</button>
                        </div>
                        </div>





                    </div>
                </div>
            </div>






    </x-home>
