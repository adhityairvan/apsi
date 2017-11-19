@extends('master')

@section('body')
    <!-- Styles (so that we can see the grid) -->
    <style>
        .bs-example  div[class^="col"] {
            border: 1px solid white;
            background: #f5f5f5;
            text-align: center;
            padding-top: 8px;
            padding-bottom: 8px;
        }
    </style>
    <div class="container bs-example">
        <!-- Bootstrap Grid -->

        <div class="row">
            <div class="col-md-12">
                <h1>Silahkan Login</h1>
            </div>

            <div class="col-md-12">
                <form action="/html/tags/html_form_tag_action.cfm" class="form-inline">
                    <label class="mr-sm-2 mb-0 sr-only" for="username">Username</label>
                    <input type="text" class="form-control mr-sm-2 mb-2 mb-sm-0" id="username" name="username" placeholder="Username">

                </form>
            </div>
            <div class="col-md-12">
                <form action="/html/tags/html_form_tag_action.cfm" class="form-inline">
                    <label class="mr-sm-2 mb-0 sr-only" for="password">Password</label>
                    <input type="text" class="form-control mt-2 mt-sm-0" id="password" name="password" placeholder="Password">

                </form>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-default mt-2 mt-sm-0">Submit</button>

            </div>
        </div>
    </div>
@endsection