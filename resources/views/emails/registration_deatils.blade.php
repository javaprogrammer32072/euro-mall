<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
        <div style="margin:50px auto;width:70%;padding:20px 0">
            <div style="border-bottom:1px solid #eee">
                <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Your
                    Euro Malls</a>
            </div>
            <p style="font-size:1.1em">Hi,{{ $first_name }} {{ $last_name }}</p>
            <p>Thank you for Interst Your Euro Malls. Please find follow Details </p>
            <h2
                style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">
                User ID = {{ $userId }}</h2>
            <p style="font-size:0.9em;">Regards,<br />Your Euro Malls</p>
            <hr style="border:none;border-top:1px solid #eee" />
        </div>
    </div>
</body>

</html>
