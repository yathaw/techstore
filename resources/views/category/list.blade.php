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
                  	<tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</x-backend>