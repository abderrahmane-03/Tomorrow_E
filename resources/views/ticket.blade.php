<x-app-layout>
    @if (!function_exists('encodeTicketDetails'))
        @php
        // Define the function encodeTicketDetails if it doesn't already exist
        function encodeTicketDetails($ticket) {
            // Encode ticket details into an associative array
            $ticketData = [
                'name' => $ticket->name,
                'date' => $ticket->Date,
                'place' => $ticket->place,
                'location' => $ticket->location,
                // Add more ticket details as needed
            ];

            // Encode the ticket data into JSON and return
            return json_encode($ticketData);
        }
        @endphp
    @endif

    <div class="flex flex-wrap gap-6 font-semibold font-sans">
        @foreach ($tickets as $ticket)
        <div class="ticket w-80 ml-10 bg-yellow-200 relative mt-10">

            <svg class="absolute top-[-145px] right-[1.4rem] m-[7rem] rotate-90" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 65 81.25" enable-background="new 0 0 65 65" xml:space="preserve">
                <path d="M17.333,0.667c-0.829,0-1.5,0.671-1.5,1.5v60.666c0,0.828,0.671,1.5,1.5,1.5c17.552,0,31.833-14.28,31.833-31.833S34.886,0.667,17.333,0.667z" fill="#ffffff" />
            </svg>
            <svg class="absolute top-[7px] right-[19.4rem] m-[-2rem] rotate-45" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 65 81.25" enable-background="new 0 0 65 65" xml:space="preserve">
                <path d="M17.333,0.667c-0.829,0-1.5,0.671-1.5,1.5v60.666c0,0.828,0.671,1.5,1.5,1.5c17.552,0,31.833-14.28,31.833-31.833S34.886,0.667,17.333,0.667z" fill="#ffffff" />
            </svg>
            <svg class="absolute top-[-311px] right-[-17.6rem] m-[16rem]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 65 81.25" enable-background="new 0 0 65 65" xml:space="preserve" transform="rotate(135)">
                <path d="M17.333,0.667c-0.829,0-1.5,0.671-1.5,1.5v60.666c0,0.828,0.671,1.5,1.5,1.5c17.552,0,31.833-14.28,31.833-31.833S34.886,0.667,17.333,0.667z" fill="#ffffff" />
            </svg>

            <div class="title py-10 px-10">
                <p class="text-gray-600 text-2xl">Tomorrow Events Presents</p>
                <p class="text-4xl">{{$ticket->name}}</p>
            </div>
            <div class="poster">
                <img src="/{{$ticket->picture}}" class="max-w-full h-auto" />
            </div>
            <div class="info px-10 ">
                <table class="w-full text-lg">
                    <tr>
                        <th class="w-2/5">DATE</th>
                        <th class="w-1/5">SEAT</th>
                    </tr>
                    <tr>
                        <td class="px-8">{{$ticket->Date}}</td>
                        <td>{{$ticket->place}}</td>
                    </tr>
                </table>
                <table class="w-full text-lg">
                    <tr>
                        <th class="w-3/8">LOCATION</th>
                    </tr>
                    <tr>
                        <td>{{$ticket->location}}</td>
                    </tr>
                </table>
            </div>

            <div class="serial px-25 py-25 relative">
                <svg class="absolute top-[-302px] left-[-17.6rem] m-[16.4rem]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 65 81.25" enable-background="new 0 0 65 65" xml:space="preserve">
                    <path d="M17.333,0.667c-0.829,0-1.5,0.671-1.5,1.5v60.666c0,0.828,0.671,1.5,1.5,1.5c17.552,0,31.833-14.28,31.833-31.833S34.886,0.667,17.333,0.667z" fill="#ffffff" />
                </svg>
                <svg class="absolute top-[-324px] right-[-17.6rem] m-[16.4rem] rotate-180" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 65 81.25" enable-background="new 0 0 65 65" xml:space="preserve">
                    <path d="M17.333,0.667c-0.829,0-1.5,0.671-1.5,1.5v60.666c0,0.828,0.671,1.5,1.5,1.5c17.552,0,31.833-14.28,31.833-31.833S34.886,0.667,17.333,0.667z" fill="#ffffff" />
                </svg>

                <p class="text-lg font-bold hidden">QR Code: {{ $ticket->barCode }}</p>

                <hr class="border-dashed border-t border-gray-400 mx-25 my-12">
                <!-- Display the QR code -->
                <!-- Display the QR code -->
                <img class="mx-auto" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ urlencode(encodeTicketDetails($ticket)) }}" alt="QR Code"><table class="ml-28 numbers">
                    <tr>
                        <!-- Display the numeric value -->
                        <td class="text-center">{{$ticket->barCode }}</td>
                    </tr>
                </table>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>



