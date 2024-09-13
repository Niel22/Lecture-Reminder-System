@extends('layouts.app')
@section('pageTitle', 'Lecture Reminders')
@section('content')
<livewire:lecture.index />
@endsection
@push('script')
    <script>
        window.addEventListener('close-modal', event => {

            $('#deleteModal').modal('hide');
        });
    </script>
@endpush
