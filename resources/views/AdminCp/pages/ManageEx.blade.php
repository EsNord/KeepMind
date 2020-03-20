@extends('AdminCp.layouts.CpApp')
@section('style')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Exercise List</h3>
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
                    <table id="listExcs" class="table table-hover table-responsive-sm">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Count Solved</th>
                            <th >Update</th>
                            <th >Delete</th>
                            <th >View</th>
                        </tr>
                        </thead>
                        <tbody>

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
        axios.post('/api/getAllExcs',form).then(function (res) {
            console.log(res.data.excs)

            var excs = res.data.excs
            var index = 1
            if (excs != null) {
                excs.forEach(function (exc) {
                    $('#listExcs').append('<tr><td>'+index+'.</td><td>'+exc.exc.title+'</td><td id="categories'+index+'"></td><td><div class="progress progress-xs"><div id="progress'+index+'" class="progress-bar" style="width:'+exc.exc.countSolved+'%"></div></div></td><td><button class="btn btn-outline-info" onclick="edeitExc(\''+exc.exc.title+'\')">Edit</button></td><td><button class="btn btn-outline-danger" onclick="delettExc(\''+exc.exc.title+'\')" >Delete</button></td><td><button class="btn btn-outline-primary" onclick="view('+exc.exc.title+')">Show</button></td></tr>')
                    exc.categories.forEach(function (category){
                        console.log(category[0].name)
                        $('#categories'+index+'').append('<span class="badge bg-gray">'+category[0].name+'</span>')
                        if (exc.exc.countSolved <= 33){
                            $('#progress'+index+'').addClass('progress-bar-danger')
                        }
                        if (exc.exc.countSolved > 33 && exc.exc.countSolved <= 66){
                            $('#progress'+index+'').addClass('bg-warning')

                        }
                        if (exc.exc.countSolved > 33 && exc.exc.countSolved <= 66){
                            $('#progress'+index+'').addClass('bg-success')

                        }
                    })
                    index++
                })
            }
        })
    })
   function delettExc(name) {
       console.log(name)
       var form = new FormData()
       form.append('name',name)
       axios.post('/api/DeleteExc',form).then(function (res) {
           alert(true)
       })
   }
</script>
@endsection

