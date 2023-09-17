@extends('emails.mail')

@section('content')
   <tr>
        <td align="left" colspan="2">
            <p style="margin:5px 15px 0 15px;line-height:24px;font-size:15px;color:#585858!important;letter-spacing:.5px">
                Hello <strong> {{ $user->name }}</strong>,
            </p>
            <p style="margin:5px 15px 0 15px;line-height:24px;font-size:15px;color:#585858!important;letter-spacing:.5px">
                I hope this message finds you well and full of enthusiasm as you embark on another day. As the sun rises, it brings with it a fresh start, new opportunities, and the promise of a brand-new day filled with possibilities. <br><br>

                Every morning is a chance to reset, to embrace the day with a positive attitude, and to work towards your goals. Remember that your journey is unique, and each day's experiences contribute to your growth and development. <br><br>

                Take a moment to appreciate the simple joys of life – the warmth of sunlight, the aroma of your morning coffee, or the sound of birds chirping outside your window. These small pleasures can set a cheerful tone for the hours ahead.<br><br>

                Wishing you a productive, joyful, and fulfilling day ahead!
            </p>
            <p style="margin:5px 15px 0 15px;line-height:24px;font-size:15px;color:#585858!important;letter-spacing:.5px">
                Regards,<br>
                {{ env('APP_NAME') }}
            </p>
        </td>
   </tr>
@endsection