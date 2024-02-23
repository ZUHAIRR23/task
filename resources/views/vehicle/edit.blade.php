@extends('admin.parent')

@section('content')
    <div class="card p-4">

        <form action="{{ route('vehicle.update', $vehicle->id) }}" method="post" class="card-body">
            @csrf
            @method('PUT')

            <label for="">Name Vehicle</label>
            <input type="text" value="{{ $vehicle->name }}" name="name" class="form-control">

            <label for="">Color</label>
            <input type="text" value="{{ $vehicle->color }}" name="color" class="form-control">

            <label for="">Tire Wheel</label>
            <input type="text" value="{{ $vehicle->tire_wheel }}" name="tire_wheel" class="form-control">

            <label for="">Machine</label>
            <input type="text" value="{{ $vehicle->machine }}" name="machine" class="form-control">

            <label for="">Price</label>
            <input type="text" value="{{ $vehicle->price }}" name="price" class="form-control">

            <button type="submit" class="btn btn-warning mt-3">Update</button>
        </form>

    </div>
@endsection