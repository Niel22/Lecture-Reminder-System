<!DOCTYPE html>
<html>
<head>
    <title>Lecture Reminder</title>
</head>
<body>
    <h1>Reminder for {{ $course }}</h1>
    <p>You have a lecture today scheduled at {{ \Carbon\Carbon::parse($time)->format('h:i A') }} which is {{ \Carbon\Carbon::parse($time)->diffForHumans() }}.</p>
    <p>Course: {{ $course }}</p>
    <p>Venue: {{ $venue }}</p>
</body>
</html>
