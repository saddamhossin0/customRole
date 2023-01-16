@extends('admin.partials.master')

@section('main-content')
    <div class="row py-4 pl-4 ">
        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">User Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('userStore')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                        </div>
                        <div class="form-group">
                            <label for="permissions">Permissions</label>
                            <select id="permissions" name="id" class="form-control">
                            @foreach ( $userRoles as  $userRole)
                            <option value="{{$userRole->id}}">{{ $userRole->name}}</option>
                            @endforeach
                            </select>
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
