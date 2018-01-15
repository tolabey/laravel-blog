
@extends('main')

@section('title', '| HomePage')
@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Its my Blog</h1>
                <p class="lead">Thank you so much for visiting. This is my test website build with laravel. Please read my latest post</p>
                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
                </p>
            </div>
        </div>
    </div> <!-- end of header .row -->
    <div class="row">
        <div class="col-md-8" >
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam amet consequuntur eos eum modi odio odit officia, perspiciatis tempora. Accusantium architecto corporis debitis ea eius eum fuga laborum, tempora.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam amet consequuntur eos eum modi odio odit officia, perspiciatis tempora. Accusantium architecto corporis debitis ea eius eum fuga laborum, tempora.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam amet consequuntur eos eum modi odio odit officia, perspiciatis tempora. Accusantium architecto corporis debitis ea eius eum fuga laborum, tempora.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam amet consequuntur eos eum modi odio odit officia, perspiciatis tempora. Accusantium architecto corporis debitis ea eius eum fuga laborum, tempora.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam amet consequuntur eos eum modi odio odit officia, perspiciatis tempora. Accusantium architecto corporis debitis ea eius eum fuga laborum, tempora.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection
