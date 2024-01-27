<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">المرسل</th>
        <th scope="col">المستقبل</th>
        <th scope="col">المبلغ</th>
        <th scope="col">التاريخ</th>
    </tr>
    </thead>
    <tbody>
    @foreach($TransfersSender as $Transfers)
        <tr>
            <td>{{$Transfers->id}}</td>
            <td>{{$Transfers->senderOffice->name}}</td>
            <td>{{$Transfers->receiverOffice->name}}</td>
            <td>
                {{$Transfers->amount}}
            </td>

            <td>
              {{$Transfers->transfer_date}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
