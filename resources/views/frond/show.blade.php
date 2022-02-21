@extends('layouts.app')

@section('content')

 <div class="container">
     <div class="row">
         <h2>{{ $posts->name }}</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Address</th>
              <th scope="col">City</th>
              <th scope="col">Category</th>
              <th scope="col">Acrion</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts->posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->name }}</td>
              <td>{{ $post->address }}</td>
              <td>{{ $post->city }}</td>
              <td>{{ $post->category->name }}</td>
              <td>
                <a href="/detail/{{ $post->id }}">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    SHOW
                  </button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
     </div>
 </div>


 <!-- Button trigger modal -->



    
@endsection