@extends('layouts.main', [
    'title' => 'Home',
    'current_menu_item' => 'home'
])

@section('content')

    <h1>Welcome to S.A.D Cinema!</h1>

    <form class="form-group" action="{{route('search')}}" method="get">

        @csrf

        @component('components/form-group',[
        'label' => 'Find your movie by name:',
        'name' =>'search'
        ])
        <input type="text" name="search" value="">
        @endcomponent

        <label for="type">Choose a type:</label><br>
        <select name="type_id[]" multiple>

            @foreach($types as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach

        </select><br>

        <input type="submit" value="search">
    </form>

@endsection