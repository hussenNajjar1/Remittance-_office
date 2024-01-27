<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @include('layouts.header')
</head>

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
                <div class="projects p-20 bg-white rad-10 m-20">

                    <div class="responsive-table">
                        <h1>قائمة المكاتب</h1>


                        @if(session('success'))
                        <p style="color: green;">{{ session('success') }}</p>
                        @endif

                        <table>
                            <thead>
                                <tr>
                                    <th>اسم </th>
                                    <th>اسم المستخدم </th>
                                    <th>عنوان</th>
                                    <th>الدولة</th>
                                    <th>الرصيد الحالي</th>
                                    <th> أجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($offices as $office)
                                <tr>
                                    <td>{{ $office->name }}</td>
                                    <td>{{ $office->user->name }}</td>
                                    <td>{{ $office->address }}</td>
                                    <td>{{ $office->country }}</td>
                                    <td>{{ $office->current_balance }}</td>
                                    <td>
                                        <!-- <a href="/offices/{{ $office->id }}"
                                            class="bg-blue px-3 py-2 rounded-1 text-light ">View</a> -->
                                        <!-- <a href="/transfers/office/{{ $office->id }}"
                                            class="bg-blue px-3 py-2 rounded-1 text-light">singel</a> -->
                                        <a href="/offices/{{ $office->id }}/edit"
                                            class="bg-warning px-3 py-2 rounded-1">تعديل</a>
                                        <form action="/offices/{{ $office->id }}" method="post"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">حذف</button>
                                        </form>

                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">No offices available.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
                <!-- Start Projects Table -->
                <!-- End Projects Table -->
            </div>
        </div>
</body>

</html>