@component('mail::message')
# Introduction

activite {{$activite['Descrption']}} create at {{$activite['Date']}} enter here to show details

@component('mail::button', ['url' => $url])
cliquez ici
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
