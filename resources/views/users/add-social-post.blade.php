@extends('users.layouts.app')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<div class="page-wrapper">
			<div class="content container-fluid">
<div class="content mt-5">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-2">Add Post</h3> </div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-lg-12">
						<form action="{{route('Post_store')}}"method="POST"enctype="multipart/form-data">
{{ csrf_field() }}
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Title</label>
										<input class="form-control" name="title" type="text" value=""> </div>
								</div><br>
								<div class="col-md-4">
									<div class="form-group">
										<label>File Upload</label>
										<div class="custom-file mb-3">
											<input type="file" class="custom-file-input" id="customFile" name="image">
											<label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="display-block">Post Status</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="status" id="blog_active" value="Public" checked="">
										<label class="form-check-label" for="poste_active"> Public </label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="status" id="blog_inactive" value="Private">
										<label class="form-check-label" for="poste_Private"> Private </label>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
										<label>Blog Description</label>
                                        <textarea name="body" rows="5" cols="40" class="form-control tinymce-editor"></textarea>
									</div>
								</div>
								
							</div>
                            
                            <button class="btn btn-primary btn-block" type="submit">Create</button>
						</form>
					</div>
				</div>
			</div>
          
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>  
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height:400,
            width:850,
            menubar: false,
            plugins: "textcolor",
        
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help | forecolor backcolor',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
	 <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editoor',
            height:200,
            menubar: false,
            plugins: "textcolor",
        
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help | forecolor backcolor',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>