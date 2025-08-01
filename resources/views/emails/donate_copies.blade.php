
<x-mail::message>
# Hello Ms/Mr {{ $data->firstname }}
Thank you for your purchase of our Presale

First Name:
{{ $data->firstname }}

Number Of Copies:
{{ $data->no_of_copies }}

Amount:
{{ $data->amount }}

Email Address:
{{ $data->email }}

Organisation Name
{{ $data->org_name }}

Where you are:
{{ $data->country }}

Payment Reference:
{{ $data->reference }}

<x-mail::button :url="'mailto:contact@myfamilycompanion.com'">
Contact Our Support
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
