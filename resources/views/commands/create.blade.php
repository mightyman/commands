@extends('layouts.app')

@section('content')
<br>
<div class="row">
    <div class="col-md-6">
        <h3 class="text-uppercase">CREATE COMMAND</h3>
    </div>
    <div class="col-md-6 text-right">
        <a href="{{route('commands.index')}}" class="btn btn-primary mt2"> <i class="fa fas-upload"></i> Home</a>
    </div>
</div>
<hr>
@component('components.alert')
@endcomponent
<form action="{{route('commands.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="command">Command</label>
        <input type="text" name="command" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="plaform_id">Plaform</label>
        <select name="platform_id" class="form-control">
            <option value="" selected disabled>Choose Platform</option>
            @foreach ($platforms as $platform)
                <option value="{{$platform->id}}">{{$platform->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="operating_system_id">Operating System</label>
        <select name="operating_system_id" class="form-control">
            <option value="" selected disabled>Choose Platform</option>
            @foreach ($operating_systems as $os)
                <option value="{{$os->id}}">{{$os->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection