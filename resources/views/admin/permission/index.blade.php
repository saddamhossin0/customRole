@extends('admin.partials.master')

@section('main-content')
<div class="row py-4 pl-4 ">
    <div class="col-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('store')}} " method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="attribute" id="attribute" placeholder="Enter attribute">
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" value="create"  name="keywords[]" id="permission">
                        <label class="form-check-label" for="exampleCheck1">Create</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" value="delete"  name="keywords[]" id="permission">
                        <label class="form-check-label" for="exampleCheck1">Delete</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input"  value="read" name="keywords[]" id="permission">
                        <label class="form-check-label" for="exampleCheck1">Read</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input"  value="update" name="keywords[]" id="permission">
                        <label class="form-check-label" for="exampleCheck1">Update</label>
                    </div>
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
