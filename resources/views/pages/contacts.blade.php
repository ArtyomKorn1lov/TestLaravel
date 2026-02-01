@extends('layouts.main', ['assets' => ['resources/css/pages/contacts.css']])

@section('title', 'Contact Us')

@section('header_wrapper_class', 'header_contacts')
@section('header_container_class', 'header__container_contacts')

@section('header_secondary_banner')
    <x-general::banner type="contacts" />
@endsection

@section('page_wrapper_class', 'page_contacts')

@php
/*use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

$path = base_path('test-file.txt');
echo '<pre>';
var_export($path);
echo '</pre>';

echo '<pre>';$result = Storage::disk('public')->put('/', new File($path));
var_export($result);
echo '</pre>';*/
@endphp

@section('content')
    <div class="contacts">
        <x-contacts::contacts-info />
        <x-contacts::send-us-feedback />
    </div>
    <x-contacts::contacts-map />
@endsection
