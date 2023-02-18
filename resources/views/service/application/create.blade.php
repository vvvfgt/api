@extends('shop.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить заявку</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
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
                <form action="{{ route('applications.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="hidden" name="akismet">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Тема">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Почта">
                    </div>

                    <div class="form-group">
                        <textarea name="message" cols="30" rows="10" placeholder="Сообщение"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
