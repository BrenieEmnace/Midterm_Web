<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $blogs->title }}</p>
</div>

<!-- Blog Field -->
<div class="col-sm-12">
    {!! Form::label('blog', 'Blog:') !!}
    <p>{{ $blogs->blog }}</p>
</div>

<!-- Author Field -->
<div class="col-sm-12">
    {!! Form::label('author', 'Author:') !!}
    <p>{{ $blogs->author }}</p>
</div>

