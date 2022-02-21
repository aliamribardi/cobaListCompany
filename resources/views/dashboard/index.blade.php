@extends('dashboard.layouts.app')

@section('content')
        <div class="product-status mg-b-30">
            <div class="container-fluid" style="padding-top: 7%">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product">
                                <a href="/dashboard/create">Add Product</a>
                            </div>
                            
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
                                    {{ session('success') }}
                            </div>
                            @endif
                            
                            <table>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $post->name }}</td>
                                    <td>{{ $post->address }}</td>
                                    <td>{{ $post->city }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>
                                        <a href="/dashboard/{{ $post->id }}/edit"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                        <form action="/dashboard/{{ $post->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button data-toggle="tooltip" title="Delete" class="pd-setting-ed" onclick="return confirm('ingin menghapus data {{ $post->name }}')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>  
                                @endforeach
                            </table>
                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
