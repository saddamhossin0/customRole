@extends('admin.partials.master')

@section('main-content')
    <section class="section">
        <div class="section-body">
            <div class="d-flex justify-content-between">
                <div class="d-block">
{{--                    <h2 class="section-title">--}}
{{--                        {{ $title }}--}}
{{--                    </h2>--}}

                </div>
{{--                <div class="buttons add-button">--}}
{{--                    <a href="{{ old('r') != '' ? old('r') : (@$r ? $r : url()->previous() )}}"--}}
{{--                       class="btn btn-outline-primary"><i class='bx bx-arrow-back'></i>{{ __('Back') }}</a>--}}
{{--                </div>--}}
            </div>

            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data"
                  data-form="" id="variant">
                @csrf
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-9 middle">
                        <div class="tab-content no-padding" id="myTabContent2">
                            <div class="tab-pane fade show active" id="product-info" role="tabpanel"
                                 aria-labelledby="product-info-tab">
                                <div class="card">
                                    <div class="card-header extra-padding">
                                        <h4>{{ __('Product Information') }}</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">{{ __('Product Name') }} *</label>
                                                        <input type="hidden"
                                                               value=""
                                                               name="r">
                                                        <input type="text" class="form-control" name="name" id="name"
                                                               value=""
                                                               placeholder="{{ __('Product Name') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="category">{{ __('Category') }} *</label>
                                                        <select class="form-control select2" name="category" id="category">
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('category'))
                                                            <div class="invalid-feedback">
                                                                {{ $errors->first('category') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="price">{{ __('Price') }} *</label>
                                                        <input type="text" class="form-control" name="price" id="price"
                                                               value=""
                                                               placeholder="price">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group selected-media">
                                                        <label for="site-icon">image</label>
                                                        <div class="form-group">
                                                            <input type="file" id="site-icon"
                                                                   class="custom-file-input image_pick file-select" accept="image/*"
                                                                   data-image-for="image" name="image" id="customFile"/>
                                                            @if ($errors->has('favicon'))
                                                                <div class="invalid-feedback">
                                                                    {{ $errors->first('favicon') }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div>
                                                            @if(@$icon !=[] && @is_file_exists(@$icon['image_72x72_url']))
                                                                <img src="{{ static_asset($icon['image_72x72_url'])}}" alt=""
                                                                     id="img_image" class="img-thumbnail site-icon">
                                                            @else
                                                                <img
                                                                        src="{{ asset('/public/assets/images/default-image-72x72.png') }}"
                                                                        alt="site-icon" id="img_image"
                                                                        class="img-thumbnail site-icon ">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="col-lg-12">
                                                <div class="form-group selected-media">
                                                    <label for="site-icon">Gallery Image</label>
                                                    <div class="form-group">
                                                        <input type="file" id="site-icon"
                                                               class="custom-file-input image_pick file-select" accept="image/*"
                                                               data-image-for="profile" name="gallery_image" id="customFile"/>
                                                        @if ($errors->has('favicon'))
                                                            <div class="invalid-feedback">
                                                                {{ $errors->first('favicon') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        @if(@$icon !=[] && @is_file_exists(@$icon['image_72x72_url']))
                                                            <img src="{{ static_asset($icon['image_72x72_url'])}}" alt=""
                                                                 id="img_profile" class="img-thumbnail site-icon">
                                                        @else
                                                            <img
                                                                    src="{{ asset('/public/assets/images/default-image-72x72.png') }}"
                                                                    alt="site-icon" id="img_profile"
                                                                    class="img-thumbnail site-icon ">
                                                        @endif
{{--                                                            <div class="image-remove">--}}
{{--                                                                <a href="javascript:void(0)" class="remove"><i--}}
{{--                                                                            class="bx bx-x"></i></a>--}}
{{--                                                            </div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <button type="submit" name="status" value="published" class="btn btn-outline-primary"
                                                tabindex="4">
                                            Save
                                        </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection