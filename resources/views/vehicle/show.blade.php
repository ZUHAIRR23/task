@extends('admin.parent')

@section('content')

<div class="card p-4">
    <label for="">Name Vehicle</label>
    <input type="text" value="{{ $vehicle->name }}" disabled>

    <label for="">ID Vehicle</label>
    <input type="text" value="{{ $vehicle->id }}" disabled>

    <label for="">Color</label>
    <input type="text" value="{{ $vehicle->color }}" disabled>
    
    <label for="">Tire Wheel</label>
    <input type="text" value="{{ $vehicle->tire_wheel }}" disabled>
    
    <label for="">Machine</label>
    <input type="text" value="{{ $vehicle->machine }}" disabled>
    
    <label for="">Price</label>
    <input type="text" value="{{ $vehicle->price }}" disabled>
</div>

@endsection