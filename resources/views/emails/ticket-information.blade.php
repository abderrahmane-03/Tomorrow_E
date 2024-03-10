@component('mail::message')
# Ticket Information
Thanks for reserving **{{ $ticket->name }}** Event For
**{{ $ticket->Date }}** Please be there before the event start atleast 30 minutes your seat is NUMBER : {{ $ticket->place }}
LOCATION: {{ $ticket->location }}

Thank you,<br>
TOMORROW EVENT FOR YOU!
@endcomponent
