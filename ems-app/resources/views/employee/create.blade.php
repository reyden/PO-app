@extends('layout.app')

@section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Employee
                       <a href="{{ url('admin/employee') }}" class="btn btn-primary float-end">Back</a>
                       </h4>
                    </div>
                <div class="card-body">

                    <form action="{{ url('admin/employee') }}" method="POST">
                       @csrf

                        <div class="mb-3">
                            <label>Employee Name</label>
                            <input type="text" name = "firstname" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection