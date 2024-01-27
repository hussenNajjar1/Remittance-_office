<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">

                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo">
                        <!-- <img src="assets/images/logo.png" alt="Softy Pinko" /> -->
                        <h3 class="mx-4"> {{ trans('messages.pyramid') }}</h3>

                        {{--                        <a href="{{ route('switch.language', 'ar') }}">العربية
                    </a>--}}

                    {{--                        {{ trans('messages.welcome') }}--}}
                    </a>
                    @if(\Illuminate\Support\Facades\Auth::user())



                    @else
                    <a href="/login" class="btn btn-dark mt-4 mr-5" dir="rtl" style="float: right;">
                        {{ trans('messages.login') }}
                    </a>

                    @endif

                    @if(\Illuminate\Support\Facades\Auth::user())
                    <!-- <x-dropdown-link :href="route('profile.edit')" class="btn  mt-3  ">
                        {{ __('الملف الشخصي') }}

                    </x-dropdown-link>
 -->



                    <x-dropdown-link class="">
                        <!-- {{ Auth::user()->name }} -->
                    </x-dropdown-link>
                    {{--  <a href="#" class=""  >
                            <!-- <img src="assets/images/logo.png" alt="Softy Pinko" /> -->

                        </a>--}}
                    @endif

                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <select onchange="location = this.value;">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <option value="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                @if(LaravelLocalization::getCurrentLocale()==$localeCode) selected @endif>
                                {{ $properties['native'] }}
                            </option>
                            @endforeach
                        </select>
                        <li><a href="/api/moneyorderinformation"> {{ trans('messages.transfer_info') }}</a></li>
                        @if(\Illuminate\Support\Facades\Auth::user())
                        @if(Auth::user()->role==1)

                        <li><a href="/transfers/create"> {{ trans('messages.send_transfer') }}</a></li>
                        <li><a href="/show22"> {{ trans('messages.exchange_rate') }}</a></li>
                        @endif

                        <li><a href="/profile"> {{ trans('messages.profile') }}</a></li>
                        <li><a href="/home"> {{ trans('messages.dashboard') }}</a></li>
                        @endif


                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>


                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>