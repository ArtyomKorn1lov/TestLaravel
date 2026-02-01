@extends('layouts.main', ['assets' => ['resources/css/pages/contacts.css']])

@section('title', 'Contact Us')

@section('header_wrapper_class', 'header_contacts')
@section('header_container_class', 'header__container_contacts')

@section('header_secondary_banner')
    <x-general::banner type="contacts" />
@endsection

@section('page_wrapper_class', 'page_contacts')

@section('content')
    <div class="contacts">
        <x-contacts::contacts-info />
        <x-contacts::send-us-feedback />
    </div>
    <x-contacts::contacts-map />
@endsection
