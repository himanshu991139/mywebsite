@extends('layout.app')

@section('title', 'Get a home tutor here')



@section('content')

    <style>
        p{
            font-size: large;
        }
    </style>
    <div class="inner-banner">
        <div class="opacity">
            <div class="container">
                <h2>Students</h2>
                <ul>
                    <li><a href="/" class="tran3s">Home</a></li>
                    <li>/</li>
                    <li>Students</li>
                </ul>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div>



    @include('where')
@endsection


