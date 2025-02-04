<title>Jagran Lakecity University</title>
<link rel="stylesheet" href="feepage/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<body>



    <a href="{{ url('/') }}"><img class="logo" src="wp-content/uploads/2023/08/jlu-logo-70.png"
            alt=""></a>
    <div class="container emp-profile">

        <div class="row">
            <div class="col-md-3">
                <div class="side-bar">
                    <div class="side-heading">
                        <i class="fa-solid fa-user"></i>
                        <h6>Profile Details</h6>
                    </div>
                    <div class="side-heading">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <a href="{{ route('logout') }}" class="logout">

                            <h6>Logout</h6>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="bigbox">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="profile-img">
                                <img src="/arya.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="profile-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="outbox">
                                            <div class="innerbox">
                                                <p class="heading">Student Id</p>
                                                <p>0146mba171020</p>
                                            </div>
                                            <div class="innerbox">
                                                <p class="heading">Name</p>
                                                <p>Arya Khare</p>
                                            </div>
                                            <div class="innerbox">
                                                <p class="heading">Admission Year</p>
                                                <p>2022</p>
                                            </div>
                                            <div class="innerbox">
                                                <p class="heading">Admission No.</p>
                                                <p>202240700369
                                                </p>
                                            </div>
                                            <div class="innerbox">
                                                <p class="heading">E-mail</p>
                                                <p>kharearya58@gmail.com</p>
                                            </div>
                                            <div class="innerbox">
                                                <p class="heading">Course</p>
                                                <p>MBA</p>
                                            </div>
                                            <div class="innerbox">
                                                <p class="heading">College Name</p>
                                                <p>Jagran Lakecity University
                                                </p>
                                            </div>
                                            <div class="innerbox">
                                                <p class="heading">Course Type</p>
                                                <p>Post Graduate</p>
                                            </div>
                                            <div class="innerbox">
                                                <p class="heading">Father Name</p>
                                                <p>Mukesh Khare</p>
                                            </div>
                                            <div class="innerbox">
                                                <p class="heading">Mother Name</p>
                                                <p>Abhilasha Khare
                                                </p>
                                            </div>
                                            <div class="innerbox">
                                                <p class="heading">Academic Year</p>
                                                <p>2024</p>
                                            </div>
                                            <div class="innerbox  fee-heading">
                                                <p class="text-center">FEE Payable
                                                </p>
                                            </div>
                                            <div class="innerbox">
                                                <p class="heading">Semester Fees</p>
                                                <p class="">77,500</p>
                                            </div>
                                            <div class="innerbox">
                                                <p class="heading">Late Fees</p>
                                                <p class="">0</p>
                                            </div>
                                            <div class="innerbox">
                                                <p class="heading">Total Fees</p>
                                                <p class="">77,500</p>
                                            </div>
                                            <div class="innerbox">
                                                <p class="heading">Payment Mode</p>
                                                <div class="selection">
                                                    <input type="radio" name="paymode" id="card">
                                                    <label for="card">Online Payment (Netbanking, Credit Card/Debit
                                                        Card)</label><br>
                                                    <input type="radio" name="paymode" id="upi">
                                                    <label for="upi">UPI</label>
                                                </div>
                                            </div>
                                            <div class="innerbox fee-pay-btn">
                                                <button type="button" class="pay-button" data-toggle="modal"
                                                    data-target="#staticBackdrop">Proceed for Fee
                                                    Payment -></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<div class="modal fade" id="cardPaymentModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="cardPaymentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body ">

                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-uppercase">Pay Now</span>
                    <i class="fa fa-close close" data-dismiss="modal"></i>
                </div>

                <div class="row mt-3">

                    <div class="col-md-6">

                        <div class="d-flex flex-column">
                            <small>Student</small>
                            <span class="font-weight-bold">Arya Khare</span>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column">
                            <small>Enrollment No</small>
                            <span class="font-weight-bolder">0146mba171020</span>
                        </div>

                    </div>

                </div>

                <div class="mt-3 d-flex flex-column">

                    <small>Class</small>
                    <span class="font-weight-bolder">MBA</span>
                </div>
                <div class="modal-box">
                    <div class="modal-heading">
                        <p>You have initiated the following transaction for year 2024 - 2025</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="outbox">
                                <!-- <div class="innerbox">
                                    <p class="heading">Transaction ID</p>
                                    <p>T7A6B4C1D9E2F3G8H0J1K</p>
                                </div> -->
                                <div class="innerbox">
                                    <p class="heading">Amount</p>
                                    <p>77,500</p>
                                </div>
                                <div class="innerbox">
                                    <p class="heading">Payment Mode</p>
                                    <p>Online Payment (Netbanking, Credit Card/Debit
                                        Card)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="mt-3">
                    <small>Payment Plan</small>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Full Payment
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 text-center fee align-items-center">
                    <h3 class="mb-0 font-weight-light">Rs. 77,500</h3>
                </div> -->
                <div class="mt-3 mr-2">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="inputbox">
                                <small>Card Number</small>
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox">
                                <small>Card Name</small>
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 mr-2">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <div class="inputbox">
                                        <small>Date</small>
                                        <input type="text" class="form-control" name="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputbox">
                                        <small>Month</small>
                                        <input type="text" class="form-control" name="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox">
                                <small>CVV</small>
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>
                        <a type="button" class="" id="sendOtpButton">Send otp</a>
                        <div class="col-md-4 offset-md-4 mt-3">
                            <div class="inputbox">
                                <small>Enter otp</small>
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mr-2 mt-4">
                <div class="mt-3 mr-2 d-flex justify-content-end align-items-center">
                    <button class="ml-2 btn btn-primary pay" id="payNowButton" disabled>PAY NOW</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="upiPaymentModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="upiPaymentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body ">

                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-uppercase">Pay Now</span>
                    <i class="fa fa-close close" data-dismiss="modal"></i>
                </div>

                <div class="row mt-3">

                    <div class="col-md-6">

                        <div class="d-flex flex-column">
                            <small>Student</small>
                            <span class="font-weight-bold">Arya Khare</span>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column">
                            <small>Enrollment No</small>
                            <span class="font-weight-bolder">0146mba171020</span>
                        </div>

                    </div>

                </div>

                <div class="mt-3 d-flex flex-column">

                    <small>Class</small>
                    <span class="font-weight-bolder">MBA</span>
                </div>
                <div class="modal-box">
                    <div class="modal-heading">
                        <p>You have initiated the following transaction for year 2024 - 2025</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="outbox">
                                <div class="innerbox">
                                    <p class="heading">Amount</p>
                                    <p>77,500</p>
                                </div>
                                <div class="innerbox">
                                    <p class="heading">Payment Mode</p>
                                    <p>UPI/PhonePe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 mr-2">
                    <div class="row g-2">
                        <div class="col-md-12">
                            <div class="inputbox">
                                <small><b>Account Holder Name : </b></small>
                                <p>Jagran Lakecity University</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox">
                                <small><b>Account No. : </b></small>
                                <p>3271192532

