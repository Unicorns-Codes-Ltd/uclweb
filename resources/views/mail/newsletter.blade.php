<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        *{
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        html,body{
            background: #eeeeee;
            font-family: 'Jost', sans-serif;
        }
        img{
            max-width: 100%;
        }
        /* This is what it makes reponsive. Double check before you use it! */
        @media only screen and (max-width: 480px){
            table tr td{
                width: 100% !important;
                float: left;
            }
        }
    </style>
</head>

<body style="background: #eeeeee; padding: 10px;">
<center>
    <!-- ** Table begins here
    ----------------------------------->
    <!-- Set table width to fixed width for Outlook(Outlook does not support max-width) -->
    <table width="100%" cellpadding="0" cellspacing="0" bgcolor="FFFFFF" style="background: #ffffff; max-width: 600px !important; margin: 0 auto; background: #ffffff;">
        <tr>
            <td style="padding: 20px; background: #d8f3dc;">
                <div class="" style="display: flex;justify-content:center;align-items:center;">

                    <img src="{{asset('images/elogo.png')}}" alt="" sizes="" srcset="" width="auto" height="100px">
                </div>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px; text-align: center; background: #222d5d;">
                <h1 style="color: #ffffff"> Welcome!</h1>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px;">
                {{-- <p style="font-size:30px; margin: 5px;text-align:center">{{ $newsletter['title'] }}</p> --}}
                <p>
                    Dear Subscriber, <br/>
                    {!! $newsletter['text'] !!}
                </p>

            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="padding-top: 40px;padding-bottom: 24px;">
                <center>
                    <a href="{{route('home')}}" style="background: #222d5d; margin-top:20px; padding: 10px 20px; color: #fff; text-decoration: none;border-radius: 5px;">{{env('APP_NAME')}}</a>
                   </center>
            </td>
        </tr>

    </table>
    <p style="text-align: center; color: #666666; font-size: 12px; margin: 10px 0;">
        Copyright © 2023. All&nbsp;rights&nbsp;reserved.<br />
    </p>
</center>
</body>
</html>
