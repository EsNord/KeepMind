@extends('AdminCp.layouts.CpApp')
@section('style')
    <link rel="stylesheet" href="{{asset('AdminCp/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminCp/plugins/toastr/toastr.min.css')}}">

@endsection

@section('content')
    <div class="row">
        <!--/.col (left) -->
        <div class="col-md-6" id="ll">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Category</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" id="AddCategory">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="Category">Category</label>
                                        <input type="text" class="form-control" id="Category" placeholder="Enter Category" required>
                                    </div>
                                    <button type="button" class="btn btn-success swalDefaultSuccess">
                                        Launch Success Toast
                                    </button>
                                    <button type="button" class="btn btn-danger swalDefaultError">
                                        Launch Error Toast
                                    </button>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id="Add">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->
        </div>

        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Anylise Category</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <p>By adding the class <code>.vertical</code> and <code>.progress-sm</code>, <code>.progress-xs</code>
                                or
                                <code>.progress-xxs</code> we achieve:</p>

                            <div class="progress vertical active">
                                <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                                    <span class="sr-only">40%</span>
                                </div>
                            </div>
                            <div class="progress vertical progress-sm">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                     aria-valuemax="100" style="height: 100%">
                                    <span class="sr-only">100%</span>
                                </div>
                            </div>
                            <div class="progress vertical progress-xs">
                                <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                                    <span class="sr-only">60%</span>
                                </div>
                            </div>
                            <div class="progress vertical progress-xxs">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="60"
                                     aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                                    <span class="sr-only">60%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->

            </div>

        </div>
        <!-- /.col (right) -->

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Category</th>
                            <th>Excersice Related</th>
                            <th style="width: 40px">Update</th>
                            <th style="width: 40px">Delete</th>

                        </tr>
                        </thead>
                        <tbody id="listCategory">

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@section('scriptJs')

    <script src="{{asset('AdminCp/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('AdminCp/plugins/sweetalert2/sweetalert2.min.js')}}"></script>


    
    <script type="text/javascript">
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                    type: 'success',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultInfo').click(function() {
                Toast.fire({
                    type: 'info',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultError').click(function() {
                Toast.fire({
                    type: 'error',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultWarning').click(function() {
                Toast.fire({
                    type: 'warning',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultQuestion').click(function() {
                Toast.fire({
                    type: 'question',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });

            $('.toastrDefaultSuccess').click(function() {
                toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultInfo').click(function() {
                toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultError').click(function() {
                toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultWarning').click(function() {
                toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });

            $('.toastsDefaultDefault').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultTopLeft').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'topLeft',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultBottomRight').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'bottomRight',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultBottomLeft').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'bottomLeft',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultAutohide').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    autohide: true,
                    delay: 750,
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultNotFixed').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    fixed: false,
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultFull').click(function() {
                $(document).Toasts('create', {
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    icon: 'fas fa-envelope fa-lg',
                })
            });
            $('.toastsDefaultFullImage').click(function() {
                $(document).Toasts('create', {
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    image: '../../dist/img/user3-128x128.jpg',
                    imageAlt: 'User Picture',
                })
            });
            $('.toastsDefaultSuccess').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultInfo').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-info',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultWarning').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-warning',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultDanger').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultMaroon').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-maroon',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
        })

        let fs = new FormData()
        $( document ).ready(function (e) {
            axios.post('/api/Categories',fs).then(function(res) {
                var categories = res.data.categories;
                var index = 1;
                if (categories != null) {
                    categories.forEach(function (category) {
                        $('#listCategory').append('<tr><td>'+index+'.</td><td>'+category.name+'</td><td><div class="progress progress-xs" ><div class="progress-bar progress-bar-danger" style="width: 55%"></div></div></td><td><button class="btn btn-outline-info" >Edit</button></td><td><button onclick="deleteC(\''+category.name+'\')" class="btn btn-outline-danger" >Delete</button></td></tr>')
                        index++;
                    })
                }
            })
        })
        function deleteC(name){
            console.log(name)
            var form = new FormData()
            form.append('name',name)
            axios.post('/api/DeleteCategory',form).then(function (res) {
                alert(true)
            })
        }


        $('#Category').change(function (e) {
            let form = new FormData()
            var Category = $('#Category').val()
            form.append('Category',Category)
            axios.post('/api/CategoryExist',form)
                .then(function (res) {
                    e.preventDefault();

                    if (res.data.find){
                        $('#Category').addClass("is-invalid")
                        $('#Add').attr("disabled",true)

                    }else {
                        $('#Category').removeClass("is-invalid")
                        $('#Add').attr("disabled",false)

                    }
                    console.log(res.data)

                })
        })
        $('#AddCategory').submit(function (e) {
            var nameCategory = $('#Category').val()
            var image = 0;
            //if($('#Image')[0].files.length != 0){image = $('#Image')[0].files[0]}


            let form = new FormData()
            form.append('nameCategory',nameCategory)
            form.append('image',image)

            axios.post('/api/AddCategory',form)
                .then(function (res) {
                console.log(res.data)
                $('#Category').val("")
            })

        })
    </script>
@endsection

