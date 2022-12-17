@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Bölmələrin Siyahisi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Əsas Səhifə</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('admin.category.create')}}">Bölmə əlavə et</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                 <tr>
                                     <th>Bölme adı</th>
                                     <th>Slug</th>
                                     <th>Əməliyyat</th>
                                 </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th>{{$category->name}}</th>
                                    <th>{{$category->slug}}</th>
                                    <th>
                                        <a href="{{route('admin.category.edit',['id' => $category -> id])}}" class="btn btn-outline-primary">
                                           <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="{{route('admin.category.delete',['id' => $category -> id])}}"  class="btn btn-outline-danger" onclick="return confirm('silmek isyirsinizmi')">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>

                                    </th>
                                </tr>
                            @endforeach
                            </tbody>



                        </table>
                    </div>
                </div>
                <div class="card-footer">
{{--                    Footer--}}
                </div>


            </div>


        </section>
        <!-- /.content -->
    </div>
@endsection
