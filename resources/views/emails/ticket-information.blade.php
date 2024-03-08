@component('mail::message')
# Ticket Information

Here is your ticket information:

**Event Name:** {{ $ticket->name }}
**Date:** {{ $ticket->date }}
**Seat:** {{ $ticket->place }}
**Location:** {{ $ticket->location }}

Thanks,<br>
TOMORROW EVENT
@endcomponent
