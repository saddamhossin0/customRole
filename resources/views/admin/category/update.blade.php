@extends('admin.partials.master')

@section('main-content')
    <section class="section">
        <div class="row">
            <div class="col-sm-xs-12 col-md-7">
                    <div class="card" >
                        <div class="card-header input-title">
                            <h4>{{ __('Update Category') }}</h4>
                        </div>
                        <div class="card-body card-body-paddding">
                            <form method="POST" action="{{route('category.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">{{ __('Title') }} *</label>
                                    <input type="text" name="title" id="title" value="{{$category->title}}" placeholder="Title" class="form-control" required>
                                    <input type="hidden" value="{{$category->id}}" name="id" />
                                </div>

                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-outline-primary" tabindex="4">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </section>
@endsection
