@extends('layouts.app')

@section('title', 'Get a home tutor here')



@section('content')

    <div class="inner-banner">
        <div class="opacity">
            <div class="container">
                <h2>@yield('message')</h2>
                <ul>
                    <li><a href="/" class="tran3s">Home</a></li>
                    <li>/</li>
                    <li>error</li>
                </ul>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div>
    <div style="margin-top: 10%" class="container error-page">
        <h2> @yield('code')</h2>
        <h3>   @yield('message')</h3>
        <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
        <div>
            <a href="/" class="tran3s s-bg-color hvr-trim">Go Home</a>


        </div>
    </div>
@endsection
