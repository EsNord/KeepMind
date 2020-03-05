@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('css/dashboard/profile/profile.css')}}">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
    <style>


    </style>
@endsection

@section('content')

    @include('include.messages')
    <a  href="{{route('Dashboard')}}"><i class="m-2 fas fa-2x fa-arrow-alt-circle-left text-dark"></i></a>
    <div class="page-content page-container" style="margin-top: 80px" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center m-auto">
                <div class="col-xl-12 col-md-12">
                    <div class="card user-card-full">
                        <div class="row">
                            <div class="col-sm-4 bg-c-lite-green user-profile">

                                <div class="card-block text-center text-white"style="margin-top:20%">
                                    <p id="location" class=""></p>

                                    <div class="m-b-25"> <img id="image"  class="img-radius" alt="User-Profile-Image"> </div>
                                    <h6 id="fullName" class="f-w-600"></h6>
                                    <p id="about"></p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Personal</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">First Name</p>
                                            <h6 id="firstName" class="text-muted f-w-400"></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Last Name</p>
                                            <h6 id="lastName" class="text-muted f-w-400"></h6>
                                        </div>
                                    </div>
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Account</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Username</p>
                                            <h6 id="userName" class="text-muted f-w-400"></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <h6 id="email" class="text-muted f-w-400"></h6>
                                        </div>
                                    </div>
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Social Media</h6>
                                    <div class="row">
                                        <div class="col-sm-5">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <a href="https:\\" type="button" class="btn btn-social-icon btn-facebook btn-rounded"><i class="fa fa-facebook"></i></a>
                                            <a href="https:\\" type="button" class="ml-4 btn btn-social-icon btn-linkedin btn-rounded"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="{{route('update')}}" class="btn btn-primary w-100 mt-5" type="submit"><i class="fa fa-pencil"></i> Update Information</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/axios.min.js"></script>


    <script>
        console.log(localStorage.getItem("token"))
        let user_token = localStorage.getItem('token')
        console.log(user_token)

        axios
            .post("api/Profile",{},{
                    headers: {
                        Authorization: `Bearer ${user_token}`
                    }
                }
            )
            .then(function(res){
                console.log(res.data.user)
                $('#userName').text(res.data.user.user_name )
                $('#firstName').text(res.data.user.first_name)
                $('#lastName').text(res.data.user.last_name)
                $('#image').attr('src',"img/"+res.data.img.nameImg)
                $('#location').text(res.data.user.location)
                $('#email').text(res.data.user.email)
            })
            .catch(err => console.log(err))

    </script>

    @endsection