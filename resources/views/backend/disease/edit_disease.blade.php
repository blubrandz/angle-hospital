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
                <a href=" {{ route('disease.view') }} " class="btn btn-rounded btn-success md-5" style="float: right"> View Receptionist </a>
                 <h3 class="box-title">Edit {{ $data->disease_name }}</h3>

                 {{-- <h6 class="box-subtitle"><a class="text-warning" href=""> ( * ) </a> Star Maked field are mendatory to fill </h6> --}}
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action="{{Route('disease.update',$data->id)}}" enctype="multipart/form-data"> 
                        @csrf
                         <div class="row">
                        <div class="col-12">	
                            <!--main cataogy add here-->
                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Disease Main Catagory<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select class="form-control" name="disease_main_catagory">
                                                <option value="" hidden>----select main catagory for disease----</option>
                                                @foreach ($maincatagoty as $item)
                                                <option value="{{$item->main_catagory_name}}" {{ $data->disease_main_catagory == $item->main_catagory_name?"selected":'' }} > {{$item->main_catagory_name}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                       </div><!--col-6 Ended here-->
                                    </div>
                            </div>
                            <!--main catagory end here-->

                              <!--row Stared here-->
                              <div class="row">
                                  <div class="col-md-12"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>Disease Name<span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="text" name="disease_name" class="form-control" value="{{ $data->disease_name }}"  required="" aria-invalid="false"> </div>
                                      </div>
                                  </div><!--col-6 Ended here-->
                              </div>
                              <!--row Ended here-->

                              <!--row Stared here-->
                              <div class="row">
                                  <div class="col-md-12"><!--col-6 stared here-->
                                      <div class="form-group">
                                          <h5>Disease Description<span class="text-danger">*</span></h5>
                                          <div class="controls">
                                            <textarea id="editor1" class="ckeditor" name="disease_description" rows="10" cols="80" placeholder="Disease Description">  {{ $data->disease_description }} </textarea>
                                        </div>
                                  </div><!--col-6 Ended here-->
                                 </div>
                                 <!--row Ended here-->

                                                                 <!--col-6 stared here-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        {{-- <label class="col-form-label col-lg-2">Custom BS file input</label> --}}
                                        <div class="col-md-12">
                                            <h5>Choose Images of Diseases </h5>
                                            <div class="custom-file">
                                                {{-- <input type="file" multiple name="machine_image"   id="machine_image"> --}}
                                                <input type="file" name="disease_image[]" multiple accept="image/png, image/jpeg" onchange="preview()" class="form-control subMachineImage" id="file-input" >
                                                <p id="num-of-files">No Files Chosen</p>
                                                <!--image display here-->
                                                <div id="images" style="width: 200px; height: 200px ; ">
                                                    @if ($data->disease_image  == true)
                                                    @php
                                                    $imgData = explode('|' , $data->disease_image)
                                                    @endphp
                                                    @foreach ($imgData as $item)
                                                    <div style="width: 200px ; height:200px">
                                                        <img src=" {{ URL::to($item) }} "  id="showImage"   alt="">
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                </div> <!--image diplay here--> 
                                            </div>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here--> 

                                <div class="col-md-12">
                                    <br><br>
                                    <div class="form-group row">
                                        {{-- <label class="col-form-label col-lg-2">Custom BS file input</label> --}}
                                        <div class="col-md-12">
                                            <h5>Choose Videos of Diseases </h5>
                                            <div class="custom-file">
                                                <input type="file" accept="video/*" name="disease_video[]" multiple class="form-control">
                                                @php
                                                $videoData = explode('|' , $data->disease_video)
                                                @endphp
                                                @foreach ($videoData as $item)
                                                    <video width="200" class="spanVideoData" id="showvideo`" height="200" controls>
                                                        <source src="{{ URL::to($item) }}" type="video/mp4">
                                                        <source src="{{ URL::to($item) }}" type="video/ogg">
                                                        Your browser does not support HTML video.
                                                    </video>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

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