</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox">
                                <small><b>IFSC Code : </b></small>
                                <p>CBIN0282036
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('payNowButton').addEventListener('click', function () {
        Swal.fire({
            title: 'Processing Payment',
            text: 'Please wait...',
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        setTimeout(() => {
            Swal.close();

            $('#staticBackdrop').modal('hide');
            setTimeout(() => {
                Swal.fire({
                    title: 'Transaction Successful!',
                    html: 'Fees of Rs. 77,500 has been paid successfully.<br><strong>Transaction Id :</strong><b>T7A6B4C1D9E2F3G8H0J1K</b>',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            }, 300);
        }, 500);
    });

</script>

<script>
    document.getElementById('sendOtpButton').addEventListener('click', function () {
        setTimeout(function () {
            Swal.fire({
                title: 'Warning!',
                text: 'We are currently experiencing server issues with our bank. Please try using an alternative payment method. We apologize for the inconvenience and appreciate your understanding.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
        }, 3000);
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const payModeRadios = document.querySelectorAll('input[name="paymode"]');
        const proceedButton = document.querySelector(".pay-button");

        proceedButton.addEventListener("click", function () {
            let selectedMode = document.querySelector('input[name="paymode"]:checked');

            if (selectedMode) {
                if (selectedMode.id === "card") {
                    $("#cardPaymentModal").modal("show");
                } else if (selectedMode.id === "upi") {
                    $("#upiPaymentModal").modal("show");
                }
            }
        });
    });

</script>

<script>
    $('#upiPaymentModal').on('shown.bs.modal', function () {
        setTimeout(() => {
            Swal.fire({
                title: 'Transaction Successful!',
                html: 'Fees of Rs. 77,500 has been paid successfully.<br><strong>Transaction Id : </strong> <b>T7A6B4C1D9E2F3G8H0J1K</b>',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        }, 60000);
    });
</script>
