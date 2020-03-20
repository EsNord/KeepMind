@extends('AdminCp.layouts.CpApp')
@section('style')

@endsection

@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">

        <!-- ./col User -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3 id="countUsers"></h3>
                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- ./col Exercise -->

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-lightblue">
                <div class="inner">
                    <h3 id="countExcs"></h3>

                    <p>Exercise</p>
                </div>
                <div class="icon">
                    <i class="fa fa-brain"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col Achievement-->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Achievement</p>
                </div>
                <div class="icon">
                    <i class="fa fa-award"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>

                    <p>Rating</p>
                </div>
                <div class="icon">
                    <i class="fa fa-chart-line"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <section class="col-lg-7 connectedSortable">
            <!-- Map card -->
            <div class="card bg-gradient-primary">
                <div class="card-header border-0">
                    <h3 class="card-title">
                        <i class="fas fa-map-marker-alt mr-1"></i>
                        Visitors
                    </h3>
                    <!-- card tools -->
                    <div class="card-tools">
                        <button type="button"
                                class="btn btn-primary btn-sm daterange"
                                data-toggle="tooltip"
                                title="Date range">
                            <i class="far fa-calendar-alt"></i>
                        </button>
                        <button type="button"
                                class="btn btn-primary btn-sm"
                                data-card-widget="collapse"
                                data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <div class="card-body">
                    <div id="world-map" style="height: 250px; width: 100%;"></div>
                </div>
                <!-- /.card-body-->
                <div class="card-footer bg-transparent">
                    <div class="row">
                        <div class="col-4 text-center">
                            <div id="sparkline-1"></div>
                            <div class="text-white">Visitors</div>
                        </div>
                        <!-- ./col -->
                        <div class="col-4 text-center">
                            <div id="sparkline-2"></div>
                            <div class="text-white">Online</div>
                        </div>
                        <!-- ./col -->
                        <div class="col-4 text-center">
                            <div id="sparkline-3"></div>
                            <div class="text-white">Sales</div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.card -->
            <div class="col-md-12">
                <!-- USERS LIST -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Latest Members</h3>

                        <div class="card-tools">
                            <span class="badge badge-danger" id="newMembers">No New Members</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <ul class="users-list clearfix" id="usersList">
                        </ul>
                        <!-- /.users-list -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                        <a href="javascript::">View All Users</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!--/.card -->
            </div>
        </section>

        <section class="col-lg-5 connectedSortable">



            <!-- Calendar -->
            <div class="card bg-gradient-success">
                <div class="card-header border-0">

                    <h3 class="card-title">
                        <i class="far fa-calendar-alt"></i>
                        Calendar
                    </h3>
                    <!-- tools card -->
                    <div class="card-tools">
                        <!-- button with a dropdown -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-bars"></i></button>
                            <div class="dropdown-menu float-right" role="menu">
                                <a href="#" class="dropdown-item">Add new event</a>
                                <a href="#" class="dropdown-item">Clear events</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">View calendar</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pt-0">
                    <!--The calendar -->
                    <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.card-body -->
            </div>

            <!--Recently Exercise -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Recently Added Exercise</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-2 pr-2" id="newExcs">
                        <li class="item">
                            <div class="product-img">
                                <img src="{{asset('img/avatar.png')}}"  alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Substring</a>
                                <span class="product-description">
                            Slice Of Mahmoud Slameh String To Sloom
                             </span>
                            </div>
                        </li>
                        <!-- /.item -->


                    </ul>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <a href="javascript:void(0)" class="uppercase">View All Products</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </section>
    </div>
    <!-- /.row -->
    @endsection

@section('scriptJs')
    <!-- JQVMap -->
    <script src="{{asset('AdminCp/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('AdminCp/plugins/jqvmap/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('AdminCp/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('AdminCp/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="js/axios.min.js"></script>
    <script>
        let form = new FormData()
        axios.post('api/AdminCp',form).then(function (res) {
            console.log('this is data')
            console.log(res.data)
            var users = res.data.users
            var excs = res.data.excs
            console.log(res.data)
            if (users != null) {

                users.forEach(function (user) {
                    $('#usersList').append('<li> <img src = \"' + "img\\" + user.img.nameImg + '\" alt="User Image"> <a class=\"users-list-name\" href=\"#\">' + user.user.first_name + ' ' + user.user.last_name + '</a> <span class=\"users-list-date\">Today</span></li>')
                })
                $('#newMembers').text(users.length +' New Member')
            }
            if (excs != null) {
                excs.forEach(function (exc) {
                    $('#newExcs').append(' <li class=\"item\"><div class=\"product-img\"><img src=\"' + exc.img + '"  alt=\"Product Image\" class=\"img-size-50\"></div><div class=\"product-info\"><a href=\"javascript:void(0)\" class=\"product-title\">'+ exc.exc.title +'</a><span class=\"product-description\">exc.exc.description</span></div></li>')
                })
            }
            console.log(res.data)
            $('#countUsers').text(res.data.countAllUsers)
            $('#countExcs').text(res.data.countAllExcs)


        })
    </script>
    @endsection
