@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить регистратор</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"></li>
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
                <form action="{{route('recorder.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Наименование" >
                    </div>
                    <div class="form-group">
                        <textarea type="text" cols="50" rows="7" name="description" class="form-control" placeholder="Описание"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" class="form-control" placeholder="Цена" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="old_price" class="form-control" placeholder="Старая цена">
                    </div>
                    <div class="form-group">
                        <input type="text" name="count" class="form-control" placeholder="Количество на складе" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile"></label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузка</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <select name="category_id" class="form-control select2" data-placeholder="Выберите категорию" style="width: 100%;">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach()
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="channel_id" class="form-control select2" data-placeholder="Выберите каналы" style="width: 100%;">
                            @foreach($channels as $channel)
                                <option value="{{$channel->id}}">{{$channel->title}}</option>
                            @endforeach()
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить" >
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
