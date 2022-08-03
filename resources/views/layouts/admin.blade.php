<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title> @yield('title')- Rima Agricultural Commodity Exchange</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Rima Agricultural Commodity Exchange">
    <meta name="author" content="Mahmud Bakale">
    <meta name="description" content="Agricultural Commodity Exchange">
    <meta name="keywords" content="Commodity Exchange, Rima, Agricultural Exchange, Mahmud Bakale" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/quill.snow.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/summernote.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    @livewireStyles
    @include('sweetalert::alert')
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
    <div class="wrapper">
        @if(request()->is('email/verify'))
        @else
        @include('partials.sidebar')
        @endif
        <div class="main">
            @include('partials.menu')
            @yield('content')
            @include('partials.foot')
        </div>
    </div>
    <script src="{{ asset('js/admin.js') }}"></script>
    {{-- <script src="{{asset('js/quill.js')}}"></script> --}}
    <script src="{{ asset('js/summernote.min.js') }}"></script>
    @livewireScripts
    <script>
        // var quill = new Quill('#editor', {
        //   theme: 'snow'
        // });
        $(document).ready(function() {
            $('#summernote').summernote();
        });

        window.addEventListener('openBuyModal', function() {
            $('#defaultModalPrimary').modal('show');
        });
        window.addEventListener('openSellModal', function() {
            $('#defaultModalPrimary2').modal('show');
        });
    </script>
    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script>
        let Url = 'http://localhost:8000/api/'

        function payWithPaystack() {
            var handler = PaystackPop.setup({
                key: 'pk_test_30bbe756476a4c8b47a3df7a2201cd711b16ceb1', // Replace with your public key
                email: '{{ auth()->user()->email }}',
                amount: document.getElementById('amount').value *
                100, // the amount value is multiplied by 100 to convert to the lowest currency unit
                currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
                ref: '' + Math.floor((Math.random() * 1000000000) + 1),
                callback: function(response) {
                    //this happens after the payment is completed successfully
                    var reference = response.reference;
                    // alert('Payment complete! Reference: ' + reference);
                    // Make an AJAX call to your server with the reference to verify the transaction
                    fetch(Url + 'FundWallet', {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json, text/plain, */*',
                                'Content-type': 'application/json'
                            },
                            body: JSON.stringify({
                                user_id: '{{ auth()->user()->id }}',
                                amount: document.getElementById('amount').value,
                                reference: reference
                            })
                        })
                        .then((res) => res.json())
                        .then((data) => {
                            console.log(data);
                        })
                },
                onClose: function() {
                    alert('Transaction was not completed, window closed.');
                },
            });
            handler.openIframe();
        }
    </script>
</body>

</html>
