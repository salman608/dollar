@extends('layouts.admin_layout')

@section('admin_content')


<div class="row">
    

        <div class="col-xs-7">
            <h4 class="page-title">My Profile</h4>
        </div>

        <div class="col-xs-5 text-right m-b-30">
            <a href="{{ route('profile.edit',['id' =>Auth::user()->id]) }}" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Edit Profile</a>
        </div>
</div>
 

<div class="row">
    <div class="col-md-12">
        <div class="profile-view">
            <div class="profile-img-wrap">
                <div class="profile-img">
                    <a href="#"><img class="avatar" src="/backend/img/user.jpg" alt=""></a>
                </div>
            </div>
            <div class="profile-basic">
                <div class="row">
                    <div class="col-md-5" style="margin-top: 4%;">
                        <div class="profile-info-left">
                            <h3 class="user-name m-t-0 m-b-0">{{ Auth::user()->name }}</h3>
                            <div class="staff-id">Adminitrator</div>
              
                        </div>
                    </div>
                    <div class="col-md-7">
                        <ul class="personal-info">
                            <li>
                                <span class="title">Phone:</span>
                                <span class="text"><a href="">{{ Auth::user()->phone }}</a></span>
                            </li>
                            <li>
                                <span class="title">Email:</span>
                                <span class="text"><a href="">{{ Auth::user()->email }}</a></span>
                            </li>
                            <li>
                                <span class="title">Birthday:</span>
                                <span class="text">

                                @if(Auth::user()->dateofbirth == null)
                                    <p class='text-danger'>Please Update</p>                                
                                @else
                                    {{Auth::user()->dateofbirth}}

                                @endif
                                    
                                </span>
                            </li>
                            <li>
                                <span class="title">Address:</span>
                                <span class="text">

                                @if(Auth::user()->address == null)
                                    <p class='text-danger'>Please Update</p>                                
                                @else
                                    {{Auth::user()->address}}

                                @endif

                                </span>
                            </li>
                            <li>
                                <span class="title">Gender:</span>
                                <span class="text">@if(Auth::user()->gender == null)
                                    <p class='text-danger'>Please Update</p>                                
                                @else
                                    {{Auth::user()->gender}}

                                @endif</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection