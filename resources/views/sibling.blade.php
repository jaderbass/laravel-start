@extends('master')

@section('sidebar')
    @parent
    <h3>Sidebar aus dem Sibling</h3>
@endsection

@section('content')
    <h3>der Inhalt aus dem Sibling</h3>
@endsection