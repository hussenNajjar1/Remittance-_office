<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

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
                <!-- Start Welcome Widget -->

                <!-- End Welcome Widget -->
                <!-- Start Quick Draft Widget -->
                <!-- <div class="quick-draft p-20 bg-white rad-10">
                    <h2 class="mt-0 mb-10">Quick Draft</h2>
                    <p class="mt-0 mb-20 c-grey fs-15">Write A Draft For Your Ideas</p>
                    <form>
                        <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="text" placeholder="Title" />
                        <textarea class="d-block mb-20 w-full p-10 b-none bg-eee rad-6"
                            placeholder="Your Thought"></textarea>
                        <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" type="submit"
                            value="Save" />
                    </form>
                </div> -->
                @if(Auth::user()->role==1)
                @include('offices.form')
                @endif

            </div>
            <!-- Start Projects Table -->

            <!-- End Projects Table -->
        </div>
    </div>
</body>

</html>