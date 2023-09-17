<!DOCTYPE html>
<html>
<body class="">
    <table width="100%" align="center" cellspacing="0" cellpadding="0"
        style="max-width:600px;border:1px solid #dbdbdb;background:#fff">
        <tbody>
            <tr>
                <td colspan="2" style="padding:10px;background:#fff;text-align:center;">
                    <a href="{{url('/')}}">{{ env('APP_NAME') }}</a>
                </td>
            </tr>

            @yield('content')

            <tr>
                <td align="center" colspan="2" style="padding:10px;color:#9f9f9f;border-top:1px solid #ccc;">
                    <p>Have Questions?<br> Working days from Mon to Fri between 10:00 AM to 06:00 PM &amp; Sat 10:00 AM to 02:00 PM<br>Or email us at <a
                            href="mailto:{{env('MAIL_FROM_ADDRESS')}}" style="color:#45c0dc"
                            target="_blank">{{env('MAIL_FROM_ADDRESS')}}</a></p>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>