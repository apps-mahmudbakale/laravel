<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rima Agricultural Comodity Exchange') }} | Homepage</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
    <div class="go-top"><i data-feather="arrow-up"></i></div>

    <!-- Dark/Light Toggle -->
    <div class="dark-version">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let html ='';
            fetch('https://comxapp.afexnigeria.com/api/security-price/live/site?format=json')
            .then((res) => res.json())
            .then((data) => {
                console.log(data.data);
                let datas = data.data;
                datas.forEach(element => {
                    if(element.type === 'Sell'){
                        html +=`<li class="font-light"><span class="mx-2">${element.commodity_code}</span><span class="font-bold mx-2">${element.marketPrice.toLocaleString('en-US', { style: 'currency', currency: 'NGN' })}</span><span class="text-danger">${element.changePercentage}%</span></li>`;
                    } else{
                        html +=`<li class="font-light"><span class="mx-2">${element.commodity_code}</span><span class="font-bold mx-2">${element.marketPrice.toLocaleString('en-US', { style: 'currency', currency: 'NGN' })}</span><span class="text-success">${element.changePercentage}%</span></li>`;
                    }
                   
                });
                // console.log(html);
                document.getElementById('live-data').innerHTML = html;
            })
            
    </script>
</body>

</html>
