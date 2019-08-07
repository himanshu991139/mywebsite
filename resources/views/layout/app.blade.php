<!DOCTYPE html>
<html lang="en">

@include('.layout.core.head')

<body>
<div class="main-page-wrapper">


    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>


    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    @include('layout.modal')


    <button class="scroll-top tran3s">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </button>


    @include('layout.core.script')

</div>
</body>
</html>