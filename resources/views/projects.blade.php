@include('layouts.header')
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                
      
        <!-- end:: Content Head -->
         <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container ">
                <div class="kt-subheader__main">
                    
                    <h3 class="kt-subheader__title">Projects</h3>
                    
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    
                    <!--<span class="kt-subheader__desc">#XRS-45670</span>-->
                    
                </div>
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper">
                       <a href="{{ route('addproject') }}" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">
                        Add Project
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">
     

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Projects List
            </h3>
        </div>
       
    </div>

    <div class="kt-portlet__body">
        <!--begin: Datatable -->
        <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
             @if ($message = Session::get('success'))
                      

                <div class="alert alert-danger fade show" role="alert">
                    <div class="alert-text">{{ $message }}</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="la la-close"></i></span>
                        </button>
                    </div>
                </div>



            @endif
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" style="width: 1237px;">
                        <thead>
                        <tr role="row">
                            <th class="sorting_desc" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 40.25px;" aria-sort="descending" aria-label="Order ID: activate to sort column ascending">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 79.25px;" aria-label="Country: activate to sort column ascending">Category</th>
                            <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 102.25px;" aria-label="Ship City: activate to sort column ascending">Title</th>
                            <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 127.25px;" aria-label="Ship Address: activate to sort column ascending">Thumb</th>
                            
                            <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 127.25px;" aria-label="Ship Address: activate to sort column ascending">Action</th>
                            
                        </tr>
                        </thead>
                            <tbody>
                             @if($projects->count() > 0)   
                             @foreach($projects as $project)
                            <tr role="row" class="odd">
                                <td class="sorting_1 bga">{{$project->id}}</td>
                                <td class="sorting_1">{{$project->category->id}}</td>
                                <td>{{$project->title}}</td>
                                <td>

                                    <div class="kt-widget5">
                                        <div class="kt-widget5__item" style="    margin-bottom: 0px;padding-bottom: 0px;">
                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__pic">
                                                    <img class="kt-widget7__img" src="{{ $project->thumb }}" alt="">
                                                </div>
                                                
                                            </div>                      
                                              <div class="kt-widget5__section" style="display: none;">
                                                <a href="#" class="kt-widget5__title">
                                                    Awesome Mobile App
                                                </a>
                                                <p class="kt-widget5__desc">
                                                    Metronic admin themes.Lorem Ipsum Amet 
                                                </p>
                                                <div class="kt-widget5__info">
                                                    <span>Author:</span>
                                                    <span class="kt-font-info">Fly themes</span>
                                                    <span>Released:</span>
                                                    <span class="kt-font-info">23.08.17</span>
                                                </div>
                                            </div>
                                        </div>
                          
                                          
                                    </div>
                                </td>
                                <td>
                                    <a href="{{route('project.edit',['id' => $project->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                   <a href="{{route('project.delete',['id' => $project->id ])}}" onclick="return confirm('Are you sure you want to Delete this Project')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                             </tr>
                            @endforeach
                            @else
                            <tr>
                                <th colspan="6" class="text-center text-danger">No Data Found</th>

                            </tr>
                            @endif
                         </tbody>
            
                    </table>
                </div>
            </div>
        </div>
        <!--end: Datatable -->
    </div>
</div> 
 </div>
    <!-- end:: Content -->                 
  </div>
                                   
</div>

@include('layouts.footer')