@extends('layouts.app')

@section('title', 'Soul - الصفحة الرئيسية')

@section('content')
	<div class="bg-secondery color-white" id="scroll" style="display: inline;"><i class="fa fa-angle-up"></i></div>

    @include('partials.header')
    @include('partials.slider')
    @include('partials.about')
    @include('partials.video')
    @include('partials.core')
    @include('partials.causes')
    @include('partials.gallery')
    @include('partials.help')
    @include('partials.team')
    @include('partials.offer')
    @include('partials.partners')
    
    @include('partials.footer')

@endsection
