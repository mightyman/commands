@extends('layouts.app')

@section('content')
<br>
<div class="row">
    <div class="col-md-6">
        <h3>COMMANDS</h3>
    </div>
    <div class="col-md-6 text-right">
        <a href="{{route('commands.create')}}" class="btn btn-primary mt2"> <i class="fa fas-upload"></i> Create Command</a>
    </div>
</div>
<hr>

<div class="spacer"></div>
@component('components.alert')
@endcomponent
<div class="row">
    <div class="col-md-12">
        <table id="commands_table" class="table table-striped">
            <thead>
                <tr>
                    <th>Command</th>
                    <th>Description</th>
                    <th>OS</th>
                    <th>Platform</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commands as $command)
                <tr>                
                    <th>
                        {{$command->command}}
                    </th>               
                    <td>
                        <small>{{$command->description}}</small>
                    </td>     
                    <td>
                        {{$command->operatingSystem->name}}
                    </td>
                    <td>
                        {{$command->platform->name}}
                    </td>  
                    <td>
                        <div>
                            <a href="{{route('commands.edit',[$command->id])}}" class="btn btn-sm btn-success">EDIT</a>
                            <button class="btn-confirm btn btn-sm btn-danger">DEL</button>
                            <form action="{{route('commands.destroy',[$command->id])}}" method="POST">
                                @csrf  
                                <input type="hidden" name="_method" value="DELETE">                              
                            </form>
                        </div>
                    </td>              
                </tr>    
                @endforeach        
            </tbody>
        </table>
    </div>
</div>
    
    

   

    <script>
        $(document).ready(function() {
            $('#commands_table').DataTable();
        });
    </script>
@endsection
