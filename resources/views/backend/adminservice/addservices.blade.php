@extends('admin.admin_master')
@section('admin')

@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
@endphp


<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      

        <!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                <a href=" {{ route('doctorspecility.view') }} " class="btn btn-rounded btn-success md-5" style="float: right"> View Services </a>
                 <h3 class="box-title">Add Services</h3>

               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form  method="POST" action="{{Route('services.store')}}" enctype="multipart/form-data"> 
                        @csrf
                         <div class="row">
                        <div class="col-12">	
                              <!--row Stared here-->
                              <div class="row">
                                  <div class="col-md-12"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>Services <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="text" name="services_name" class="form-control"  required="" aria-invalid="false"> </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
                              </div>
                              <!--row Ended here-->

                              <!--row Stared here-->
                              <div class="row">
                                  <div class="col-md-12"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>Services Description (optional) </h5>
                                          <div class="controls">
                                            <textarea rows="5" cols="5" class="form-control" name="services_description"></textarea>
                                          </div>
                                  </div><!--col-6 Ended here-->
                                 </div>
                                 <!--row Ended here-->


                             </div> 
                        </div> 
                           
                           
                           
                           <div class="text-xs-right">
                               <br>
                               <input type="submit" class="btn btn-rounded btn-info" value="Submit">
                           </div>
                       </form><!--form-->
   
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
   
           </section>
           <!-- /.content -->

   
    
    </div>
</div>
<!-- /.content-wrapper -->
{{-- <script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script> --}}

<script>
    let fileInput = document.getElementById("file-input");
    let imageContainer = document.getElementById("images");
    let numOfFiles = document.getElementById("num-of-files");

    function preview(){
        imageContainer.innerHTML = "";
        numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

        for(i of fileInput.files){
            let reader = new FileReader();
            let figure = document.createElement("figure");
            let figCap = document.createElement("figcaption");
            figCap.innerText = i.name;
            figure.appendChild(figCap);
            reader.onload=()=>{
                let img = document.createElement("img");
                img.classList.add('multi-img')
                img.setAttribute("src",reader.result);
                figure.insertBefore(img,figCap);

            }
            imageContainer.appendChild(figure);
            reader.readAsDataURL(i);
        }
    }
</script>

{{-- <script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script> --}}



@endsection
