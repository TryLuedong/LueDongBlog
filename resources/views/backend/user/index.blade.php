@extends('layouts.backend')

@section('title', '用户列表')

@section('header')
    <h1>
        用户列表
    </h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            @include('backend.alert.success')
            <div class="box box-solid">
                <!-- /.box-header -->
                <div class="box-header">
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="{{ route('backend.user.create') }}" class="btn btn-white tooltips"
                               data-toggle="tooltip" data-original-title="新增"><i
                                        class="glyphicon glyphicon-plus"></i></a>
                        </div>
                    </div><!-- pull-right -->
                </div>
                <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>序号</th>

                            <th>名字</th>
                            <th>邮箱</th>
                            <th>创建时间</th>
                            <th>更新时间</th>
                            <th>头像</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('javascript')

    <script src="{{asset('vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

    <script src="{{asset('js/user/user-list.js')}}"></script>

    <script>
        $(function () {
            UserList.init();
        });
    </script>

@endsection