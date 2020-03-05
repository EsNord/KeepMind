@extends('layouts.app')
@section('content')
    <div class="modal fade" role="dialog" tabindex="-1" id="signup">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sign In</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    {{--d--}}
                    <form id="Login" action="{{route('home')}}">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="email" required placeholder="Email" id="email" />
                                <div class="input-group-append"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-lock"></i></span></div><input class="form-control" type="password" required placeholder="Password" id="password" />
                                <div class="input-group-append"></div>
                            </div>
                        </div>
                        <div class="form-group"><button class="btn btn-primary btn-lg text-white" style="width: 100%;" type="submit">Log in</button></div>
                    </form>
                    <hr style="background-color: #bababa;" />
                    <p class="text-center">Already have an Account? <a class="text-decoration-none" data-dismiss="modal" data-toggle="modal" data-target="#signup" href="#">Log In</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
