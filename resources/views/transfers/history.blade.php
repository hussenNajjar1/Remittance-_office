<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    <!-- Additional CSS Files -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-softy-pinko.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/card.css') }}">



    <style>
    #forms {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row-reverse;
        justify-content: center;
    }
    </style>

</head>

<body>

    @include('header')
    <h1 class="text-center text-red-900 mt-5">Transfer History</h1>

    <div id="forms">
        <!-- Move this div outside the loop -->

        @foreach($transfers as $transfer)

        <div class="container bg-primary to-r from-indigo-500 my-5 mx-1 p-5 rounded-3" style="width: 350px;">

            <ul class="list-unstyled text-center pt-3">

                <li class="mb-2 text-light">
                    <span class="fw-bold text-dark">الرقم</span><br>
                    {{ $transfer->id }}
                </li>

                <li class="mb-2 text-light">
                    <span class="fw-bold text-dark">الامرسل</span><br>
                    {{ $transfer->senderOffice->name }}
                </li>
                <li class="mb-2 text-light">
                    <span class="fw-bold text-dark">المستقبل</span> <br>
                    {{ $transfer->receiverOffice->name }}
                </li>
                <li class="mb-2 text-light">
                    <span class="fw-bold text-dark">المبلغ</span><br>
                    {{ $transfer->amount }}
                </li>
                <li class="mb-2 text-light">
                    <span class="fw-bold text-dark">التاريخ</span> <br> {{ $transfer->transfer_date }}
                </li>
            </ul>
        </div>

        @endforeach
    </div>

</body>

</html>