<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .wrapper {
            width: 100%;
            padding: 40px;
            background-color: whitesmoke;
        }

        .card {
            background-color: white;
            width: 50%;
            border-radius: 8px;
            padding: 10px 20px 20px 20px;
            margin: 0 auto;
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);
        }

        .card-header {
            padding: 10px;
            border-bottom: 1px solid whitesmoke;
        }

        .card-body {
            padding: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th {
            font-size: 1rem;
            text-align: left;
            padding: 10px;
            border: 1px solid whitesmoke;
        }

        table td {
            font-size: 1rem;
            text-align: left;
            padding: 10px;
            border: 1px solid whitesmoke;
        }

        .image-header {
            text-align: center;
        }

        .title {
            font-size: 1.125rem;
            font-weight: 600;
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="card">
            <div class="card-header">
                <div class="image-header">
                    <img src="{{ url('/') }}/assets/images/sticky-logo.png" alt="prime_finance" />
                    {{-- <img src="http://3.7.41.47/theprimefinance/public/assets/images/sticky-logo.png"
                        alt="prime_finance" /> --}}
                </div>
            </div>

            <div class="card-body">
                <div class="title">Someone tried to contact you from the website</div>

                <table>
                    <tr>
                        <th style="width: 40px;">Name</th>
                        <td>{{ $details['name'] }}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>{{ $details['email'] }}</td>
                    </tr>

                    <tr>
                        <th>Phone</th>
                        <td>{{ $details['phone'] }}</td>
                    </tr>

                    <tr>
                        <th>Message</th>
                        <td>{{ $details['message'] }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
