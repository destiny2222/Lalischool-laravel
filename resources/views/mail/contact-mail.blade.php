@component('mail::message')
# Inquiry From {{$data['name']}}
{{$data['message']}}
{{$data['subject']}}
Call : {{$data['phone']}}
{{ config('app.name') }}
@endcomponent