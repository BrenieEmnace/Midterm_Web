<div class="table-responsive">
    <table class="table" id="blogs-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Blog</th>
        <th>Author</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blogs)
            <tr>
                <td>{{ $blogs->title }}</td>
            <td>{{ $blogs->blog }}</td>
            <td>{{ $blogs->author }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['blogs.destroy', $blogs->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('blogs.show', [$blogs->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('blogs.edit', [$blogs->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
