<x-mail::message>
# You have a new inquiry!

<x-mail::panel>
### Message
{{ $data['message'] }}
</x-mail::panel>

## Sender Details

<x-mail::table>
| Detail       | Information         |
| :----------- | :------------------ |
| **Name**     | {{ $data['name'] }} |
| **Email**    | [{{ $data['email'] }}](mailto:{{ $data['email'] }}) |
| **Phone**    | {{ $data['phone'] }} |
</x-mail::table>

<x-mail::button :url="'mailto:' . $data['email']">
Reply to {{ $data['name'] }}
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
