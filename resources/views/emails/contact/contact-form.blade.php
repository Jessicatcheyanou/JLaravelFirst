@component('mail::message')
# Thank You for Your message

<strong>Name:</strong>{{ $data['name']}}
<strong>Email:</strong>{{ $data['email']}}
<strong>Telephone:</strong>{{ $data['tel']}}

<strong>The body of your message.</strong>
</br>
{{ $data['message']}}



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
