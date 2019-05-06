@extends('layouts.admin_layout')

@section('admin_content')


<div class="row">
    

    <div class="col-md-10">
        <div class="card-box">
            <h4 class="card-title">Edit {{ $currency->name }}</h4>
            <form action="{{ route('currency.update',['id'=> $currency->id]) }}" method="POST" >

                {{ csrf_field() }}
                
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group">
                    <label>Currency Name</label>
                    <input type="text" name="name" class="form-control" readonly value="{{ $currency->name }}">
                </div>
                <div class="form-group">
                    <label>Currency Rate ( $ )</label>
                    <input type="number" name="rate" class="form-control" value="{{ $currency->rate }}">
                </div>
                <div class="form-group">
                    <label>Currency Min Limit ({{ $currency->name }})</label>
                    <input type="number" name="limit" class="form-control" value="{{ $currency->limit }}">
                </div>
                <div class="form-group">
                    <label>Currency Fee ( % )</label>
                    <input type="number" name="fee" class="form-control" value="{{ $currency->fee }}">
                </div>
                
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>




    </div>
</div>

@endsection