@extends('layouts.master')

@section('caption')
    Oh la!
@endsection
@section('title')
    {{$mistake}}
@endsection
@section('subtitle')
    We will make sure everything is correct now, start again: <a href="/">here</a> :)
    <!--2017-->
    <!--The winner is to be announced at the P-Certificate ceremony-->
@endsection

@include('func.f_overview')