<x-backend>
	<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> 
            	Category List 

            	<a href="{{ route('category.create') }}" class="btn btn-outline-success btn-sm float-right"> <i class="fas fa-plus"></i> </a>

            </h6>

        </div>
        <div class="card-body">
            @if(session('successMsg') != NULL)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> ✅ SUCCESS!</strong>
                    {{ session('successMsg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  	<thead>
                    	<tr>
                      		<th>#</th>
                      		<th>Name</th>
                      		<th>Action</th>
                    	</tr>
                  	</thead>
                  	<tfoot>
	                    <tr>
	                  		<th>#</th>
	                  		<th>Name</th>
	                  		<th>Action</th>
	                	</tr>
                  	</tfoot>
                  	<tbody>
                        @php $i=1; @endphp

                        @foreach($categories as $category)

                        @php
                            $id = $category->id;
                            $name = $category->name;
                            $photo = $category->photo;

                        @endphp
                        <tr>
                            <td> {{ $i++ }}. </td>
                            <td> 
                                <img src="{{ asset($photo) }}" class="img-fluid" style="width: 70px;">
                                {{ $name }} 
                            </td>
                            <td>
                                <a href="{{ route('category.edit',$id) }}" class="btn btn-warning">
                                    <i class="fas fa-tools"></i>
                                </a>

                                <form action="{{ route('category.destroy',$id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?')">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-outline-danger" type="submit"> 
                                        <i class="fas fa-times"></i>
                                    </button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-backend>