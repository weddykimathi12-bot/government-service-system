
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Request | Government Service Request</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f4;
            margin: 0;
            padding: 40px 15px;
        }

        .container {
            max-width: 600px;
            margin: 30px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 12px #0001;
        }

        h1 {
            text-align: center;
            color: #168044;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            box-sizing: border-box;
            padding: 12px;
            margin-top: 8px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: #168044;
            color: white;
            border: none;
            cursor: pointer;
        }

        .error { color: #b91c1c; }

        .result {
            margin-top: 25px;
            padding: 18px;
            background: #eef8f0;
            border-radius: 8px;
        }

        a { color: #168044; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Track Your Request</h1>
        <p>Enter the tracking number you received after submitting your service request.</p>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('track.search') }}">
            @csrf

            <label for="tracking_number">Tracking Number</label>
            <input
                type="number"
                id="tracking_number"
                name="tracking_number"
                min="1"
                value="{{ old('tracking_number') }}"
                required
            >

            <button type="submit">Check Request Status</button>
        </form>

        @isset($serviceRequest)
            @if ($serviceRequest)
                <div class="result">
                    <h2>Request Details</h2>
                    <p><strong>Tracking Number:</strong> {{ $serviceRequest->id }}</p>
                    <p><strong>Service:</strong> {{ $serviceRequest->service }}</p>
                    <p><strong>Location:</strong> {{ $serviceRequest->location }}</p>
                    <p><strong>Description:</strong> {{ $serviceRequest->description }}</p>
                    <p><strong>Status:</strong> {{ $serviceRequest->status }}</p>
                    <p><strong>Date Submitted:</strong> {{ $serviceRequest->created_at }}</p>
                </div>
            @else
                <p class="error">No request was found with that tracking number.</p>
            @endif
        @endisset

        <p><a href="{{ route('home') }}">Back to Home</a></p>
    </div>
</body>
</html>
