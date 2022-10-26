@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление пользователей</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-4">
                    <form action="{{route('admin.user.store')}}" method="post">
                        @csrf

                        <div class="form_group">
                            <input type="text" class="form-control mb-3" name="name" placeholder="Имя пользователя" required>
                        </div>

                        <div class="form_group">
                            <input type="text" class="form-control mb-3" name="email" placeholder="email" required>
                        </div>

                        <div class="form_group">
                            <input type="text" class="form-control mb-3" name="password" placeholder="password" required>
                        </div>

                        <button class="btn btn-primary" type="submit">Добавить</button>
                    </form>
                </div>

            </div>


            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
