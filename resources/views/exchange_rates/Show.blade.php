<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exchange Rates List</title>
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/framework.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/master.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />

    <style>
    #linlk {
        margin-top: 130px;
        text-align: center;
        padding-bottom: 25px;
        color: white;
        nt-size: 25px;
    }
    </style>
</head>

<body>
    <div class="latest-news p-20 bg-white rad-10 txt-c-mobile m-5">
        <h2 class="mt-0 mb-20"></h2>
        @forelse($exchangeRates as $exchangeRate)
        <div class="news-row d-flex align-center">
            <img src="../p1.png" alt="">
            <div class="info">
                <h3> Currency From: {{ $exchangeRate->currency_from }}</h3>
                <p class="m-0 fs-14 c-grey"> Currency To :{{ $exchangeRate->currency_to }}</p>
            </div>
            <div class="btn-shape bg-eee fs-13 label"> {{ $exchangeRate->exchange_rate }}</div>
        </div>
        @empty
        <tr>
            <td colspan="4">No exchange rates available.</td>
        </tr>
        @endforelse
    </div>

    <script src="../assets/js/jquery-2.1.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../assets/js/scrollreveal.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="../assets/js/custom.js"></script>


</body>

</html>