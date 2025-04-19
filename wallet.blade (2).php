@extends('user.layouts.backmain')
@section('main-content')
@section('page-title')
    Add Points
@endsection
@php 
$details = adminDetailsGet();
@endphp
<div class="authentication-wrapper authentication-basic bg-white">
    <div class="authentication-inner container">
        <form action="{{ route('user/addmoney') }}" method="POST">
            @csrf
            <div class="card mt-3">
                <div class="card-body p-0">
                    <div class="wallet-details">
                        <div class="wallet-amount gradient-btn text-white rounded px-4 py-2">
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-white p-2 rounded-circle">
                                    <img src="{{ asset('assets/img/wallet.svg') }}" style="width:35px">
                                </div>
                                <div>
                                    <p class="bottom-margin">Available Balance</p>
                                    <p class="bottom-margin"><strong>₹ {{ walletBalance() }}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body p-0">
                    <div class="add-amount">
                        <div class="d-flex">
                            <div class="gradient-btn text-white w-50 rounded" style="align-content: center; text-align: center;">
                                <p class="m-0">Enter Point</p>
                            </div>
                            <div class="input-group top-margin">
                                <input type="number" class="form-control text-dark border-0 mt-3" name="amount" placeholder="Enter Amount To Add" id="amount">
                            </div>
                        </div>

                        <!-- Quick Amount Boxes -->
                        <div class="mt-3">
                            <div class="d-flex flex-wrap gap-3 justify-content-center">
                                <button type="button" class="btn gradient-btn text-white" onclick="setAmount(500)">₹ 500</button>
                                <button type="button" class="btn gradient-btn text-white" onclick="setAmount(1000)">₹ 1000</button>
                                <button type="button" class="btn gradient-btn text-white" onclick="setAmount(2000)">₹ 2000</button>
                                <button type="button" class="btn gradient-btn text-white" onclick="setAmount(3000)">₹ 3000</button>
                                <button type="button" class="btn gradient-btn text-white" onclick="setAmount(5000)">₹ 5000</button>
                                <button type="button" class="btn gradient-btn text-white" onclick="setAmount(10000)">₹ 10000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-transparent container bg-transparent mt-5" style="box-shadow: none !important">
                <div class="card-body p-0">
                    <h4 class="m-0 text-dark"><b>Select Method</b></h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="form-check d-flex align-items-center rounded">
                            <input class="form-check-input paymentupi me-2" type="radio" name="flexRadioDefault" id="phone_pay" checked value="phonepe">
                            <img src="{{ asset('assets/img/icons/phonepay.svg') }}" alt="Phone Pay" class="payment-icon">
                        </div>
                        <div class="form-check d-flex align-items-center rounded">
                            <input class="form-check-input paymentupi me-2" type="radio" name="flexRadioDefault" id="paytm" value="paytmmp">
                            <img src="{{ asset('assets/img/icons/paytm.svg') }}" alt="Paytm" class="payment-icon">
                        </div>
                        <div class="form-check d-flex align-items-center rounded">
                            <input class="form-check-input paymentupi me-2" type="radio" name="flexRadioDefault" id="upi" value="upi">
                            <img src="{{ asset('assets/img/icons/upi.svg') }}" alt="UPI" class="payment-icon">
                        </div>
                    </div>
                    <a href="javascript:void(0)" value="Add Fund" class="mt-4 btn gradient-btn text-white form-control w-100" id="upipay">Add Point</a>
                </div>

            </div>
        </form>
    </div>
</div>
<style>
    .payment-method .form-check {
        flex: 1;
    }
    
    .payment-method .form-check .payment-icon {
        height: 40px; /* Adjust size as needed */
        width: auto;
    }
    
    .payment-method .form-check-label {
        display: none; /* Hide the label */
    }
    .form-check img{
        width:70px;
    }

</style>
<!-- JavaScript Function -->
<script>
    function setAmount(value) {
        document.getElementById('amount').value = value;
    }
</script>

<!-- Optional Styling -->
<style>
    .btn {
        width: 30%; /* Ensures three buttons per row */
        padding: 10px 0;
        text-align: center;
    }

    .d-flex.flex-wrap {
        row-gap: 10px; /* Adds spacing between rows */
    }
</style>


<script>
    var paymentMethod = "phonepe";
    var pa = "";
    var phonepay, paytm, gpa;
    $(document).on("click", ".paymentupi", function(){
        paymentMethod = $(this).val();
        // alert(paymentMethod);
    });
    $(document).on("click", "#upipay", function(){
        
        var amount = $("#amount").val()
        if(!(amount >= {{$details['adminDetails'][0]['min_deposit_rate']}}  && amount <= {{ $details['adminDetails'][0]['max_deposite_rate']}})){
            toastr.options =
            {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr.error("Money add between " + {{$details['adminDetails'][0]['min_deposit_rate']}} + " - "  + {{ $details['adminDetails'][0]['max_deposite_rate']}});
        }
        else{
        $.ajax({
            url: "https://tara567result.xyz/api/admin_details.php",
            type: 'GET',
            async: false,
            dataType: 'json',
            success: function(res) {
                paytm = res['adminDetails'][0]['paytm_upiid'];
                phonepay = res['adminDetails'][0]['phonpe_upiid'];
                gpay = res['adminDetails'][0]['googlepay_upiid'];
                if(paymentMethod =='phonepe'){
                    pa = phonepay
                }
                else if(paymentMethod =='paytmmp'){
                    pa = paytm
                }
                else{
                    pa = gpay
                }
            }
        });
        window.location.href = `${paymentMethod}://pay?pa=19640210001899@ucobank&pn=FNAME%20SNAME%20K&cu=INR&am=${amount}`;

        // console.log(paymentMethod  +"://pay?pa="+pa+"&amp;&Status=SUCCESS&amp;&pn=FNAME SNAME K&amp&;cu=INR&am="+amount)
        $.ajax({
          type: "POST",
          url: "{{route('user/addmoney')}}",
          data: {
              "_token": "{{ csrf_token() }}",
              'amount': amount
          },
          success: function(msg){
          toastr.options ={
            "closeButton": false,"debug": false,"newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-center",
            "preventDuplicates":false,"onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr.success("Money Added Request Sent Successfully");
            //   location.reload();
          },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true,
                "positionClass": "toast-bottom-center",
            }
            toastr.error("Something went wrong...");
          }
        });
}
    });
</script>  
@endsection