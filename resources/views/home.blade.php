@extends('layouts.app')
@section('pageTitle', 'Home')
@section('content')
    <!-- [ Main Content ] start -->


            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-12">
                    <div class="card welcome-banner bg-blue-800">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="p-4">
                                        <h2 class="text-white">Welcome to the Lecture Reminder System</h2>
                                        <p class="text-white">
                                            Stay organized with our intuitive system designed to help you easily schedule lectures and receive timely reminders. Never miss a lecture again!
                                        </p>
                                        <a href="{{ route('lectures.create') }}" class="btn btn-outline-light">Schedule a Lecture Now</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <div class="img-welcome-banner">
                                        <img src="assets/images/widget/lecture-reminder.png" alt="img" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <livewire:home />

                <livewire:components.task />
            </div>
            <!-- [ Main Content ] end -->
    <!-- [ Main Content ] end -->
@endsection
