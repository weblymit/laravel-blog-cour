@extends('layout.layout')
@section('title', 'Accueil')
@section('content')
<div class="bg-gray-200">
    @include('partials.homepage._header')
    <div class="mx-6 pb-10">
        <div class="">
            <x-card.card title="TITLE HEADING" url_img="girl_hat.jpeg">
                <div class="py-6">
                    <img src="img/avatar_smoke.jpeg" alt="">
                    <div class="py-4">
                        <p class="font-semibold pb-2">Georges <span class="text-gray-500">May 3, 2015, 6:32 PM</span>
                        </p>
                        <p>Great blog post! Following</p>
                    </div>
                </div>
            </x-card.card>
            <x-card.card title="TITLE HEADING" url_img="man_hat.jpeg" />
            <x-card.card title="TITLE HEADING" url_img="runway.jpeg" />
        </div>
        <!--My name -->
        <div class="">
            @include('partials.homepage._card-myname')
        </div>
        <!-- Popular post -->
        @include("partials.homepage._popular-post")
        <!-- Advertise -->
        @include("partials.homepage._advertise")
        <!-- Tags -->
        @include("partials.homepage._tags")
        <!-- Tags -->
        @include("partials.homepage._inspiration")
        <!-- Fallow -->
        @include("partials.homepage._follow")
        <!-- Subscribe -->
        @include("partials.homepage._subscribe")
    </div>
</div>
@endsection
