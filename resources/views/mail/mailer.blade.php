@component('mail::message')
@component('mail::panel')
@if($user ?? '')
COMPTE SECRETAIRE CREER
@else
CARTE ETUDIANT DISPONIBE
@endif
@endcomponent
@if($user ?? '')
@include('mails.mailsec')
@else
@include('mails.carte')
@endif
Merci <br>
Bonne journée
L'equipe ESI
@endcomponent