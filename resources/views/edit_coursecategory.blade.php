@extends('amaster')
@section('content')
<div class="row">
    <div class="col-md-offset-2 col-md-8">    
        <form class="wrap-box pdfull" action="{{route('coursecategories.update', $category->id)}}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('put')
            <input type="hidden" name="oldimage" value="{{$category->image}}">
            <input type="hidden" name="id" value="{{$category->id}}">
            <input type="hidden" name="courseid" value="{{$category->courseid}}">
            
            <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="coursename" id="title" aria-describedby="helpId" placeholder="Enter Title" value="{{$category->coursename}}">
            <small id="helpId" class="form-text text-muted">Not more that 200 Characters</small>
            </div>
            

            <div class="form-group">
            <label for="description">Content</label>
            <textarea class="form-control" name="description" id="description" rows="10">{{$category->description}}</textarea>
            </div>

            <div class="row">                
                    <div class="form-group">
                    <label for="image">Upload Featured Image</label>
                    <input type="file" class="form-control-file" name="image" id="image" placeholder="Upload Featured image" aria-describedby="featureddesc">
                    <small id="featureddesc" class="form-text text-muted">Image that will be displayed with the content</small>
                    </div>                           
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category" id="category">
                        <option value="National">National</option>
                        <option value="International">International</option>
                        <option value="{{$category->category}}" selected>{{$category->category}}</option>
                        <option value="Certificate">Certificate</option>
                        <option value="Diploma">Diploma</option>
                    </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="remarks">Remarks</label>
                    <select class="form-control" name="remarks" id="remarks">
                            <option value="Popular">Popular</option>
                            <option value="Featured">Featured</option>
                            <option value="{{$category->remarks}}" selected>{{$category->remarks}}</option>
                            <option value="Not Available">Not Available</option>
                            <option value="Available">Available</option>
                    </select>
                    <small id="subcat" class="form-text text-muted">sub category of post</small>
                    </div>
                </div>
               
            </div>

            <div class="wrap-btn" style="float: right">
                <button type="submit" class="flat-btn bg-color">Update</button> 
            </div>
        </form>
    </div>
</div>
@endsection