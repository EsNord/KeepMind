@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('css/dashboard/profile/edite-Profile.css')}}">
@endsection

@section('content')
    <a href="{{route('Profile')}}"><i class="m-2 fas fa-2x fa-arrow-alt-circle-left text-dark"></i></a>
    <div class="container">
        <form method="POST" class="form">
            @csrf
            <div class="row flex-lg-nowrap">
                <div class="col">
                    <div class="row">
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body">
                                    @include('include.messages')
                                    <div class="e-profile">
                                        <div class="row">
                                            <!--Profile Image-->
                                            <div class="col-3 col-sm-auto mb-3">
                                                <div class="mx-auto" style="width: 140px;">
                                                    <img id="image" class="img profile-image" >
                                                </div>
                                            </div>
                                            <!--End Pofile Image-->

                                            <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                    <!--First Name-->
                                                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap" id="fullName"></h4>
                                                    <!--Last Name-->
                                                    <p class="mb-0" id="userName"></p>


                                                    <!--Last Active-->
                                                    <div class="text-muted"><small>Last seen 2 hours ago</small></div>


                                                    <!--Change Photo-->
                                                    <div class="mt-2">
                                                        <label class="fileContainer btn btn-primary">
                                                            Choose Photo <i class="fa fa-fw fa-camera"></i>
                                                            <input type="file"  id="avatarImage" name="avatarImage"/>
                                                        </label>
                                                        <br>
                                                        <small class="fileDetected text-muted"></small>
                                                    </div>
                                                    <!--End Change Photo-->
                                                </div>

                                                <!--Role And Join Date-->
                                                <div class="text-center text-sm-right">
                                                    <span class="badge badge-success">User</span>
                                                    <div id="create_at" class="text-muted" ><small>Joined </small></div>
                                                </div>

                                            </div>
                                        </div>
                                        <!--End HeadInformation-->


                                        <!--Tabs-->
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-personal-tab" data-toggle="tab" href="#nav-personal" role="tab" aria-controls="nav-Personal" aria-selected="true">Personal</a>
                                                <a class="nav-item nav-link " id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                                                <a class="nav-item nav-link " id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                                            </div>
                                        </nav>
                                        <!--End Tabs-->

                                        <!--Continer Content Tabs-->
                                        <div class="tab-content pt-3" id="nav-tabContent">
                                            <!--Tab 1-->
                                            <div class="tab-pane fade show active " id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="firstname">First Name</label>
                                                                    <input class="form-control" type="text" name="firstname" id="firstName" placeholder="John Smith" >
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="lastname">Last Name</label>
                                                                    <input class="form-control" type="text" id="lastName" name="lastname" placeholder="johnny.s" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col">
                                                                <label for="location">Location</label>
                                                                <select id="location" name="location" class="form-control">
                                                                    <option disabled>Choose...</option>
                                                                    <option value="SY">Syria</option>
                                                                    <option value="EY">Egypt</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <div class="form-group">
                                                                    <label>About</label>
                                                                    <textarea id="about" name="about" class="form-control" rows="5" placeholder="My Bio">pop</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--End Tab 1-->

                                            <!--Tab 2-->
                                            <div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <div class="row">
                                                    <!--Password-->
                                                    <div class="col-12 mb-3">
                                                        <div class="mb-2"><b>Change Password <i class="fas fa-lock" style="color:black;font-size:20px;"></i></b></div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="currpassword">Current Password</label>
                                                                    <input class="form-control" id="currPassword" name="currpassword" type="password" placeholder="••••••">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="newpassword">New Password</label>
                                                                    <input id="newpassword" name="newPassword" class="form-control" type="password" placeholder="••••••" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="newpassword_confirmation">Confirm <span class="d-none d-xl-inline">Password</span></label>
                                                                    <input id="conPassword" name="newpassword_confirmation" class="form-control" type="password" placeholder="••••••"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--Account-->
                                                    <div class="col-12 mb-3">
                                                        <div class="mb-2"><b>Change Account  <i class="fa fa-user" style="font-size:20px;color:black;"></i></b></div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input name="email" type="email" class="form-control" id="email">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="username">User Name</label>
                                                                    <input  type="text" class="form-control" name="username" id="userNameInput">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Tab 2-->

                                            <!--Tab 3-->
                                            <div class="tab-pane fade " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                <div class="form-group col-md-12">
                                                    <label for="facebook">Facebook <i class="fa fa-facebook" style="color:#3b5998;"></i></label>
                                                    <input type="text" name="facebook" class="form-control" id="facebook">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="linkedin">LinkedIn <i class="fa fa-linkedin" style="color:#0077b5;"></i></label>
                                                    <input type="text" name="linkedin" class="form-control" id="linkedin">
                                                </div>
                                            </div>
                                            <!--End Tab 3-->
                                        </div>
                                        <!--End Content Tabs-->



                                        <!--Update Button-->
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 d-flex justify-content-center">
                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                            </div>
                                        </div>
                                        <!--End Update Button-->




                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--Right Sidebar -->

                        <!--End Right Sidebar-->

                    </div>
                </div>

            </div>

        </form>
    </div>
@endsection

@section('scriptJs')
    <script src="{{asset('js/edit-profile.js')}}"></script>
    <script src="{{asset('js/axios.min.js')}}"></script>

    <script>
        console.log(localStorage.getItem("token"))
        let user_token = localStorage.getItem('token')
        console.log(user_token)

        axios
            .post("/api/Profile",{},{
                    headers: {
                        Authorization: `Bearer ${user_token}`
                    }
                }
            )
            .then(function(res){
                console.log(res.data.user)
                $('#userName').text(res.data.user.user_name )
                $('#userNameInput').val(res.data.user.user_name )
                $('#firstName').val(res.data.user.first_name)
                $('#lastName').val(res.data.user.last_name)
                $('#image').attr('src',"/img/"+res.data.img.nameImg)
                $('#location').attr('selected',res.data.user.location)
                $('#email').val(res.data.user.email)
            })
            .catch(err => console.log(err))

    </script>
@endsection