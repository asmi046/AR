@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <img style="margin: 100px" src="data:image/png;base64, {!! base64_encode(QrCode::size(300)->format('png')->merge('/public/key/hiro_r2.png', .4, false)->errorCorrection('H')->generate(route('ar', $element->id))) !!} ">
@endsection

