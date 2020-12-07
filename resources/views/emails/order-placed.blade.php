@component('mail::message')
# Order Summary

The body of your message.

@component('mail::button', ['url' => ''])
Visit Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
