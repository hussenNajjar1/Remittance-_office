<div class="sidebar bg-white p-20 p-relative">
    <h3 class="p-relative txt-c mt-0">الهرم</h3>
    <ul>
        @if(Auth::user()->role==1)
        <li>
            <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="/users">
                <i class="fa-solid fa-users"></i>
                <span>لمستخدمين</span>
            </a>
        </li>
        <li>
            <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="/home">
                <i class="fa-solid fa-plus"></i>
                <span>اضافة مكتب</span>
            </a>
        </li>
        <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="/offices">
                <i class="fa-solid fa-house"></i>
                <span>المكاتب</span>
            </a>
        </li>
        <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="/exchange-rates">

                <i class="fa-solid fa-file-invoice-dollar"></i>

                <span> العملات</span>
            </a>
        </li>
        <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="/exchange-rates/create">
                <i class="fa-sharp fa-solid fa-hand-holding-dollar fa-lg"></i> <span></span>
                <span>اضافة عملة</span>
            </a>
        </li>
        @else
        <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10"
                href="/Individualoffice{{\Illuminate\Support\Facades\Auth::user()->id}}">
                <i class="fa-regular fa-user fa-fw"></i>
                <span>معلومات المكتب</span>
            </a>
        </li>
        <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10"
                href="/individualTransfersSender{{\Illuminate\Support\Facades\Auth::user()->id}}">
                <i class="fa-regular fa-user fa-fw"></i>
                <span>الحوالات الصادرة</span>
            </a>
        </li>
        <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10"
                href="/individualTransfersReceiver{{\Illuminate\Support\Facades\Auth::user()->id}}">
                <i class="fa-regular fa-user fa-fw"></i>
                <span>الحوالات الورادة</span>
            </a>
        </li>
        @endif


        <li>
            <a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="/">
                <i class="fa-solid fa-gear fa-fw"></i>
                <span>الصفحة الرئيسية</span>
            </a>
        </li>

        @if(\Illuminate\Support\Facades\Auth::user())

        <form method="POST" action="{{ route('logout') }}" class="d-inline ">
            @csrf

            <x-dropdown-link :href="route('logout')" class=" " onclick="event.preventDefault();
                            this.closest('form').submit();">

                <div class=" d-flex align-center fs-14 c-black rad-6 p-10">
                    <i class="fa-solid fa-door-open"></i>
                    <span> {{ __('تسجيل الخروج') }}</span>

                </div>

            </x-dropdown-link>
        </form>

        @endif





        <!-- <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="projects.html">
                <i class="fa-solid fa-diagram-project fa-fw"></i>
                <span>Projects</span>
            </a>
        </li> -->
        <!-- <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="courses.html">
                <i class="fa-solid fa-graduation-cap fa-fw"></i>
                <span>Courses</span>
            </a>
        </li> -->
        <!-- <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="friends.html">
                <i class="fa-regular fa-circle-user fa-fw"></i>
                <span>Friends</span>
            </a>
        </li> -->
        <!-- <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="files.html">
                <i class="fa-regular fa-file fa-fw"></i>
                <span>Files</span>
            </a>
        </li>
        <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="plans.html">
                <i class="fa-regular fa-credit-card fa-fw"></i>
                <span>Plans</span>
            </a>
        </li> -->
    </ul>
</div>