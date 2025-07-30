
<x-mail::message>
# Hello Ms Tolulope
You have a new message from Matrix Recruitment LTD

First Name:
{{ $data->firstname }}

Last Name:
{{ $data->lastname }}

Email Address:
{{ $data->email }}

Business Name:
{{ $data->business_name }}

Type of Staff:
{{ $data->type_of_staff }}

Start Date:
{{ $data->start_date }}

Message:
{{ $data->message }}

<x-mail::button :url="'mailto:{{ $data->email }}'">
Respond Now
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
