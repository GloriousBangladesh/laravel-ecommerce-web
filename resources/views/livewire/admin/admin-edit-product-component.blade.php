<div>
    <div class="container"style="padding: 30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-md-6">
                               Edit Product
                           </div>
                           <div class="col-md-6">
                               <a href="{{ route('admin.products') }}" class="btn btn-success pull-right">All Products</a>
                           </div>
                       </div>
                   </div>
                   <div class="panel-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                    @endif
                       <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                             <div class="form-group">
                                 <label for="Product Name" class="col-md-4 control-label">Product Name</label>
                                 <div class="col-md-4">
                                     <input type="text" placeholder="Product name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug">
                                 </div>
                             </div>
                             <div class="form-group">
                                <label for="Product Slug" class="col-md-4 control-label">Product Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Short Description" class="col-md-4 control-label">Short Description</label>
                                <div class="col-md-4">
                                    <textarea  placeholder="Short Description" class="form-control" wire:model="short_description" > </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Description" class="col-md-4 control-label">Description</label>
                                <div class="col-md-4">
                                    <textarea  placeholder=" Description" class="form-control" wire:model="description" > </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Regular Price" class="col-md-4 control-label">Regular Price</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Regular Price" class="form-control input-md" wire:model="regular_price" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Sale Price" class="col-md-4 control-label">Sale Price</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Sale Price" class="form-control input-md" wire:model="sale_price" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="SKU" class="col-md-4 control-label">SKU</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Stock" class="col-md-4 control-label">Stock</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="stock_status" >
                                        <option value="instock">instock</option>
                                        <option value="outofstock">outofstock</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Featured" class="col-md-4 control-label">Featured</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="featured" >
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Quantity" class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Product Image" class="col-md-4 control-label">Product Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file"  wire:model="newimage" >
                                    @if($newimage)
                                    <img src="{{ $newimage->temporaryUrl() }}" width="120">
                                    @else
                                     <img src="{{ asset('assets/images/products') }}/{{ $image }}" width="120">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Category" class="col-md-4 control-label">Category</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id" >
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>
