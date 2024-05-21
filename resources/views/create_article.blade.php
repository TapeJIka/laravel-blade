@extends('layout')
@section('content')
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
    <form method="post" action="{{url('article-create')}}" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 10px; padding: 10px; border: 3px solid darkorange; width: 200px; border-radius: 20px">
        @csrf
        <input type="text" name="title" id="title">
        <input type="text" name="text" id="text">
        <button type="submit">Submit</button>
    </form>
@endsection
