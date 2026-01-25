@extends('layouts.main', ['assets' => ['resources/css/pages/home.css']])

@section('title', 'New Automation Tool for Your')

@section('header_primary_banner')
    <x-general::banner />
@endsection

@section('content')
    <x-news::news-list />
    <x-news::projects-list />
@endsection
