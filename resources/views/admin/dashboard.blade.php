@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="btn btn-primary">Категорий 0</span></p>
                </div>
            </div>   
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="btn btn-primary">Материалов 0</span></p>
                </div>
            </div>   
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="btn btn-primary">Посетителей 0</span></p>
                </div>
            </div>   
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="btn btn-primary">Сегодня 0</span></p>
                </div>
            </div>   
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-secondary">Создать категорию</a>
                <a href="#" class="list-group-item list-group-item-action">
                    <h4 class="mb-1">Категория первая</h4>
                    <p class="list-group-item-text">
                        Кол-во материалов
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-secondary">Создать материал</a>
                <a href="#" class="list-group-item list-group-item-action">
                    <h4 class="mb-1">Материал первый</h4>
                    <p class="list-group-item-text">
                        Категория
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection