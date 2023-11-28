@extends('layouts.site')
@section('title', 'Champions')
@section('content')
<h1>View Champion</h1>

<table class="table table-bordered table-dark">
    <thead>
        <th>Champion</th>
        <th>Main Role</th>
        <th>Secondary Role</th>
    </thead>
    <tbody>
    {{$champion}}
        @if(isset($champion))
    <tr class="champion-row" data-url="{{ isset($champion) ? route('champions.view', ['id' => $champion->id]) : '#' }}">
        <td>{{$champion->name}}</td>
        <td>{{$champion->main_type}}</td>
        <td>{{$champion->secondary_type}}</td>
    </tr>
@endif

    </tbody>
</table>

@endsection
