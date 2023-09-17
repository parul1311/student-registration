@extends('emails.mail')

@section('content')
   <tr>
        <td align="left" colspan="2">
            <p style="margin:5px 15px 0 15px;line-height:24px;font-size:15px;color:#585858!important;letter-spacing:.5px">
                Hello <strong>Admin</strong>,
            </p>
            <p style="margin:5px 15px 0 15px;line-height:24px;font-size:15px;color:#585858!important;letter-spacing:.5px">
                New Student {{ $user->name }} is signing up with {{ env('APP_NAME') }}! You
                will need to verify their details soon. We hope you enjoy your time with us.
            </p>

            <p style="margin:5px 15px 0 15px;line-height:24px;font-size:15px;color:#585858!important;letter-spacing:.5px">
                Regards,<br>
                {{ env('APP_NAME') }}
            </p>
        </td>
   </tr>
@endsection