@extends('layouts.app')
@section('pageTitle', 'Edit Reminders')
@section('content')
<livewire:lecture.edit :id="$id" />
@endsection
