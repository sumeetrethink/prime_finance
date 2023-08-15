<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
    <style>
        /* CSS styles go here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }

        h1 {
            color: #333333;
            text-align: center;
        }

        .details {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f5f5f5;
            border: 1px solid #dddddd;
            border-radius: 4px;
        }

        .details-label {
            color: #555555;
        }

        .details-value {
            color: #333333;
            font-weight: bold;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: #777777;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Contact Details</h1>
        <div class="details">
            <p><span class="details-label">Email:</span> <span class="details-value">{{$data["senderEmail"]}}</span></p>
            <p><span class="details-label">Phone:</span> <span class="details-value">{{$data["phone"]}}</span></p>
            <p><span class="details-label">Message:</span></p>
            <p>{{$data["message"]}}</p>
        </div>
        <div class="footer">
            <p>&copy; 2023 The Prima Finance. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
