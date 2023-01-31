@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать Камеру</h1>
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
                <form action="{{route('camera.update',$camera->id)}}" method="post">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <input type="text" value="{{ $camera->title ?? old('title') }}" name="title" class="form-control" placeholder="Наименование">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $camera->price ?? old('price') }}" name="price" class="form-control" placeholder="Цена">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $camera->old_price ?? old('old_price') }}" name="old_price" class="form-control" placeholder="Старая цена">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $camera->count ?? old('count') }}" name="count" class="form-control" placeholder="Количество">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $camera->description ?? old('description') }}" name="description" class="form-control" placeholder="Описание">
                    </div>
                    <div class="form-group">
                        <select name="megapixel_id"  class="form-control select2" data-placeholder="Выберите мегапиксели" style="width: 100%;">
                            @foreach($megapixels as $mp)
                                <option value="{{$mp->id}}">{{$mp->title ?? old('megapixels.title')}}</option>
                            @endforeach()
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="category_id"  class="form-control select2" data-placeholder="Выберите мегапиксели" style="width: 100%;">
                            @foreach($categories as $category)
                                <option value="{{$category->id ?? old('category_id') }}">{{$category->title ?? old('category.title')}}</option>
                            @endforeach()
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редактировать" >
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
