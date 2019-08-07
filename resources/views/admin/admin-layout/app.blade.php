<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

@include('admin.admin-layout.includes.core.head')
</head>


<body class="fixed-left">


<div id="wrapper">


    @include('admin.admin-layout.includes.header')
    @include('admin.admin-layout.includes.left')


    <div class="content-page">

        @yield('content')



        @include('admin.admin-layout.includes.footer')

    </div>




</div>
@include('admin.admin-layout.includes.core.script')

</body>
</html>