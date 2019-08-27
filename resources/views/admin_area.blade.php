@extends('amaster')
@section('content')
<div class="row">
    <div class="col-md-offset-2 col-md-8">    
        <form action="{{route('contents.store')}}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="title">Enter Title</label>
            <input type="text"
                class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Enter Title">
            <small id="helpId" class="form-text text-muted">Not more that 200 Characters</small>
            </div>
            
            <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text"
                class="form-control" name="subtitle" id="subtitle" aria-describedby="subtitlehelp" placeholder="Subtitle">
            <small id="subtitlehelp" class="form-text text-muted">A descriptive subtitle</small>
            </div>

            <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" rows="10"></textarea>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="featured_img">Upload Featured Image</label>
                    <input type="file" class="form-control-file" name="featured_img" id="featured_img" placeholder="Upload Featured image" aria-describedby="featureddesc">
                    <small id="featureddesc" class="form-text text-muted">Image that will be displayed with the content</small>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="otherimages">Upload other images</label>
                    <input type="file" class="form-control-file" name="otherimages" id="otherimages" placeholder="Upload other images" aria-describedby="otherimagesdesc">
                    <small id="otherimagesdesc" class="form-text text-muted">This could be gallery images</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category" id="category">
                        <option value="News">News</option>
                        <option value="Events">Events</option>
                        <option value="Testimonial">Testimonial</option>
                        <option value="Announcement">Announcement</option>
                    </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="subcategory">Subcategory</label>
                    <input type="text"
                        class="form-control" name="subcategory" id="subcategory" aria-describedby="subcat" placeholder="Subcategory">
                    <small id="subcat" class="form-text text-muted">sub category of post</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text"
                        class="form-control" name="type" id="type" aria-describedby="type" placeholder="Type">
                        <small id="type" class="form-text text-muted">sub category of post</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text"
                        class="form-control" name="author" id="author" aria-describedby="author" placeholder="Author">
                    <small id="author" class="form-text text-muted">Enter testifyer if testimonial</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="ranking">Ranking</label>
                    <input type="number"
                        class="form-control" name="ranking" id="ranking" aria-describedby="dranking" placeholder="Display Ranking">
                    <small id="dranking" class="form-text text-muted">As it will appear on display list</small>
                    </div>
                </div>
                <div class="col-md-4">
                        <div class="form-group">
                            <label for="category">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="Published">Published</option>
                                <option value="Trashed">Trashed</option>
                                <option value="Restricted">Restricted</option>
                                <option value="Featured">Featured</option>
                            </select>
                        </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection