<x-layout>
    <x-slot:title>Users</x-slot:title>
    <div class="table-body">
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Personal Code</th>
                <th>Role</th>
                <th>Form</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->personal_code}}</td>
                <td>{{$user->user_role_id}}</td>
                <td>{{$user->form_id}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</x-layout>