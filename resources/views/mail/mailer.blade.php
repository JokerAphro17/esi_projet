@component('mail::message')
@component('mail::panel')
@if($secretary ?? false)
COMPTE SECRETAIRE CREER
@else
CARTE ETUDIANT DISPONIBE
@endif
@endcomponent
@if($secretary ?? false)
@include('mails.mailsec')
@else
@include('mails.carte')
@endif
Merci <br>
Bonne journée
L'equipe ESI
@endcomponent