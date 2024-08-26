@extends('frontend.main_master')
@section('main')


{{-- Home --}}
@include('frontend.body.home_all.home_setup')
{{-- Home End --}}


{{-- About --}}
@include('frontend.body.about_all.about_setup')
{{-- About end --}}

{{-- Skill --}}
@include('frontend.body.skill_all.skill_setup')
{{-- Skill end --}}

{{-- Resume --}}
@include('frontend.body.resume_all.resume_setup')
 {{-- Resume End --}}

<!-- WORK -->
@include('frontend.body.work_all.work_setup')
<!-- //WORK -->

{{-- Languages --}}
@include('frontend.body.language_all.language_setup')
{{-- Skill end --}}


<!-- CONTACT -->
{{-- @include('frontend.body.contact_all.contact_setup') --}}
<!-- //CONTACT -->


@endsection
