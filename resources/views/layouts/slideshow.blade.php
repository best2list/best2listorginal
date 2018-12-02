<div class="container-fluid p-0 mt-0 position-relative ">
    <img src="\images\slideImage\2018\11\23\2018_11_23_08_07_26.jpg" style="filter: blur(0px);" class="img-fluid mt-0">
    <div class="text-center pr-5 pl-5 pt-4 pb-2 align-self-center carousel-caption rounded top bg-rgba search-pos" >
        {{--align-self-center carousel-caption d-none d-md-block--}}
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="searchHelp" placeholder="serch business ...">
                    <select class="form-control">
                        <option value="all">All countries</option>
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->country }}</option>
                        @endforeach
                    </select>
                    <select name="category" class="form-control">
                        <option value="all">select a category</option>
                        @foreach ($categories as $parent)
                            <option value="{{ $parent->id }}">{{ $parent->title }}</option>
                            @if ($parent->children->count())
                                <ul>
                                    @foreach ($parent->children as $child)
                                        <option value="{{ $child->id }}">{{ $parent->title }}___{{ $child->title }}</option>
                                    @endforeach
                                </ul>
                                @endif
                                </li>
                                @endforeach
                    </select>
                    <input type="submit" class="btn btn-warning bg-color border-0" value="search">
                </div>
            </div>
        </form>
    </div>
</div>