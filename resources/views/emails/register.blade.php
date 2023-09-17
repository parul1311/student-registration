@extends('emails.mail')

@section('content')
   <tr>
        <td align="left" colspan="2">
            <p style="margin:5px 15px 0 15px;line-height:24px;font-size:15px;color:#585858!important;letter-spacing:.5px">
                Hello <strong> {{ $user->name }}</strong>,
            </p>
            <p style="margin:5px 15px 0 15px;line-height:24px;font-size:15px;color:#585858!important;letter-spacing:.5px">
                Thank you for signing up with {{ env('APP_NAME') }}! Admin
                will verify your details soon. We hope you enjoy your time with us.
            </p>
            <p></p>
            <p style="margin:5px 15px 0 15px;line-height:24px;font-size:15px;color:#585858!important;letter-spacing:.5px">
                If you have any questions or need assistance, our support team is here to help. Feel free to reach out to us at
            </p>
            <p style="margin:5px 15px 0 15px;line-height:24px;font-size:15px;color:#585858!important;letter-spacing:.5px">
                Regards,<br>
                {{ env('APP_NAME') }}
            </p>
        </td>
   </tr>
@endsection