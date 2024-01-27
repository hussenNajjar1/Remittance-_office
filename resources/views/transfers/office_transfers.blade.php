<div class="container">


    @if ($officeTransfers->isEmpty())
    <p>No transfers found for this office.</p>
    @else
    <p>Office Name: {{ $officeTransfers->first()->senderOffice->name }}</p>
    <p>Current Balance: {{ $officeTransfers->first()->senderOffice->current_balance }}</p>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Sender Office</th>
                <th>Receiver Office</th>
                <th>Amount</th>
                <th>Transfer Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($officeTransfers as $transfer)
            <tr>
                <td>{{ $transfer->id }}</td>
                <td>{{ $transfer->senderOffice->name }}</td>
                <td>{{ $transfer->receiverOffice->name }}</td>
                <td>{{ $transfer->amount }}</td>
                <td>{{ $transfer->transfer_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>