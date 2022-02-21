@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    @foreach ($category as $cat)
    <div class="col-md-4 my-5">
     <a href="/show/{{ $cat->id }}" class="text-light text-decoration-none">
       <button type="button" class="btn btn-primary">
        {{ $cat->name }} <span class="badge bg-secondary">{{ $cat->posts->count() }}</span>
       </button>
     </a>
    </div>     
    @endforeach
  </div>
</div>
    
@endsection