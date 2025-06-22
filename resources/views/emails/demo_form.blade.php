<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Demo Request Submitted</title>
</head>
<body>
    <h2>New Demo Request Submitted</h2>
    <p><strong>First Name:</strong> {{ $demo->first_name }}</p>
    <p><strong>Last Name:</strong> {{ $demo->last_name }}</p>
    <p><strong>Email:</strong> {{ $demo->email }}</p>
    <p><strong>Mobile:</strong> {{ $demo->mobile }}</p>
    <p><strong>Organization Name:</strong> {{ $demo->org_name }}</p>
    <p><strong>Product:</strong> {{ $demo->product->title ?? 'N/A' }}</p>
</body>
</html>
