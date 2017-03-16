@extends('layouts.master')

@section('caption')
    {{$qualification->title}}
@endsection
@section('title')
    <!--Enter to make your choice!-->
@endsection
@section('subtitle')
    {{$qualification->description}}
    <!--2017-->
    <!--The winner is to be announced at the P-Certificate ceremony-->
@endsection

@include('func.f_qual')