@extends('layouts.main', [
    'title' => 'Movies',
    'current_menu_item' => 'movies'
])

@section('content')

<table class="table table-orders">
        <tr>
            <th>Movie</th>
            <th>Rating</th>
            <th>Type</th>
        </tr>
        @foreach($results as $result)
            <tr>
                <td>{{ $result->name }}</td>
                <td>{{ $result->rating }}</td>
                <td>{{ $result->types->name }}</td>
            </tr>
        @endforeach
</table>

{{ $results->appends(Request::except('token'))->links() }}
@endsection