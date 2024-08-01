@extends('layout.sidenav-layout')
@section('title','Brand Page')
@section('content')
    @include('components.back-end.brand.brand-list')
    @include('components.back-end.brand.brand-create')
    @include('components.back-end.brand.brand-update')
    @include('components.back-end.brand.brand-delete')
@endsection

