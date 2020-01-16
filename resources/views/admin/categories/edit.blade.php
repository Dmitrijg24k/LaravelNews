@extends('admin.layouts.app_admin')


@section('content')


<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title')  Редактирование категорий  @endslot        
        @slot('parent')  Главная @endslot        
        @slot('active')  Категории @endslot        
    @endcomponent


    <hr>

    <form class="" action="{{route('admin.category.update', $category)}}" method="post">
        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}

        {{-- form include - подключаем наш общий блог с формой--}} 

        @include('admin.categories.partials.form')
    </form>
</div>


@endsection