@extends('layouts.app')

@section('content')
    <h1>Welcome to My App</h1>
    <a href="{{route('commands.create')}}" class="btn btn-primary"> <i class="fa fas-upload"></i> Create Command</a>

    <table id="myTable" class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>john@example.com</td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td>jane@example.com</td>
            </tr>
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
