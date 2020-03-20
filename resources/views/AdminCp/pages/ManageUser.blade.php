@extends('AdminCp.layouts.CpApp')
@section('style')


@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User List</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm w-100">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table id="listUsers" class="table table-hover table-responsive-sm">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Avatar</th>
                            <th>Username</th>
                            <th>Rank</th>
                            <th >Ban</th>
                            <th >View</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.</td>
                            <td>
                                <img src="{{asset('img/avatar.png')}}"  width="20%" class="img-circle elevation-2" alt="User Image">
                            </td>
                            <td>
                                Sloom@123
                            </td>
                            <td>
                                <i class="fa fa-level-up-alt text-info"></i> 34
                            </td>
                            <td><button class="btn btn-outline-danger">Delete</button></td>
                            <td><button class="btn btn-outline-primary">Show</button></td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>
                                <img src="{{asset('img/avatar.png')}}"  width="20%" class="img-circle elevation-2" alt="User Image">
                            </td>
                            <td>
                                Sloom@123
                            </td>
                            <td>
                                <i class="fa fa-level-up-alt text-info"></i> 34
                            </td>
                            <td><button class="btn btn-outline-danger">Delete</button></td>
                            <td><button class="btn btn-outline-primary">Show</button></td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>
                                <img src="{{asset('img/avatar.png')}}"  width="20%" class="img-circle elevation-2" alt="User Image">
                            </td>
                            <td>
                                Sloom@123
                            </td>
                            <td>
                                <i class="fa fa-level-up-alt text-info"></i> 34
                            </td>
                            <td><button class="btn btn-outline-danger">Delete</button></td>
                            <td><button class="btn btn-outline-primary">Show</button></td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>
                                <img src="{{asset('img/avatar.png')}}"  width="20%" class="img-circle elevation-2" alt="User Image">
                            </td>
                            <td>
                                Sloom@123
                            </td>
                            <td>
                                <i class="fa fa-level-up-alt text-info"></i> 34
                            </td>
                            <td><button class="btn btn-outline-danger">Delete</button></td>
                            <td><button class="btn btn-outline-primary">Show</button></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination m-0 float-right ">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@section('scriptJs')
<script>
    $(document).ready(function (e) {
        let form = new FormData()
        console.log('lkjhgfd')
        axios.post('/api/getAllUsers',form).then(function (res) {
            var users = res.data.users
            var index = 1
            console.log(res.data)
            users.forEach(function (user) {
                console.log('lkjhgfd')

                $('#listUsers').append('<tr><td>'+index+'.</td><td><img src=\"\\' + "img\\" + user.img.nameImg + '\"  width="20%" class="img-circle elevation-2" alt="User Image"></td><td>'+user.user.user_name+'</td><td><i class="fa fa-level-up-alt text-info"></i>'+user.user.rank+'</td><td><button class="btn btn-outline-danger">Delete</button></td><td><button class="btn btn-outline-primary">Show</button></td></tr>')
                index++
            })
        })
    })
</script>
@endsection

