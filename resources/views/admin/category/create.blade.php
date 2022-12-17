@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Bölmə əlavə et</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Panel</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('admin.category.index')}}">Bölmələr siyahısı</a> </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            @if(session('succses'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif

            <div class="card">
                <form action="{{route('admin.category.store')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="from-label"> Bölmə adı</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-success">Əlavə et</button>
                    </div>
                </form>
            </div>


        </section>
        <!-- /.content -->
    </div>
@endsection

