@extends('admin.dashboard')
@section('content')

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
                                    <td><form action="{{ route('categoryDestroy', $category->id) }}" method="post">
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