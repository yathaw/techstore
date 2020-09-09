<x-backend>
    @php
        $id = $category->id;
        $name = $category->name;
        $photo = $category->photo;

    @endphp

	<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> 
            	Edit Existing Category 

            	<a href="{{ route('category.index') }}" class="btn btn-outline-success btn-sm float-right"> <i class="fas fa-backward"></i> </a>

            </h6>

        </div>
        <form action="{{ route('category.update',$id) }}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @method('PUT')

            <input type="hidden" name="oldphoto" value="{{ $photo }}">

            <div class="card-body">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label"> Photo </label>
                    <div class="col-sm-10">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-oldphoto-tab" data-toggle="tab" href="#nav-oldphoto" role="tab" aria-controls="nav-oldphoto" aria-selected="true"> Old Photo </a>
                                <a class="nav-link" id="nav-newphoto-tab" data-toggle="tab" href="#nav-newphoto" role="tab" aria-controls="nav-newphoto" aria-selected="false"> New Photo </a>
                            </div>
                        </nav>
                        <div class="tab-content mt-3" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-oldphoto" role="tabpanel" aria-labelledby="nav-oldphoto-tab">
                                <img src="{{ asset($photo) }}">
                            </div>
                            <div class="tab-pane fade" id="nav-newphoto" role="tabpanel" aria-labelledby="nav-newphoto-tab">
                                <input type="file" id="nav-newphoto" name="photo">
                            </div>

                            <div class="text-danger form-control-feedback">
                                {{ $errors->first('photo') }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12 ">
                        <label for="name"> Name </label>
                        <input type="text" class="form-control" id="name" placeholder="Computer" name="name" value="{{ $name }}">
                        <div class="text-danger form-control-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="reset" class="btn btn-secondary text-uppercase mr-2"> 
                    <i class="fas fa-times mr-2"></i> Cancel 
                </button>
                <button type="submit" class="btn btn-primary text-uppercase"> 
                    <i class="fas fa-save mr-2"></i> Save 
                </button>
            </div>
        </form>

    </div>
</x-backend>