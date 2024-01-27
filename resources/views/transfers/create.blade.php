<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-softy-pinko.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/card.css') }}">

    <title>Create Transfer</title>
    <div id="forms" style="margin-top:120px"></div> .
</head>

<body id="Transfer">

    @include('header')
    <div id="forms" style="margin-top:80px"
        class="  container d-flex justify-content-center align-items-center bg-blue-500 m-auto w-80 h-60 rounded-5   p-5">

        <form action="/transfers/create" method="post" class="w-100 m-3">
            @csrf
            <div class="pt-12 px-5 w-100">


                <div class="mb-3">
                    <label for="sender_office"
                        class="form-label d-flex justify-content-center align-items-center text-center">المرسل </label>
                    <select class="form-select" id="sender_office" name="sender_office">
                        @foreach($offices as $office)
                        <option value="{{ $office->id }}" dir="rtl">{{ $office->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    <label for="receiver_office"
                        class="form-label d-flex font-2xl justify-content-center align-items-center text-center">المستقبل</label>
                    <select class="form-select" id="receiver_office" name="receiver_office">
                        @foreach($offices as $office)
                        <option value="{{ $office->id }}" dir="rtl">{{ $office->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="amount"
                        class="form-label d-flex justify-content-center align-items-center text-center">المبلغ</label>
                    <input type="number" name="amount" id="amount" class="form-control">
                </div>


                <button type="submit"
                    class="btn btn-primary w-100 d-flex justify-content-center align-items-center text-center mb-3">تحويل</button>

            </div>

        </form>
    </div>






</body>

</html>