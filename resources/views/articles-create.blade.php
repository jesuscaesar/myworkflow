@extends('layout')

@section('content')

<h1>Create Article</h1>

<form action="{{ route('post') }}" method="POST">
<p align='center'>
<input type='text' name='slug' style="width:50%;" placeholder="Post symbolic name..." value="">
</p>
<p align='center'>
<input type='text' name='title' style="width:50%;" placeholder="Add title here..." value="">
</p>
<p align='center'>
<input type='text' name='description' style="width:50%;" placeholder="Add description here..." value="">
</p>
<p align='center'>
<textarea name='content' style="width:50%;height:20%;" placeholder="What's on your mind?" rows=4></textarea>
</p>
<p align='center'>
<input type='checkbox' name='published'> Published Article</input>
</p>
<p align='center'>
<input type='submit' name='submit' style="width:50%;" value="Post Article">
</p>
</form>
</p>

@endsection