
<x-mail::message>
# Dear {{ $data->name }}
Welcome to My Family Companion


Every week women from all over the world, join Dr. OVO on a weekly Family Health Q&A 

We are glad to welcome you.

Join the communities using the links below for more details.

PIN the Channels so you don't miss anything!

<x-mail::button :url="'https://www.whatsapp.com/channel/0029VbB0G3AEKyZDnb8juE46'">
WhatsApp Channel
</x-mail::button>

<p style="text-align: center;margin:unset"> & </p>

<x-mail::button :url="'https://t.me/myfamilycompanion'">
Telegram Channel
</x-mail::button>

Thanks,<br>

Eva <br>
Program, Manager <br>
{{ config('app.url') }}
</x-mail::message>  
