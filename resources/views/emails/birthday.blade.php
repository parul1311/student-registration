@extends('emails.mail')

@section('content')
   <tr>
        <td align="left" colspan="2">
            <p style="margin:5px 15px 0 15px;line-height:24px;font-size:15px;color:#585858!important;letter-spacing:.5px">
                Dear <strong> {{ $user->name }}</strong>,
            </p>
            <p style="margin:5px 15px 0 15px;line-height:24px;font-size:15px;color:#585858!important;letter-spacing:.5px">
                Today marks a special day—the anniversary of the day you graced the world with your presence. 🌟 On this joyous occasion, we want to take a moment to celebrate you! <br><br>

                May your day be filled with laughter, love, and countless wonderful moments. 🥳 As you blow out the candles, may each wish you make come true, and may the year ahead bring you success, health, and happiness. <br><br>

                Your positivity, kindness, and bright spirit inspire everyone around you. 🌈 Thank you for being such an incredible part of our lives. May this birthday be the beginning of an amazing chapter filled with adventure and fulfillment. <br><br>

                Here's to you, the incredible person you are, and to the adventures that lie ahead. 🎈 <br><br>

                Happy Birthday! 🎁🎈
            </p>
            <p style="margin:5px 15px 0 15px;line-height:24px;font-size:15px;color:#585858!important;letter-spacing:.5px">
                Regards,<br>
                {{ env('APP_NAME') }}
            </p>
        </td>
   </tr>
@endsection