<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @include('layouts.header')
    <style>
    /* يمكنك تعديل أنماط النص والهوامش حسب احتياجاتك */
    p,
    h2 {
        margin: 0;
        /* لإزالة هوامش النصوص الافتراضية */
    }

    .border {
        border: 1px solid #fff;
        /* لإضافة حدود بلون أبيض */
    }
    </style>

</head>

<body dir="rtl">
    <div class=" page d-flex">

        @include('layouts.sidebar')
        <div class="content w-full">
            <!-- Start Head -->
            <div class="head bg-white p-15 between-flex">
                <div class="search p-relative">
                    <input class="p-10" type="search" placeholder="Type A Keyword" />
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

                @include('Individualoffice.Individualoffice')
            </div>
            <!-- Start Projects Table -->

            <!-- End Projects Table -->
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