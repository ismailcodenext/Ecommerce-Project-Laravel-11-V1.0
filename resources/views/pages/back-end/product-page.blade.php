@extends('layout.sidenav-layout')
@section('title', 'Product Page')
@section('content')
@include('components.back-end.product.product-list')
@include('components.back-end.product.product-create')
@include('components.back-end.product.product-update')
@include('components.back-end.product.product-delete')
@endsection
