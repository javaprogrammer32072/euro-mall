<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="padding: 0px 0 0px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600"
                    style="border: 1px solid #cccccc; border-collapse: collapse; padding: 0; width: inherit; max-width: 768px; background: radial-gradient(54.96% 54.96% at 50% 45.04%, rgba(238, 238, 234, 0.0534414) 0%, #e1f4a8 100%);"
                    class="wrapper">
                    {{-- <tr>
                            <td align="center" style="padding: 0px 0 0px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                                <img src="{{ asset('/assets/front/images/logo3.png') }}" alt="My own wordwall" style="display: block; margin-top: 70px;" />
                            </td>
                        </tr> --}}
                    <tr>
                        <td style="padding: 84px 70px 0px 70px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td>
                                        <table style=" padding-bottom: 61px; padding-right: 33px; padding-left: 33px;">
                                            <tr>
                                                <td
                                                    style=" padding-top: 0px; padding-bottom: 50px; font-family: Arial, sans-serif;  font-style: normal;font-weight: 700; color: #2A2923; border-radius: 14px; line-height: 30px; font-size: 30px;">
                                                    <img src="{{ asset('/assets/front/images/icon.png') }}"
                                                        alt="icon"
                                                        style="vertical-align: bottom; margin-right: 15px; font-family: sans-serif;">Hi..
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="padding: 10px 0 0px 0; font-family: Arial, sans-serif;  font-style: normal;font-weight: 500;font-size: 15px;color: #554C5F;">
                                                    <span
                                                        style="font-family: Arial, sans-serif;  font-style: normal;font-weight: 500;font-size: 15px;color: #554C5F; font-weight: bold;">OTP&nbsp;&#58;
                                                        &nbsp;</span>{{ $body_msg['message'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
