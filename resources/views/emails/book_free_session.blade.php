
<x-mail::message>
# Hello Ms/Mr {{ $data->name }}
Thank you for subscribing to our weekly meet up, we hope to see you soon

<x-mail::button :url="'mailto:contact@myfamilycompanion.com'">
Contact Us
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
