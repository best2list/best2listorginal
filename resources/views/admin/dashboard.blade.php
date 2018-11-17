<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/mybusiness">my account</a>
                                <a class="dropdown-item" href="/mybusiness/create">create business</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    @section('sidebar')
                        <div class="card">
                            <div class="card-header">admin menu</div>
                            <div class="card-body">
                                <ul>

                                        <li><a href="/admin/categories">categories</a> </li>
                                        <li><a href="/admin/countries">countries</a> </li>
                                        <li><a href="/admin/comments">comments</a> </li>

                                </ul>
                            </div>
                        </div>


                </div>
                <div class="col-md-8">

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr class="table-active">
                                <td>country ID</td>
                                <td>country name</td>
                                <td>flag</td>
                                <td>edit</td>
                                <td>delete</td>
                            </tr>
                            @foreach($countries as $country)
                                <tr>
                                    <td>{{ $country->id }}</td>
                                    <td>{{ $country->country }}</td>
                                    <td><img class="col-md-3" src="{{ $country->flag }}" alt="{{$country->country}}"></td>
                                    <td><a href="">edit</a> </td>
                                    <td><a href="">delete</a> </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                    <br/>

                    <div class="card">
                        <div class="card-header">create country</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('storeCountry') }}" aria-label="{{ __('storeCountry') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="country" class="col-sm-4 col-form-label text-md-right">{{ __('country') }}</label>

                                    <div class="col-md-6">
                                        <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required autofocus>

                                        @if ($errors->has('country'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="flag" class="col-sm-4 col-form-label text-md-right">{{ __('flag') }}</label>

                                    <div class="col-md-6">
                                        <input id="flag" type="file" class="form-control{{ $errors->has('flag') ? ' is-invalid' : '' }}" name="flag" value="{{ old('flag') }}" required autofocus>

                                        @if ($errors->has('flag'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('flag') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('insert') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <br/>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr class="table-active">
                                <td>category ID</td>
                                <td>category name</td>
                                <td>parent ID</td>
                                <td>edit</td>
                                <td>delete</td>
                            </tr>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td>{{ $category->parent_id }}</td>
                                    <td><a href="">edit</a> </td>
                                    <td><a href="">delete</a> </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                    <br/>

                    <div class="card">
                        <div class="card-header">create category</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('storeCategory') }}" aria-label="{{ __('storeCategory') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('title') }}</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="parent_id" class="col-sm-4 col-form-label text-md-right">{{ __('parent_id') }}</label>

                                    <div class="col-md-6">
                                        <input id="parent_id" type="text" class="form-control{{ $errors->has('parent_id') ? ' is-invalid' : '' }}" name="parent_id" value="{{ old('parent_id') }}" autofocus>

                                        @if ($errors->has('parent_id'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('parent_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('insert') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <br/>

                    <div class="card">
                        <div class="card-header">comments</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr class="table-active">
                                <td>comment ID</td>
                                <td>business ID</td>
                                <td>user ID</td>
                                <td>comment</td>
                                <td>status</td>
                                <td>delete</td>
                            </tr>
                            @foreach($comments as $comment)
                                <tr>
                                    <td>{{ $comment->id }}</td>
                                    <td>{{ $comment->business_id }}</td>
                                    <td>{{ $comment->user_id }}</td>
                                    <td>{{ $comment->comment }}</td>
                                    <td>{{ $comment->status }} |
                                        <form action="/admin/{{ $comment->id }}/status" method="post">
                                            {{ method_field('put') }}
                                            {{csrf_field()}}
                                            <input type="submit" value="change">
                                        </form> </td>
                                    <td><a href="">delete</a> </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                    <br/>


            </div>
        </div>
            </div>
    </div>
    </main>
</div>
</body>
</html>
