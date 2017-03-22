@extends('main')

@section('title', '| Welcome')

@section('content')


        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                  <h1>Welcome to My Blog!</h1>
                  <p class="lead">This is my laravel Test Website!</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular posts</a></p>
                </div>
            </div>  
        </div> <!-- end of header row  -->
        <div class="row"">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad min</p>
                    <a href="#" class="btn btn-primary"></a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad min</p>
                    <a href="#" class="btn btn-primary"></a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad min</p>
                    <a href="#" class="btn btn-primary"></a>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
               <h2>Sidebar</h2>
            </div>
        </div>


@endsection