@extends('admin.parent')
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Vehicle</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('vehicle.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Vehicle Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Vehicle Name/Model"
                            name="name">
                    </div>
                    <div class="form-group">
                        <label for="inputColor">Vehicle Color</label>
                        <input type="text" class="form-control" id="inputColor" placeholder="Vehicle Color"
                            name="color">
                    </div>
                    <div class="form-group">
                        <label for="inputColor">Tire Wheel Vehicle</label>
                        <input type="text" class="form-control" id="inputColor" placeholder="Tire Amount"
                            name="tire_wheel">
                    </div>
                    <div class="form-group">
                        <label for="inputMachine">Vehicle Machine</label>
                        <input type="text" class="form-control" id="inputMachine" placeholder="Machine Model/Type"
                            name="machine">
                    </div>
                    <div class="form-group">
                        <label for="inputPrice">Price</label>
                        <input type="text" class="form-control" id="inputPrice" placeholder="Vehicle Price"
                            name="price">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning float-right">Create Vehicle</button>
                </div>
            </form>
        </div>
    </div>
@endsection
