<div class="modal fade " id="postsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            {!! Form::open(['action' => 'PostsController@store' , "method" => "POST", 'files' => 'true']) !!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create new Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">

                        <img id="post_image"class="img-fluid" src="http://placehold.it/250x150" alt="">
                        <div class="form-group">
                            {{ Form::label("picture", "Picture")}}
                            {!! Form::file("picture") !!}
                        </div>
                        <div class="form-group">
                            {{Form::label('Title', "Post Title")}}
                            {{Form::text('title', '',['class' => 'form-control'])}}
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            {{Form::label('description',"Post Description")}}
                            {{Form::textarea('description', '',
                            ['id' => 'article-ckeditor','class' => 'form-control', 'rows' => '3'])}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="mr-auto">
                    Created by: {!! Auth::user()->first_name," ", Auth::user()->last_name ,
                " on ", \Carbon\Carbon::now()->toDateString()
                !!}
                </div>
                <input type="submit" value="Submit" class="btn btn-primary">
                <input type="button" name="reset" value="Close" class="btn btn-primary">
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
