<x-home>





        <div class="row align-items-center py-5">





            </div>





   {{-- search section --}}
   <div class="container  ">
    <div class=" milestone shadow p-0 mx-5 mb-5 pb-2 col-md-11 mx-auto  bg-body rounded-5 text-center text-md-start">
        <div class="d-flex flex-wrap ">
            <a style="background-color: #262d6100 ;border-radius:32px 0px 0px 0px" href="{{url('home/index')}}" class="btn p-3 rounded-5 text-center mb-3 mb-md-0 col-12 col-md-4">
                <i class="fas fa-plane mx-2"></i> Book a flight
            </a>
            <a style="background-color: #262d61" href="{{ route('checkin') }}" class="text-light btn p-2 rounded-0 px-4 text-center mb-3 mb-md-0 col-12 col-md-4">
                <i class="fas fa-check-circle mx-2"></i> Manage / Check in
            </a>

            <a style="background-color: #262d61 ;border-radius:0px 32px 0px 0px" href="{{ route('flightstatus') }}" class="text-light btn p-2 text-center col-12 col-md-4">
                <i class="fas fa-plane-arrival  mx-2 "></i> Flight status
            </a>
        </div>




    <div class="d-flex mt-4 mx-4 mb-4 p-0">
        <div class="form-check form-check-inline mx-4 ">
            <input class="fs-6   border-2 form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="fs-6 form-check-label" for="flexRadioDefault1">Return</label>
        </div>
        <div class="form-check form-check-inline mx-3 col-sm-3">
            <input class="fs-6 form-check-input  border-2" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="fs-6 form-check-label" for="flexRadioDefault2">One way</label>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 col-12 d-flex flex-wrap">
                <div class="form-floating mb-3 col-md-3 col-12">
                    <input type="text" class="form-control rounded-1 rounded-end-0 border-end-0" id="floatingInput1" placeholder="name@example.com">
                    <label for="floatingInput1">From &nbsp;&nbsp; <svg style="margin-left: 190px" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                        <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z"/>
                      </svg></label>

                </div>
                <div class="form-floating mb-3 col-md-2 col-12">
                    <input type="text" class="form-control rounded-1 rounded-end-0 border-end-0 rounded-start-0 border-start-0" id="floatingInput2" placeholder="name@example.com">
                    <label for="floatingInput2">To</label>
                </div>

                <div class="col-md-2 col-12">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control rounded-1 rounded-end-0 border-end-0 rounded-start-0 border-start-0" id="departureDate" placeholder="Select departure date">
                        <label for="departureDate">Departure Date</label>
                    </div>
                </div>
                <div class="col-md-2 col-12">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control rounded-1 border-end-0 rounded-end-0 rounded-start-0 border-start-0" id="returnDate" placeholder="Select return date">
                        <label for="returnDate">Return Date</label>
                    </div>
                </div>
                <div class="form-floating col-md-3   col-12">
                    <div class="form-floating mb-3">

                          <input type="text" class="form-control dropdown-toggle rounded-1 border-end-1 rounded-start-0  border-start-0 " id="passengerDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                          <ul class="dropdown-menu shadow  border-0 rounded-3 my-2  "style="height: 485px; width: 320px; background-color:#FFFFFF;" aria-labelledby="passengerDropdown">
                              {{-- dropdown --}}
                    <div class="passenger container  ">
                                <div class="row ">
                                    <div class="  pt-3 px-4  ">

                        <h5 style="color: #262D61">Passenger</h5>
                        <hr>

                        <!-- Passenger Section -->
                        <div class="d-flex   justify-content-between">
                            <div>
                                <h5 class="d-inline fs-6">Adult</h5>
                                <p style="font-size: 12px; color: rgba(13, 13, 13, 0.486)">12+ years</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="button" class="btn btn-outline-secondary rounded-3 btn-sm mx-0">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <h3 class="mx-3 my-0 fw-normal">1</h3>
                                <button type="button" class="btn btn-outline-secondary rounded-3 btn-sm mx-0">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Child Section -->
                        <div class="d-flex mb-0 justify-content-between">
                            <div>
                                <h5 class="d-inline fs-6">Child</h5>
                                <p style="font-size: 12px; color: rgba(13, 13, 13, 0.486)">2-11 years</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="button" class="btn btn-outline-secondary rounded-3 btn-sm mx-0">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <h3 class="mx-3 my-0 fw-normal">1</h3>
                                <button type="button" class="btn btn-outline-secondary rounded-3 btn-sm mx-0">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Infant Section -->
                        <div class="d-flex mb-2 justify-content-between">
                            <div>
                                <h5 class="d-inline fs-6">Infant</h5>
                                <p style="font-size: 12px; color: rgba(13, 13, 13, 0.486)">Under 2 years</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="button" class="btn btn-outline-secondary rounded-3 btn-sm mx-0">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <h3 class="mx-3 my-0 fw-normal">1</h3>
                                <button type="button" class="btn btn-outline-secondary rounded-3 btn-sm mx-0">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <h5 style="color: #262D61" class="mt-0">Class</h5>
                        <hr>

                        <!-- Class Selection -->
                        <div class="p-0 mb-2 form-check d-flex justify-content-between">
                            <label class="form-check-label fs-6" for="flexRadioDefault1">Economy Class</label>
                            <input class="form-check-input p-3 border-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        </div>

                        <div class="p-0 mb-3 form-check d-flex justify-content-between">
                            <label class="form-check-label fs-6" for="flexRadioDefault2">Business Class</label>
                            <input class="form-check-input p-3 border-2" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        </div>

                        <!-- Confirm Button -->
                        <div class="d-flex justify-content-center   col-12">
                            <button style="background-color: #DAB03C; padding: 10px 75px" class="shadow mx-1 my-1  rounded-5 text-light btn">Confirm</button>
                        </div>

                                </div>
                            </div>
                        </div>
                          </ul>
                        </div>

                        <label  for="floatingSelect">
                            Passenger / Class&nbsp;&nbsp;
                            <svg style="margin-left: 108px" xmlns="http://www.w3.org/2000/svg" width="20 "height="20" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                              </svg>
                        </label>


                      </div>




            </div>

        </div>
        <div class=" d-flex col-sm-12  justify-content-end ">
            <button style="background-color: #262D61" class="p-3 shadow px-5 mx-1 my-1 rounded-5 text-light  btn ">Search flights</button>
        </div>

    </div>
</div>








</x-home>

