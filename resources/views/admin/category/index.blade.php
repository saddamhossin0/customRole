@extends('admin.partials.master')

@section('main-content')
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
                    <h2 class="section-title">{{ __('All Categories') }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-xs-12 col-md-7">
                <div class="card">
                    <form action="">
                        <div class="card-header input-title">
                            <h4>{{ __('Categories') }}</h4>
                        </div>
                    </form>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tbody>
                                <tr>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Options') }}</th>
                                </tr>
                                @foreach($categories as $category)
                                    <tr  class="table-data-row">
                                        <td>
                                            <div class="ml-1">{{$category->title}}</div>
                                        </td>
                                        <td>
                                            <a href="{{route('category.edit',$category->id)}}" class="btn btn-outline-secondary btn-circle" data-url=""data-toggle="tooltip" title="" data-original-title="{{ __('Edit') }}">
                                                <i class="bx bx-edit"></i>
                                            </a>
                                            <a href="{{route('category.delete',$category->id)}}" class="btn btn-outline-danger btn-circle" data-toggle="tooltip" title=""data-original-title="{{ __('Delete') }}">
                                                <i class='bx bx-trash'></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <nav class="d-inline-block">
                            {{ $categories->appends(Request::except('page'))->links('pagination::bootstrap-4') }}
                        </nav>
                    </div>
                </div>
            </div>
                <div class="col-sm-xs-12 col-md-5">
                    <div class="card" >
                        <div class="card-header input-title">
                            <h4>{{ __('Add Category') }}</h4>
                        </div>
                        <div class="card-body card-body-paddding">
                            <form method="POST" action="{{route('category.create')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">{{ __('Title') }} *</label>
                                    <input type="text" name="title" id="title" value="" placeholder="Title" class="form-control" required>
                                </div>

                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-outline-primary" tabindex="4">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </section>
@endsection
