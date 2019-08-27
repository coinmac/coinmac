@extends('amaster')
@section('content')
<div class="row">
    
    <div class="col-md-offset-2 col-md-8">    
            <h2 class="text-center">Create Course Content </h2>
        <form class="wrap-box pdfull" action="{{route('syllabus.store')}}" method="post"  enctype="multipart/form-data">
                @csrf            
            <div class="form-group">
            <label for="stitle">Topic</label>
            <input type="text" class="form-control" name="stitle" id="stitle" aria-describedby="helpId" placeholder="Enter Subject/Topic">
            <small id="helpId" class="form-text text-muted">Not more that 200 Characters</small>
            </div>

            <div class="form-group">
                <label for="subjectid">Select Course</label>
                <select class="form-control" name="subjectid" id="subjectid">
                        @foreach ($subjectlist as $sub)
                            <option value="{{$sub->subjectid}}">{{$sub->subjectname}}</option>
                        @endforeach
                        @if (isset($sid))                            
                        <option value="{{$sid->first()->id}}" selected>{{$sid->first()->subjectname}}</option>
                        @endif
                </select>
                <small id="subcat" class="form-text text-muted">Select Course</small>
            </div>
            
            <div class="form-group">
                <label for="soverview">General Overview</label>
                <textarea class="form-control" name="soverview" id="soverview" rows="10"></textarea>
            </div>

            <div class="form-group">
            <label for="scontent">Main Content</label>
            <textarea class="form-control" name="scontent" id="scontent" rows="10"></textarea>
            </div>            

            <div class="form-group">
                <label for="surl">Content URL</label>
                <input type="text" class="form-control" name="surl" id="surl" aria-describedby="helpId1" placeholder="https://www.example.com">
                <small id="helpId1" class="form-text text-muted">(optional) External URL of course course content</small>
            </div>

            <div class="row">  
                    <div class="col-md-6">              
                        <div class="form-group">
                        <label for="simage">Upload Featured Image</label>
                        <input type="file" class="form-control-file" name="simage" id="simage" placeholder="Upload Featured simage" aria-describedby="featureddesc">
                        <small id="featureddesc" class="form-text text-muted">Image that will be displayed with the content</small>
                        </div>  
                    </div>  
                    <div class="col-md-3">
                        <div class="form-group">
                        <label for="stype">Type</label>
                        <select class="form-control" name="stype" id="stype">
                            <option value="Video">Video</option>
                            <option value="Text" selected>Text</option>                           
                            <option value="Audio">Audio</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label for="scategory">Category</label>
                        <select class="form-control" name="scategory" id="scategory">
                            <option value="Prerequisite">Prerequisite</option>
                            <option value="Compulsory">Compulsory</option>                           
                            <option value="Optional">Optional</option>
                            <option value="General" selected>General</option>
                        </select>
                        </div>
                    </div>                         
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                    <label for="sstatus">Status</label>
                    <select class="form-control" name="sstatus" id="sstatus">
                        <option value="Available" selected>Available</option>
                        <option value="Closed">Closed</option>                           
                        <option value="Upcoming">Upcoming</option>
                    </select>
                    </div>
                </div>
                <div class="col-md-3">
                        <div class="form-group">
                            <label for="stime">Duration (Minutes)</label>
                            <input type="number" class="form-control" name="stime" id="stime" aria-describedby="helpIdd" placeholder="Duration in minutes">
                            <small id="helpIdd" class="form-text text-muted">Duration to complete lesson</small>
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="sauthor">Author</label>
                    <select class="form-control" name="sauthor" id="sauthor">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                            
                            <option value="Admin" selected>Admin</option>
                            
                    </select>
                    <small id="subcat" class="form-text text-muted">Select Author</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="sfee">Fee:</label>
                      <input type="text" class="form-control" name="sfee" id="sfee" aria-describedby="sfees" placeholder="Amount/Cost of this course" value="Free">
                      <small id="sfees" class="form-text text-muted">Please enter only numbers in Naira</small>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sremarks">Remarks:</label>
                        <input type="text" class="form-control" name="sremarks" id="sremarks" aria-describedby="durationhelp" placeholder="Remarks">
                        <small id="durationhelp" class="form-text text-muted">Make a remark for this content</small>
                    </div>
                </div>
            </div>

            <div class="wrap-btn" style="float: right">
                <button type="submit" class="flat-btn bg-color">Submit Content</button> 
            </div>
        </form>
    </div>
</div>
@endsection