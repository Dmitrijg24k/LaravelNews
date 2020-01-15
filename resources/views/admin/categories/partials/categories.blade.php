@foreach ($categories as $category_list)

  <option value="{{$category_list->id ?? ""}}"

    @isset($category->id)

      @if ($category->parent_id == $category_list->id)
        selected=""
      @endif

      @if ($category->id == $category_list->id)
        hidden=""
      @endif

    @endisset

    >

    {!! $delimiter ?? "" !!}{{$category_list->title ?? ""}}
  </option>
{{-- Вложенный цикл - работает пока будут подкатегории к данной категории --}}
  @if (count($category_list->children) > 0)

    @include('admin.categories.partials.categories', [
      'categories' => $category_list->children,
      'delimiter'  => ' - ' . $delimiter //Для отображения вложенности
    ])

  @endif
@endforeach