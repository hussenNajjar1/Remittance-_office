<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Money order information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap');

    *,
    body,
    h1,
    p,
    h2 {
        font-family: 'Cairo', sans-serif;

    }

    #form {
        border-radius: 17px;
        margin-top: 120px;
        background-color: rgb(2, 46, 141);
        color: white;
    }
    </style>
</head>

<body dir="rtl">
    <div class="d-flex    justify-content-center align-items-center w-100  mt-5 ">

        <div class="border   rounded-5 p-5" id="form">
            <a href="/" class="w-100 btn btn-primary mt-2 mb-3">
                الخلف
            </a>
            <form action="/api/showMoneyOrderInformation" method="post">
                @csrf
                <label for="exampleFormControlInput1" class="form-label">ادخل رقم الحوالة</label>
                <input type="number" class="form-control" id="" name="id" placeholder="#########" min="1" required />
                <input type="submit" value="إرسال" class="btn   btn-dark mt-3 w-100" />
            </form>

            @if(isset($transfer))

            <div class="container bg-primary to-r from-indigo-500 w-100 my-5 p-5 rounded-3">


                <ul class="list-unstyled text-center pt-3">

                    <li class="mb-2 text-light">
                        <span class="fw-bold text-dark">مكتب المرسل:</span><br>
                        {{ $transfer->senderOffice->name }}
                    </li>
                    <li class="mb-2 text-light">
                        <span class="fw-bold text-dark">مكتب الاستقبال:</span> <br>
                        {{ $transfer->receiverOffice->name }}
                    </li>
                    <li class="mb-2 text-light">
                        <span class="fw-bold text-dark">المبلغ:</span><br>
                        {{ $transfer->amount }}
                    </li>
                    <li class="mb-2 text-light">
                        <span class="fw-bold text-dark">تاريخ </span> <br> {{ $transfer->transfer_date }}
                    </li>
                </ul>
            </div>
            @endif
        </div>



    </div>

    <script>
    < script src = "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity = "sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin = "anonymous" >
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    </script>
</body>

</html>