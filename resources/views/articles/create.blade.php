@extends('layouts.app')

@section('content')
    <create-article :user_id="{{ $user_id }}"></create-article>
@endsection