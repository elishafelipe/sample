@extends('layouts.main')
@section('contents')



<div id="wrapper">
    @extends('layouts.sidebar')     

        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            Bus Information
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="dashboard">Home</a></li>
					  <li><a href="/buses">Bus Information</a></li>
					  
					</ol> 
									
		</div>
        <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Bus Information
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Bus Route</th>
                                            <th>Bus Platenumber</th>
                                            <th>Total Seats</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($buses as $bus)
                                        <tr class="odd gradeX">
                                            <td> {{ $bus->bus_route }} </td>
                                            <td> {{ $bus->bus_platenumber }}</td>
                                            <td class="center"> {{ $bus->total_seats }}</td>
                                            <td class="center">{{ $bus->is_fullybooked }}</td>
                                            <td>    
                                            <form action="#" method="POST">
                                                @method('DELETE')
                                                @csrf   
                                                <a href="#" class="btn btn-outline-info py-0">
                                                    <i class="mdi mdi-eye-outline"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary py-0">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <button class="btn btn-outline-danger py-0">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </form>  

                                            </td>
                                        </tr>
                                        
                                    @empty
                                        <tr>
                                            <td colspan="100%" class="text-center">
                                                No data available.
                                            </td>
                                        </tr>    
                                     
                                     @endforelse   
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
</div>
@endsection