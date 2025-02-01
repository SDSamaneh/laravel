<x-mail::message />
# verify Your Email

<x-mail::button :url="$url">
      verify Email
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>