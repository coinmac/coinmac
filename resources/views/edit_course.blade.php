@extends('amaster')
@section('content')
<div class="row">
    <div class="col-md-offset-2 col-md-8">    
    
        <form class="wrap-box pdfull" action="{{route('updatecourse', $course->id)}}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('put')
            <input type="hidden" name="oldimage" value="{{$course->image}}">
            <input type="hidden" name="id" value="{{$course->id}}">
            <input type="hidden" name="subjectid" value="{{$course->subjectid}}">
            
            <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="subjectname" id="title" aria-describedby="helpId" placeholder="Enter Title" value="{{$course->subjectname}}">
            <small id="helpId" class="form-text text-muted">Not more that 200 Characters</small>
            </div>
            

            <div class="form-group">
            <label for="description">Content</label>
            <textarea class="form-control" name="description" id="description" rows="10">{{$course->description}}</textarea>
            </div>

            <div class="row">  
                    <div class="col-md-6">              
                        <div class="form-group">
                        <label for="image">Upload Featured Image</label>
                        <input type="file" class="form-control-file" name="image" id="image" placeholder="Upload Featured image" aria-describedby="featureddesc">
                        <small id="featureddesc" class="form-text text-muted">Image that will be displayed with the content</small>
                        </div>  
                    </div>  
                    <div class="col-md-6">              
                        <div class="form-group">
                        <label for="images">Upload Course Gallery Images</label>
                        <input type="file" class="form-control-file" name="images[]" id="images" placeholder="Upload Featured image" aria-describedby="galleryimgs" multiple>
                        <small id="galleryimgs" class="form-text text-muted">Image that will be displayed with the gallert</small>
                        </div>  
                    </div>                         
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category" id="category">
                        <option value="Featured">Featured</option>
                        <option value="Popular">Popular</option>
                        <option value="{{$course->category}}" selected>{{$course->category}}</option>
                        <option value="Available">Available</option>
                        <option value="Not Available">Not Available</option>
                    </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="coursecategory">Course Category</label>
                    <select class="form-control" name="coursecategory" id="coursecategory">
                            @foreach ($coursecategories as $cca)
                                <option value="{{$cca->coursename}}">{{$cca->coursename}}</option>
                            @endforeach
                            
                            <option value="{{$course->coursecategory}}" selected>{{$course->coursecategory}}</option>
                            
                    </select>
                    <small id="subcat" class="form-text text-muted">Course Category</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                      <label for="amount">Amount (National):</label>
                      <input type="text" class="form-control" name="amount" id="amount" aria-describedby="amounthelp" placeholder="Amount/Cost of the Training" value="{{$course->amount}}">
                      <small id="amounthelp" class="form-text text-muted">Please enter only numbers in Naira</small>
                    </div>
                </div>
            

                <div class="col-md-3">
                    <div class="form-group">
                      <label for="amounti">Amount (International):</label>
                      <input type="text" class="form-control" name="amounti" id="amounti" aria-describedby="amounthelpi" placeholder="Foreign" value="{{$course->amounti}}">
                      <small id="amounthelpi" class="form-text text-muted">Please enter only numbers</small>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="duration">Duration:</label>
                        <input type="number" class="form-control" name="duration" id="duration" aria-describedby="durationhelp" placeholder="Duration of the Training"  value="{{$course->duration}}">
                        <small id="durationhelp" class="form-text text-muted">Please enter only numbers in days</small>
                    </div>
                </div>
            </div>

            <h2>Dates (National) </h2><hr>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                      <label for="date1from">First Run Date - From:</label>
                      <input type="text" class="date form-control" name="date1from" id="date1from" placeholder="First run Date" value="{{array_pad(explode(' - ', $course->date1, 2), 2, null)[0]}}">                      
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date1to">First Run Date - To:</label>
                        <input type="text" class="date form-control" name="date1to" id="date1to" placeholder="First run Date" value="{{array_pad(explode(' - ', $course->date1, 2), 2, null)[1]}}">                       
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date2from">Second Run Date - From:</label>
                        <input type="text" class="date form-control" name="date2from" id="date2from" placeholder="Second run Date" value="{{array_pad(explode(' -', $course->date2, 2), 2, null)[0]}}">                      
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date2to">Second Run Date - To:</label>
                        <input type="text" class="date form-control" name="date2to" id="date2to" placeholder="Second run Date" value="{{array_pad(explode(' -', $course->date2, 2), 2, null)[1]}}">                       
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date3from">Third Run Date - From:</label>
                        <input type="text" class="date form-control" name="date3from" id="date3from" placeholder="Third run Date" value="{{array_pad(explode(' -', $course->date3, 2), 2, null)[0]}}">                      
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date3to">Third Run Date - To:</label>
                        <input type="text" class="date form-control" name="date3to" id="date3to" placeholder="Third run Date" value="{{array_pad(explode(' -', $course->date3, 2), 2, null)[1]}}">                       
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date4from">Fourth Run Date - From:</label>
                        <input type="text" class="date form-control" name="date4from" id="date4from" placeholder="Fourth run Date" value="{{array_pad(explode(' -', $course->date4, 2), 2, null)[0]}}">                      
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date4to">Fourth Run Date - To:</label>
                        <input type="text" class="date form-control" name="date4to" id="date4to" placeholder="Fourth run Date" value="{{array_pad(explode(' -', $course->date4, 2), 2, null)[1]}}">                       
                    </div>
                </div>
            </div>
            
            <h2>Dates (International) </h2><hr>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date1fromi">First Run Date - From:</label>
                        <input type="text" class="date form-control" name="date1fromi" id="date1fromi" placeholder="First run Date" value="{{array_pad(explode(' -', $course->date1i, 2), 2, null)[0]}}">                      
                    </div>
                </div>
            
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date1toi">First Run Date - To:</label>
                        <input type="text" class="date form-control" name="date1toi" id="date1toi" placeholder="First run Date" value="{{array_pad(explode(' -', $course->date1i, 2), 2, null)[1]}}">                       
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date2fromi">Second Run Date - From:</label>
                        <input type="text" class="date form-control" name="date2fromi" id="date2fromi" placeholder="Second run Date" value="{{array_pad(explode(' -', $course->date2i, 2), 2, null)[0]}}">                      
                    </div>
                </div>
            
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date2toi">Second Run Date - To:</label>
                        <input type="text" class="date form-control" name="date2toi" id="date2toi" placeholder="Second run Date" value="{{array_pad(explode(' -', $course->date2i, 2), 2, null)[1]}}">                       
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date3fromi">Third Run Date - From:</label>
                        <input type="text" class="date form-control" name="date3fromi" id="date3fromi" placeholder="Third run Date" value="{{array_pad(explode(' -', $course->date3i, 2), 2, null)[0]}}">                      
                    </div>
                </div>
            
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date3toi">Third Run Date - To:</label>
                        <input type="text" class="date form-control" name="date3toi" id="date3toi" placeholder="Third run Date" value="{{array_pad(explode(' -', $course->date3i, 2), 2, null)[1]}}">                       
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date4fromi">Fourth Run Date - From:</label>
                        <input type="text" class="date form-control" name="date4fromi" id="date4fromi" placeholder="Fourth run Date" value="{{array_pad(explode(' -', $course->date4i, 2), 2, null)[0]}}">                      
                    </div>
                </div>
            
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date4toi">Fourth Run Date - To:</label>
                        <input type="text" class="date form-control" name="date4toi" id="date4toi" placeholder="Fourth run Date" value="{{array_pad(explode(' -', $course->date4i, 2), 2, null)[1]}}">                       
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="venue">Venue (National) </label>
                        <select class="form-control" name="venue" id="venue">
                            <option value="Abuja">Abuja</option>
                            <option value="Lagos">Lagos</option>
                            <option value="{{$course->venue}}" selected>{{$course->venue}}</option>
                            <option value="Port Harcourt">Port Harcourt</option>
                            <option value="Ibadan">Ibadan</option>
                            <option value="Coming Soon">Coming Soon</option>
                        </select>
                    </div>  
                </div>
            

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="venuei">Venue (International) </label>
                        <select class="form-control" name="venuei" id="venuei">
                            <option value="Dubai">Dubai</option>
                            <option value="USA">USA</option>
                            <option value="{{$course->venuei}}" selected>{{$course->venuei}}</option>
                            <option value="India">India</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Coming Soon">Coming Soon</option>
                        </select>
                    </div>  
                </div>
            </div>
            
            <div class="form-group">
                <label for="prerequisite">Target Participants</label>
                <input class="form-control" name="prerequisite" id="prerequisite" placeholder="{{$course->prerequisite}}">
                        
                <small id="subcat" class="form-text text-muted">Select Course</small>
            </div>
            <div class="form-group">
                    <label for="description">Course Objectives</label>
                    <textarea class="form-control" name="tolearn" id="tolearn" rows="5">{{$course->tolearn}}</textarea>                    
            </div>

            
            <div class="form-group">
                    <label for="testimony">Testimony</label>
                    <textarea class="form-control" name="testimony" id="testimony" rows="3">{{$course->testimony}}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="student">Testifier</label>
                <input type="text" class="date form-control" name="student" id="student" placeholder="Testifier">                       
            </div>
            <div class="form-group col-md-6">
                <label for="level">Level</label>
                <input type="text" class="date form-control" name="level" id="level" placeholder="Level">                       
            </div>
            
            
                    

            <div class="wrap-btn" style="float: right">
                <button type="submit" class="flat-btn bg-color">Update Course</button> 
            </div>
        </form>
    
    </div>
</div>
@endsection