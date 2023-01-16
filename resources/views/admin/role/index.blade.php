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
                <form action="# " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="name">Role</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter role">
                        </div>
                        <div class="form-group">
                            <label for="cars">Permission</label>
                            @if( count($roles) > 0)
                                <select id="cars" class="form-control">
                            @foreach ($roles as $role)
                            <option value="volvo">
                          @php
                              $datas = json_decode($role->keywords);
                          @endphp
                            @foreach ($datas  as $data)
                            {{$data}}

                            @endforeach
                            </option>
                            @endforeach
                                </select>
                            @else
                                @endif



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
