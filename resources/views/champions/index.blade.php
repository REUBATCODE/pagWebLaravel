@extends('layouts.site')

@section('title', 'Champions')

@section('content')

<h1>View Champion</h1>
<table class="table table-bordered table-dark">
    <thead>
        <th>Champion</th>
        <th>Main Role</th>
        <th>Secondary Role</th>
        <th>View</th>
    </thead>
    <tbody>
        @foreach($champions as $c)
            <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->main_type}}</td>
                <td>{{$c->secondary_type}}</td>
                <td>
                    <a href="{{ route('champions.view', ['id' => $c->id]) }}" class="btn btn-primary">View</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
