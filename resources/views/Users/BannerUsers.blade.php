<table class="table">
    <thead>
        <tr>
            <th scope="col">الرقم</th>
            <th scope="col">الاسم </th>
            <th scope="col">الايميل</th>
            <th scope="col">الدور</th>
            <th scope="col">
                أجراءات
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                @if($user->role == 1)
                مسؤول
                @else
                مشرف
                @endif
            </td>

            <td>
                <a onclick="return confirm('Are you sure?')" href="/delete/{{$user->id}}"
                    class="btn  btn-danger">حذف</a>
                {{--                <button>U</button>--}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>