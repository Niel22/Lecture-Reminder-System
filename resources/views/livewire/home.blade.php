<div class="row">
    <div class="col-md-6 col-xxl-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avtar avtar-s bg-light-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 2V5" stroke="#2ca87f" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16 2V5" stroke="#2ca87f" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4" d="M3.5 9.08984H20.5" stroke="#2ca87f" stroke-width="1.5"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
                                    stroke="#2ca87f" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4" d="M15.6947 13.7002H15.7037" stroke="#2ca87f"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4" d="M15.6947 16.7002H15.7037" stroke="#2ca87f"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4" d="M11.9955 13.7002H12.0045" stroke="#2ca87f"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4" d="M11.9955 16.7002H12.0045" stroke="#2ca87f"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4" d="M8.29431 13.7002H8.30329" stroke="#2ca87f"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4" d="M8.29395 16.7002H8.30293" stroke="#2ca87f"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-0">Total Lectures Scheduled</h6>
                    </div>
                </div>
                <div class="bg-body p-3 mt-3 rounded">
                    <div class="mt-3 row align-items-center">
                        <div class="col-5">
                            <h5 class="mb-1">{{ $allReminders }}</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avtar avtar-s bg-light-success">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 2V5" stroke="#2ca87f" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16 2V5" stroke="#2ca87f" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4" d="M3.5 9.08984H20.5" stroke="#2ca87f" stroke-width="1.5"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
                                    stroke="#2ca87f" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4" d="M15.6947 13.7002H15.7037" stroke="#2ca87f"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4" d="M15.6947 16.7002H15.7037" stroke="#2ca87f"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4" d="M11.9955 13.7002H12.0045" stroke="#2ca87f"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4" d="M11.9955 16.7002H12.0045" stroke="#2ca87f"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4" d="M8.29431 13.7002H8.30329" stroke="#2ca87f"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4" d="M8.29395 16.7002H8.30293" stroke="#2ca87f"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-0">Today's Lectures</h6>
                    </div>
                </div>
                <div class="bg-body p-3 mt-3 rounded">
                    <div class="mt-3 row align-items-center">
                        <div class="col-5">
                            <h5 class="mb-1">{{ $upComingReminders }}</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>