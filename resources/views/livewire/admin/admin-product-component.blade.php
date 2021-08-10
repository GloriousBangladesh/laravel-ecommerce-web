<div>
    <div class="conatainer" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                          All Products
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Products Name</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                   <tr>
                                       <td>{{ $product->id }}</td>
                                       <td><img src="{{ asset('assets/images/products') }}/{{ $product->image }}" width="60" alt=""></td>
                                       <td>{{ $product->name }}</td>
                                       <td>{{ $product->stock_status }}</td>
                                       <td>{{ $product->regular_price }}</td>
                                       <td>{{ $product->category->name }}</td>
                                       <td>{{ $product->created_at }}</td>
                                       <td>
                                           {{-- <a href="{{ route('admin.editcategory',['category_slug'=>$category->slug]) }}" ><i class="fa fa-edit fa-2x text-success" ></i></a>
                                           <a href="#" wire:click.prevent="deleteCategory({{ $category->id }})"style="margin-left: 50px;"><i class="fa fa-times fa-2x text-danger"></i></a> --}}
                                       </td>
                                   </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $products->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
