<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ticket Konser</title>
    <link rel="stylesheet" href="{{ asset('assets/css/kwitansi.css') }}" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="{{ asset('assets/img/logo-kwitansi') }}.png">
      </div>
      <h1>TICKET KONSER</h1>
      <div id="project">
        <div><span class="mt-3">Artis Name</span> : {{ $ticket->konser->artist_name }}</div>
        <div><span class="mt-3">Date Time</span>: {{ date('d-M-Y H:i:s', strtotime($ticket->konser->date_time)) }}</div>
        <div><span class="mt-3">Venue</span>: {{ $ticket->konser->venue }}</div>
        <div><span class="mt-3">Ticket Number</span>: {{ $ticket->ticket_number }}</div>
        <div><span class="mt-3">Status Ticket</span>: {{ $ticket->status }}</div>
      </div>
    </header>
    <x-ticket-table>
        @include('content.table',[
        "rows" => ['#','Artis Name', 'Price','quantity','Status', 'total' ]
        ]);
        <tbody>
            <tr>
                <td class="service">{{ $ticket->ticket_number }}</td>
                <td class="desc">{{ $ticket->konser->artist_name }}</td>
                <td class="unit">{{ $ticket->konser->formatRupiah('price') }}</td>
                <td class="qty">{{ $ticket->quantity }}</td>
                <td class="total">{{ $ticket->status }}</td>
                <td class="total">{{ $ticket->formatRupiah('total_price') }}</td>
              </tr>
          </tbody>
    </x-ticket-table>
    <h3><a href="{!! route('index') !!}" class="mt-3">Back To Home</a></h3>
    <footer>

    </footer>
  </body>
</html>
