@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Categories</h1> 
@stop

@section('content')
<div id="form">
    <form method="POST">
        <input type="text" name="name">
        <input type="submit" name="submit" class="btn btn-success" value="Add new">
    </form>
</div>
<div id="table">
<table class="table" id="myTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $cat)
        <tr>
            <td>{{ $loop->index }}</td>
            <td>{{ $cat->name }}</td>
        </tr>
        @empty
        no data
        @endforelse
    </tbody>

</table>    
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
$(function(){
    $('#myTable').DataTable();
});
    
</script>
@stop
