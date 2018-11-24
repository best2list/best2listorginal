@extends('admin.dashboard')
@section('content')

    <div class="card">
        <div class="card-header">create menu</div>

        <div class="card-body">
            <form method="POST" action="{{ route('storemenu') }}" aria-label="{{ __('storemenu') }}">
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
                    <label for="text" class="col-sm-4 col-form-label text-md-right">{{ __('text') }}</label>

                    <div class="col-md-6">
                        <input id="text" type="text" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" name="text" value="{{ old('text') }}" autofocus>

                        @if ($errors->has('text'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('text') }}</strong>
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
                                <td>menu ID</td>
                                <td>menu title</td>
                                <td>text</td>
                                <td>change status</td>
                                <td>edit</td>
                                <td>delete</td>
                            </tr>
                            @foreach($menus as $menu)
                                <tr>
                                    <td>{{ $menu->id }}</td>
                                    <td><a href="{{ route('showmenu', $menu->id) }}">{{ $menu->title }}</a></td>
                                    <td>{{ str_limit($menu->text, 300) }}</td>
                                    <td><a href="">{{ $menu->id }}</a></td>
                                    <td><a href="{{ route('editmenu', $menu->id) }}">edit</a></td>
                                    <td><form action="{{ route('destroymenu', $menu->id) }}" method="post">
                                            {{ method_field('delete') }}
                                            @csrf
                                            <input type="submit" value="delete" class="btn btn-danger">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>


@endsection