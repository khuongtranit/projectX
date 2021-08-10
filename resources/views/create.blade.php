@extends('master')

@section('content')
<div class="container">
    <form method="post" action="{{ route('create_product') }}">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="Tên" aria-describedby="helpId"
                value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" name="price" id="" class="form-control" placeholder="Giá" aria-describedby="helpId"
                value="{{ old('price') }}">
        </div>
        <div class="form-group">
            <label for="">Number</label>
            <input type="number" name="number" id="" class="form-control" placeholder="Số lượng"
                aria-describedby="helpId" value="{{ old('number') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
