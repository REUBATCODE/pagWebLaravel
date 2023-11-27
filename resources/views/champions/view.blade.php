@extends('layouts.site')
@section('title', 'Champions')
@section('tabla')
<h1>View Champion</h1>

<table class="table table-bordered table-dark">
    <thead>
        <th>Champion</th>
        <th>Main Role</th>
        <th>Secondary Role</th>
    </thead>
    <tbody>
        @foreach($champion as $c)
            <tr class="champion-row" data-url="{{ isset($c) ? route('champions.view', ['id' => $c->id]) : '#' }}">
                <td>{{$c->name}}</td>
                <td>{{$c->main_type}}</td>
                <td>{{$c->secondary_type}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
