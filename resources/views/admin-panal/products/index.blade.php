@extends('admin-panal.layout.app')

@section('content')

  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Products Tables <small></small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Products Tables</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>Discount Price</th>

                          <th>Image</th>
                          <th>Category</th>
                          <th>Sub Category</th>
                        </tr>




                      </thead>
                      <tbody>
                        @foreach ($products as $product)


                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->discount_price }}</td>
                            <td>
    @if ($product->image)
        <img src="{{ asset('storage/' . $product->image) }}"
             alt="{{ $product->title }}"
             width="100"
             height="100"
             style="object-fit: cover;">
    @else
        No Image
    @endif
</td>

                            {{-- <td><img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" width="100"></td> --}}
                            <td>{{ $product->category->name ?? 'N/A' }}</td>
                            <td>{{ $product->subCategory->name ?? 'N/A' }}</td>

                        </tr>
                        @endforeach


                      </tbody>
                    </table>

                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>


@endsection
