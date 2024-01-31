<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @php 
    $categories = DB::table('categories')->get();
  @endphp

  @foreach ($categories as $category)
      {{-- <a href="{{ route('list.category', ['id' => $category->slug]) }}">{{ $category->name }}</a> | --}}
      <a href="{{ route('list.category', ['id' => $category->id, 'slug' => $category->slug]) }}">{{ $category->name }}</a>|
  @endforeach
    
</body>
</html>