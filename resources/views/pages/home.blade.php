@extends('layouts.main', ['assets' => ['resources/css/pages/home.css']])

@section('title', 'New Automation Tool for Your')

@section('header_primary_banner')
    <x-banner />
@endsection

@section('content')
    <x-home-news />
    <x-home-projects />
@endsection
