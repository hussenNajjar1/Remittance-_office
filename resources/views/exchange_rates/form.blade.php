<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($exchangeRate) ? 'Edit Exchange Rate' : 'Add Exchange Rate' }}</title>

    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/framework.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/master.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
</head>

<body>


    <body dir="rtl">
        <div class=" page d-flex">

            @include('layouts.sidebar')
            <div class="content w-full">
                <!-- Start Head -->
                <div class="head bg-white p-15 between-flex">
                    <div class="search p-relative">

                    </div>
                    <div class="icons d-flex align-center">
                        <span class="notification p-relative">
                            <i class="fa-regular fa-bell fa-lg"></i>
                        </span>
                        <img src="{{ asset('imgs/avatar.png') }}" alt="Avatar">
                    </div>
                </div>
                <!-- End Head -->

                <div class=" d-grid gap-20">
                    <h1> اضافة عملة</h1>


                    @if(isset($exchangeRate))
                    <form action="/exchange-rates/{{ $exchangeRate->id }}" method="post">
                        @method('PUT')
                        @else


                        <div class="quick-draft p-20 bg-white rad-10">


                            <form action="/exchange-rates" method="post">
                                @endif
                                @csrf

                                <label for="currency_from">العملة من:</label>
                                <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="text"
                                    placeholder="Currency From " name="currency_from" id="currency_from"
                                    value="{{ isset($exchangeRate) ? $exchangeRate->currency_from : '' }}" />

                                <label for="currency_to">العملة إلى:</label>
                                <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="text"
                                    placeholder="Currency To" name="currency_to" id="currency_to"
                                    value="{{ isset($exchangeRate) ? $exchangeRate->currency_to : '' }}" />

                                <label for="exchange_rate">سعر الصرف:</label>


                                <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="number" step="0.01"
                                    placeholder="Exchange Rate" name="exchange_rate" id="exchange_rate" m
                                    value="{{ isset($exchangeRate) ? $exchangeRate->exchange_rate : '' }}" />

                                <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" type="submit"
                                    value="add" />
                            </form>
                        </div>
                </div>
            </div>
    </body>

</html>