<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($office) ? 'Edit Office' : 'Add Office' }}</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-softy-pinko.css') }}">

    <style>
    #forms {
        margin-top: 150px;
    }
    </style>
</head>

<body class="bg-blue-900">





    <div class="container m-1" id="forms">
        <br>


        <div class=" container     p-5 rounded-4">
            @if(isset($office))
            <form action="/offices/{{ $office->id }}" method="post">
                @method('PUT')
                @else
                <form action="/offices" method="post">
                    @endif
                    @csrf

                    <div class="form-group mb-3">
                        <label for="name" class=" text-lowercase  form-label">الاسم:</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ isset($office) ? $office->name : '' }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="address" class="form-label  text-center">العنوان:</label>
                        <input type="text" name="address" id="address" class="form-control"
                            value="{{ isset($office) ? $office->address : '' }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="country" class="form-label  ">الدولة:</label>
                        <input type="text" name="country" id="country" class="form-control "
                            value="{{ isset($office) ? $office->country : '' }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="current_balance" class="form-label  ">الرصيد:</label>
                        <input type="number" name="current_balance" id="current_balance" class="form-control "
                            value="{{ isset($office) ? $office->current_balance : '' }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="country" class="form-label  ">اسم المستخدم:</label>
                        <select type="text" name="id_user" id="id_user" class="form-control form-select">
                            <option>
                                ----------
                            </option>
                            @foreach($usersWithoutOffice as $user)
                            <option value={{$user->id}}>
                                {{$user->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-danger  w-full   ">إرسال</button>

                    </div>
                </form>
        </div>
    </div>





</body>

</html>