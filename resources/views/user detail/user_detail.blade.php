@extends('layouts.main')

@section('main-section')
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
        integrity="sha512-x7JROg1bfo6rXdDIz+IcAR4/bI/DQZOwuIlLFE3fHcDKBhwrMhZv8XrccrmI6OBTxRX/kwDZ0PIUUbP2lNc5Cw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">User Detail</p>

                                    <form action="{{ route('user_add.store') }}" class="mx-1 mx-md-4"  method="POST">
                                        @csrf

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" name="name" value="{{ Auth::user()->name }}" id="form3Example1c" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            {{-- <i class="fas fa-envelope "></i> --}}
                                            <i class="fa-solid fa-phone fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" name="phone_number" id="form3Example3c" class="form-control" />
                                                <label class="form-label" for="form3Example3c">Phone Number</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fa-solid fa-address-card fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <textarea class="form-control" rows="3" name="address" placeholder="Enter Your Address"></textarea>
                                                <label class="form-label" for="form3Example4c">address</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fa-solid fa-location-dot fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" name="country" id="form3Example3c" class="form-control" />
                                                <label class="form-label" for="form3Example3c">Country</label>
                                            </div>

                                            <i class="fa-solid fa-location-dot fa-lg m-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" name="state" id="form3Example3c" class="form-control" />
                                                <label class="form-label" for="form3Example3c">State</label>
                                            </div>

                                            <i class="fa-solid fa-location-dot fa-lg m-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" name="city" id="form3Example3c" class="form-control" />
                                                <label class="form-label" for="form3Example3c">City</label>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
        integrity="sha512-kZKnID21//xaFiEISBXk6V1AdFCPOIpHhuEdBMprlAHdb0ICnvgSLsb89DAixlLJDuPyvNR+hN3lPvsFNn5XLg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
