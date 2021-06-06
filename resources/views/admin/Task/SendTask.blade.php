@extends('layouts.main-layout')
@section('content')
<send-task :user_id ="{{$user->id}}" ></send-task>
@endsection

