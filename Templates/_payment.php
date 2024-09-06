<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Popup Example</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section id="payment">
    <div class="container">
        <form id="paymentForm" action="" class="rounded-4">
            <div class="row">
                <div class="col">
                    <h3 class="title font-rubik">Billing Details</h3>
                    <div class="inputBox">
                        <span>Full Name:</span>
                        <input type="text" placeholder="Full Name">
                    </div>
                    <div class="inputBox">
                        <span>Email:</span>
                        <input type="email" placeholder="@gmail.com">
                    </div>
                    <div class="inputBox">
                        <span>Address:</span>
                        <input type="text" placeholder="Address">
                    </div>
                    <div class="inputBox">
                        <span>City:</span>
                        <input type="text" placeholder="City">
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <span>State:</span>
                            <input type="text" placeholder="State">
                        </div>
                        <div class="inputBox">
                            <span>Zip Code:</span>
                            <input type="text" placeholder="*****">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3 class="title font-rubik">Payment</h3>
                    <div class="inputBox">
                        <span>Cards Accepted:</span>
                        <img src="./assets/payment.png" alt="Payment">
                    </div>
                    <div class="inputBox">
                        <span>Name on Card:</span>
                        <input type="text" placeholder="Card Name">
                    </div>
                    <div class="inputBox">
                        <span>Credit Card Number:</span>
                        <input type="number" placeholder="1111-2222-3333-4444">
                    </div>
                    <div class="inputBox">
                        <span>Exp Month:</span>
                        <input type="text" placeholder="January">
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <span>Exp Year:</span>
                            <input type="number" placeholder="2024">
                        </div>
                        <div class="inputBox">
                            <span>CVV:</span>
                            <input type="text" placeholder="***">
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" id="popupButton" class="submit-btn btn btn-lg">
            <div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title " id="exampleModalLabel">Payment Successful.!!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Thank you...Your payment has been Successfully done.
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Oder Cancel</button>
                            <button type="button" class="btn btn-success" data-dismiss="modal">Continue</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.getElementById('paymentForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting
        $('#popupModal').modal('show'); // Show the modal
    });
</script>
</body>
</html>
