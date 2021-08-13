<div>
    <div class="container"style="padding: 30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-md-6">
                               Edit Slide
                           </div>
                           <div class="col-md-6">
                               <a href="{{ route('admin.homeslider') }}" class="btn btn-success pull-right">All Slides</a>
                           </div>
                       </div>
                   </div>
                   <div class="panel-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
               @endif
                       <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateSlide">
                             <div class="form-group">
                                 <label for="Title" class="col-md-4 control-label">Title</label>
                                 <div class="col-md-4">
                                     <input type="text" placeholder="Title" class="form-control input-md" wire:model="title" >
                                 </div>
                             </div>
                             <div class="form-group">
                                <label for="Subtitle" class="col-md-4 control-label">Subtitle</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Subtitle" class="form-control input-md" wire:model="subtitle" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Price" class="col-md-4 control-label">Price</label>
                                <div class="col-md-4">
                                    <input type="text"  placeholder="Price" class="form-control" wire:model="price" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Link" class="col-md-4 control-label">Link</label>
                                <div class="col-md-4">
                                    <input type="text"  placeholder=" Link" class="form-control" wire:model="link" >
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="Product Image" class="col-md-4 control-label">Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file"  wire:model="newimage" >
                                    @if($newimage)
                                       <img src="{{ $newimage->temporaryUrl() }}" width="120">
                                    @else
                                    <img src="{{ asset('assets/images/sliders') }}/{{ $image }}" width="120">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Category" class="col-md-4 control-label">Status</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="status" >
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>
