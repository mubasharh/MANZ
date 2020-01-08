@include('layouts.header')
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                
        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container ">
                <div class="kt-subheader__main">
                    
                    <h3 class="kt-subheader__title">Client</h3>
                    
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    
                    <span class="kt-subheader__desc">#XRS-45670</span>
                    
                </div>
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper">
                       <a href="{{ route('clients') }}" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">
                        Client List
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Content Head -->
    <!-- begin:: Content -->
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Portlet-->
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Add Client
                                </h3>
                            </div>
                        </div>
                        @if(count ($errors) > 0 )

                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                <li class="list-group-item text-danger">
                                    {{ $error }}
                                </li>
                                @endforeach
                            </ul>
                            
                        @endif
                        <!-- show msg -->
                        @if ($message = Session::get('success'))
                      

                        <div class="alert alert-success fade show" role="alert">
                            <div class="alert-text">{{ $message }}</div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                        </div>

                        @endif
                        <!--begin::Form-->
                        <form class="kt-form" method="POST" action="{{route('client.store')}}">
                            @csrf
                            <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                    <div class="form-group row">
                                        <div class=col-lg-3>
                                            <label>Full Name:</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter full name">
                                            <span class="form-text text-muted">Please enter Client full name</span>
                                        </div>
                                        <div class=col-lg-3>
                                            <label>Email:</label>
                                            <input type="email" name="email" class="form-control" placeholder="Enter full name">
                                            <span class="form-text text-muted">Please enter Client Email</span>
                                        </div>
                                        <div class=col-lg-3>
                                            <label>Phone Number:</label>
                                            <input type="text" name="phone_no" class="form-control" placeholder="Enter full name">
                                            <span class="form-text text-muted">Please enter Client Mobile NO</span>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="exampleTextarea">ClientAddress</label>
                                            <textarea class="form-control" name="c_address" id="exampleTextarea" rows="3"></textarea>
                                        </div>
                                    </div>
                                     
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Portlet-->
                </div>
                
        </div> 
     </div>
    <!-- end:: Content -->                 
  </div>
                                   
</div>

@include('layouts.footer')