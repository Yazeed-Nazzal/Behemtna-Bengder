@extends('layouts.main-layout')
@section('content')
  <show-tasks :user_id="{{auth()->user()->id}}"></show-tasks>
@endsection

