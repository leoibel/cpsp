@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Categories</h1> 
@stop

@section('content')
<div id="form" class="col-sm-7">
    <form method="POST">
        @csrf
        <div class="form-row">
            <div class="col-auto">
                <input type="text" name="name" placeholder="Add new category" class="form-control">
            </div>
            <div class="col-auto">
                <input type="submit" name="submit" class="btn btn-success" value="Add new">
            </div>
          
        </div>
        
        
    </form>
</div>
<br>
<table class="table" id="myTable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $cat)
        <tr>
            <td>{{ $loop->index + 1}}</td>
            <td>{{ $cat->name }}</td>
            <td>
                <form method="POST" action="{{ route('categories.destroy', $cat->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>                   
                </form>
            </td>
        </tr>
        @empty
        no data
        @endforelse
    </tbody>

</table>
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
