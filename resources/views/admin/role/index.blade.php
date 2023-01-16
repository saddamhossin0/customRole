@extends('admin.partials.master')

@section('main-content')
    <div class="row py-4 pl-4 ">
        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Role Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="name">Role</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter role">
                        </div>
                        @foreach($roles as $role)
                            <div class="form-group">
                                <label for="name">{{$role->attribute}}</label>
                            </div>
                            @foreach(json_decode($role->keywords) as $key => $per)
{{--                                {{dd($per)}}--}}
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" value="{{$per}}"  name="keywords[]" id="permission">
                                    <label class="form-check-label" for="exampleCheck1">{{$key}}</label>
                                </div>
                            @endforeach
                        @endforeach

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
