@extends('master')

@section('sidebar')
    @parent
    <h3>Sidebar aus dem Child</h3>
@endsection

@section('content')
    <h3>der Inhalt aus dem Child</h3>
@endsection