@extends('admin.parent')

@section('content')
<div class="container">
    <h1 class="fw-bold text-left display-3"><b>Create Vehicle</b></h1>
    <h4 class="text-left">Wanna make new vehicle?<br><a href="{{ route('vehicle.create') }}" class="btn btn-outline-success border border-3 mt-3 fw-bold">Make Vehicle</a></h4>

    <table class="table">
        <th>
            <tr>
                <td></td>
                <td>Name</td>
                <td>Color</td>
                <td>Tire Wheel</td>
                <td>Machine</td>
                <td>Price</td>
                <td>Action</td>
            </tr>
        </th>
        <tbody>
            @foreach ($vehicle as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->color }}</td>
                    <td>{{ $row->tire_wheel }}</td>
                    <td>{{ $row->machine }}</td>
                    <td>{{ $row->price }}</td>
                    <td>
                        <a href="{{ route('vehicle.show', $row->id) }}" class="btn btn-info">Show Category</a>
                        <a href="{{ route('vehicle.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('vehicle.destroy', $row->id) }}" method="post" class="pt-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>
    
@endsection