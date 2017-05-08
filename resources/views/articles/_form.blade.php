<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null,['class'=>'form-control']) !!}
</div>

<!--Tags Form Input -->
<div class="form-group">
    {!! Form::label('tags', 'Tags:') !!}
    {!! Form::select('tags[]', $tags  , $article->tags->lists('id') ,['class'=>'form-control','multiple'=>'multiple']) !!}
</div>
<!--Add Article Form Input -->
<div class="form-group">
    {!! Form::submit($submitButton, ['class'=>'btn btn-primary form-control']) !!}
</div>
