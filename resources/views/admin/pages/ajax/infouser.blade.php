<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <td>{{ $user->id}}</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Họ tên</th>
            <td>{{ $user->hoten}}</td>
        </tr>

        <tr>
            <th>Email</th>
            <td> {{ $user->email}}</td>
        </tr>

        <tr>
            <th>Số điện thoại</th>
            <td>{{ $user->dienthoai}}</td>
        </tr>

        <tr>
            <th>Địa chỉ</th>
            <td>{{ $user->diachi}}</td>
        </tr>

        <tr>
            <th>Quyền</th>
            <td>{{ $user->quyen==1?"Thành viên":"Admin"}}</td>
            <td>{{ $user->trangthai==1?"Hoạt động":"Tài khoản bị khóa"}}</td>
        </tr>

    </tbody>
</table>