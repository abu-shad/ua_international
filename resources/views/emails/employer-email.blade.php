<!DOCTYPE html>
<html>
<head>
    <title>New Contact Submission</title>
</head>
<body>
    {{-- @dd($employer['message']); --}}
    {{-- {{ $employer }} --}}
    <h1>Contact Form Submission</h1>
    <p><strong>Name:</strong> {{ $employer['name'] }}</p>
    <p><strong>Company:</strong> {{ $employer['company'] }}</p>
    <p><strong>Email:</strong> {{ $employer['email'] }}</p>
    <p><strong>Phone:</strong> {{ $employer['phone'] }}</p>
    <p><strong>Message:</strong> {{ $employer['message'] }}</p>
</body>
</html>