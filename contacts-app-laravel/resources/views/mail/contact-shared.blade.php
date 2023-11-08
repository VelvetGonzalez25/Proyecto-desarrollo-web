@component('mail::message')
# Se compartió un nuevo contacto contigo

User {{ $fromUser }} contacto compartido {{ $sharedContact }} contigo.

@component('mail::button', ['url' => route('contact-shares.index')])
Mira aquí
@endcomponent

gracias,<br>
{{ config('app.name') }}
@endcomponent
