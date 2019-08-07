@extends('layouts.app')

@section('title', 'Get a home tutor here')



@section('content')

    <div class="inner-banner">
        <div class="opacity">
            <div class="container">
                <h2>About Us</h2>
                <ul>
                    <li><a href="/" class="tran3s">Home</a></li>
                    <li>/</li>
                    <li>about us</li>
                </ul>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div>

    <div class="about-text">
        <div class="container">
            <div class="wrapper">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">

                        <div class="theme-title">
                            <h6>Title here</h6>
                            <h2>Our Mission</h2>
                        </div> <!-- /.theme-title -->
                        <p>          In today World Everything is changing from offline to online. eLearning help you to get Resources to learn whatever you want to learn but there is always a problem of finding a good  Resources to start learning.It is a very Difficult and Compilicated task to find good resources and the way which is suited to Learn.Thus BrainJam is a website portal that help you to find a variety of courses with differnet mode of studing methord study.A user can choose the best methord to study he can study from notes,books and online tutorial.We provide notes for aktu university students so they can study and prepare well for exam.</p>
                    </div>



                </div>
            </div> <!-- /.wrapper -->
        </div> <!-- /.container -->
    </div>
    @include('about')

@endsection


