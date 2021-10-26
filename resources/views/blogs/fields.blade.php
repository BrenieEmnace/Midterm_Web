<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Blog Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('blog', 'Blog:') !!}
    {!! Form::textarea('blog', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('author', 'Author:') !!}
    {!! Form::textarea('author', null, ['class' => 'form-control']) !!}
</div>