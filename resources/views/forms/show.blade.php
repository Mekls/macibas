<x-layout>
    <x-slot:title>Showing Form</x-slot:title>
    @if($form->users->isEmpty())
        <p class="no-data">No users in this form.</p>
    @else 
        <div class="table-body">
            <table>
                <tr>
                    <th>Code</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
                @foreach($form->users as $user)
                <tr>
                    <td>{{$user->personal_code}}</td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    @endif
    @can('crud-actions')
    <div class="button-div-2">
            <button class="delete-button" type="submit" form="delete-form">Delete</button>
    </div>
    @endcan
    <form method="POST" action="/forms/{{$form->id}}" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
</x-layout>