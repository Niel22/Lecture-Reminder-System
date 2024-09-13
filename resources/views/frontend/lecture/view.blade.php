@extends('layouts.app')
@section('pageTitle', 'Lecture Reminder Details')
@section('content')
<livewire:lecture.view :id="$id" />
@endsection
