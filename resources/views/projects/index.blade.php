@extends('layouts.master')

@section('content')
    <h1>Project List</h1>
    <project-list :initial_projects='@json($projects)'></project-list>
@endsection