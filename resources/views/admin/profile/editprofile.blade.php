@extends('layouts.admin_layout')

@section('admin_content')


<div class="row">
    

    <div class="col-md-10">
        <div class="card-box">
            <h4 class="card-title">Update Profile ( {{ $admin->name }} )</h4>
            <form action="{{ route('profile.update',['id'=> $admin->id]) }}" method="POST"  e>

                {{ csrf_field() }}
                
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $admin->name }}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $admin->email }}">
                </div>
                             
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ $admin->phone }}">
                </div>
                             
                <div class="form-group">
                    <label>Date of birth</label>
                    <input type="date" name="dateofbirth" class="form-control" value="{{ $admin->dateofbirth }}">
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" value="{{ $admin->address }}">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" id="" class="form-control">
                        <option value="Male" 
                        @if ($admin->gender == "Male")
                            selected
                        @endif>Male</option>
                        <option value="Female"

                        @if ($admin->gender == "Female")
                            selected
                        @endif
                        >Female</option>
                    </select>
                </div>
                             
                {{-- <div class="form-group">
                    <label>Change Profile Picture</label>
                    <input type="file" name="image" class="form-control">
                </div>  --}}            
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>




    </div>
</div>

@endsection