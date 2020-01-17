@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="btn btn-primary">Категорий {{$count_categories}}</span></p>
                </div>
            </div>   
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="btn btn-primary">Материалов {{$count_articles}}</span></p>
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
                <a href="{{route('admin.category.create')}}" class="btn btn-block btn-secondary">Создать категорию</a>
                @foreach ($categories as $category)
                <a href="{{route('admin.category.edit', $category)}}" class="list-group-item list-group-item-action">
                    <h4 class="mb-1">{{$category->title}}</h4>
                    <p class="list-group-item-text">
                        {{$category->articles()->count()}}
                    </p>
                </a>
                @endforeach
            </div>
            <div class="col-sm-6">
                <a href="{{route('admin.article.create')}}" class="btn btn-block btn-secondary">Создать материал</a>
                @foreach ($articles as $articles)
                <a href="{{route('admin.article.edit', $articles)}}" class="list-group-item list-group-item-action">
                    <h4 class="mb-1">{{$articles->title}}</h4>
                    <p class="list-group-item-text">
                        {{$articles->categories()->pluck('title')->implode(', ')}}
                    </p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection