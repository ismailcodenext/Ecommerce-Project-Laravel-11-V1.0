@extends('layout.sidenav-layout')
@section('title','Product Category Page')
@section('content')
    @include('components.back-end.product-category.category-list')
    @include('components.back-end.product-category.category-create')
     @include('components.back-end.product-category.category-update')
     @include('components.back-end.product-category.category-delete')
@endsection

