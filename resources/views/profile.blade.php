@extends('layouts.app')
    <style>
    body {
    
        background-image: url("https://venngage-wordpress.s3.amazonaws.com/uploads/2018/09/Simple-Background-Images-2.png");
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }

    /* .othertop{margin-top:10px;} */

    .icons
    {
      padding:10px;
    }
    </style>

@section('content')

   <div class="container">
        <div class="row">
          <div class="col-md">
            <form class="form-horizontal" method="POST" action="{{URL('/profile')}}">
            @csrf
                <fieldset>

                        <!-- Form Name -->
                        <legend>User profile form requirement</legend>
                                
                              <div class="form-group">
                              

                                                <div class="row">
                                                                <div class="col-md-6">

                                                                              <label class="col-md-6  control-label" for="name">Name</label>  
                                                                  
                                                                                <div class="input-group">
                                                                                              <div class="input-group-addon">
                                                                                                <i class="fa fa-user icons">
                                                                                                </i>
                                                                                              </div>
                                                                                      <input id="Name (Full name)" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                                                                </div>
                                                                  

                                                                </div>
                                                                  <div class="col-md-6">



                                                                      <!-- File Button --> 
                                                                              <div class="form-group">
                                                                             
                                                                                  <!-- <label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
                                                                                
                                                                                    <input id="Upload photo" name="Upload photo" class="input-file" type="file"> -->
                                                                                  
                                                                                </div>

                                                                  </div>
                                                </div>
                                    
                              </div>

               

            <!-- Text input-->
            <div class="form-group">
        
            <div class=row>
                            <div class="col-md-6">


                                <label class="col-md-4 control-label" for="dob">Date Of Birth</label>  
                                  

                                        <div class="input-group">
                                              <div class="input-group-addon">
                                                  <i class="fa fa-birthday-cake icons"></i>
                                      
                                              </div>
                                                <input id="Date Of Birth" name="dob" type="date" placeholder="Date Of Birth" class="form-control input-md"required>
                                        </div>
                                  
                              </div>

                        <div class="col-md-6">


                        <!-- Text input-->
                                      <div class="form-group">
                                        @csrf
                                          <label class="col-md-4 control-label" for="Father">Father's name</label>  
                                                  
                                                          <div class="input-group">
                                                                  <div class="input-group-addon">
                                                                      <i class="fa fa-male icons" style="font-size: 20px;"></i>
                                                        
                                                                  </div>
                                                                    <input id="Father" name="fathersname" type="text" placeholder="Father's name" class="form-control input-md" required>
                                                          </div>
                                                
                                      </div>

                        </div>
            </div>

            </div>



<!-- Text input-->
          <div class="form-group">
            <div class="row">
                        <div class="col-md-6">

                                    <label class="col-md-4 control-label" for="Mother">Mother's Name</label>  
                                    
                                              <div class="input-group">
                                                        <div class="input-group-addon">
                                                        <i class="fa fa-female icons" style="font-size: 20px;"></i>
                                                          
                                                        </div>
                                                    <input id="Mother" name="mothersname" type="text" placeholder="Mother's Name" class="form-control input-md"required>
                                            
                                              </div>
                                      
                                    



                        </div>
                        <div class="col-md-6">



                                              <!-- Multiple Radios (inline) -->
                                        <div class="form-group">
                                                <label class="col-md-4 control-label" for="Gender">Gender</label>
                                                          <div class="col-md-4"> 
                                                              <span> <label class="radio-inline" for="Gender-0">
                                                              <input type="radio" name="Gender" id="Gender-0" value="m" checked="checked">
                                                              Male
                                                            </label> </span>
                                                              <span>   <label class="radio-inline" for="Gender-1">
                                                              <input type="radio" name="Gender" id="Gender-1" value="f">
                                                              Female
                                                            </label></span> 
                                                            <!-- <label class="radio-inline" for="Gender-2">
                                                              <input type="radio" name="Gender" id="Gender-2" value="o">
                                                              Other
                                                            </label> -->
                                                          </div>
                                        </div>
                      
                        </div>
          </div>
            
          </div>

          <div class="form-group">
                  <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Permanent Address</label> 
                      <div class="row"> 
                                <div class="col-md-6  col-xs-6">
                                <input id="Permanent Address" name="district" type="text" placeholder="district" class="form-control input-md " required>
                                </div>

                                  <div class="col-md-6 col-xs-6">

                                  <input id="Permanent Address" name="area" type="text" placeholder="area" class="form-control input-md " required>
                                  </div>

                    

                      
                    </div>


          </div>




<!-- Text input-->
            <div class="form-group">

            <div class="row">
                        <div class="col-md-6">


                                  <label class="col-md-4 control-label" for="Phone number ">Phone number </label>  
                            
                                          <div class="input-group">
                                              <div class="input-group-addon">
                                                      <i class="fa fa-phone icons"></i>
                                                </div>
                                                  <input id="Phone number " name="contact" type="mobile" placeholder="Primary Phone number " class="form-control input-md" required>
                                            
                                          </div>
                            

                        </div>
                            <div class="col-md-6">


                                                  <!-- Text input-->
                                              <div class="form-group">
                                                        <label class="col-md-4 control-label" for="Email Address">Email Address</label>  
                                                  
                                                                  <div class="input-group">
                                                                                        <div class="input-group-addon">
                                                                                              <i class="fa fa-envelope-o icons"></i>
                                                                                          
                                                                                        </div>
                                                                                  <input id="Email Address" name="email" type="text" placeholder="Email Address" class="form-control input-md" required>
                                                                    
                                                                  </div>
                                                  
                                              
                                                </div>
                                      

                            </div>
            </div>
              
            </div>








<!-- Text input-->
                          <div class="form-group">
                                  <label class="col-md-4 control-label" for="Working Experience (time period)">Working Experience (time period)</label>  
                                      <div class="col-md-4">
                                                <div class="input-group">
                                                            <div class="input-group-addon">
                                                                    <i class="fa fa-clock-o icons"></i>
                                                              
                                                            </div>
                                                            <input id="Working Experience (time period)" name="workexp" type="text" placeholder="Enter time period " class="form-control input-md"/>
                                                  
                                                  
                                              </div>
                                    
                                      </div>
                          </div>

<!-- Textarea -->
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="Overview (max 200 words)">Overview (max 200 words)</label>
  <div class="col-md-4">                     
    <textarea class="form-control" rows="10"  id="Overview (max 200 words)" name="overview" required>>Overview</textarea>
  </div>
</div> -->


                          <div class="form-group">
                                <label class="col-md-4 control-label" ></label>  
                                          <div class="col-md-4">
                                              <button type="submit" class="btn btn-primary">SUBMIT</button>
                                              <a href="#" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a>
                                            
                                          </div>
                          </div>

  </fieldset>
</form>
</div>



</div>
   </div>
  

@endsection
