
<x-mail::message>
# Hello Ms/Mr {{ $data->firstname }}
Thank you for your purchase of our Presale

First Name:
{{ $data->firstname }}

Number Of Copies:
{{ $data->no_of_copies }}

Email Address:
{{ $data->email }}

Phone Number:
{{ $data->phone }}

Where you are in Nigeria:
{{ $data->city }}

<x-mail::button :url="'mailto:contact@myfamilycompanion.com'">
Contact Our Support
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
