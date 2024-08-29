<x-layout>
    <x-slot:title>Subjects</x-slot:title>
    <div class="table-body">
        <table>
            <tr>
                <th>ID</th>
                <th>Subject</th>
                <th>Actions</th>
            </tr>
            @foreach($subjects as $subject)
            <tr>
                <td>{{$subject->id}}</td>
                <td>{{$subject->name}}</td>
                <td>
                    <a class="crud-small-edit" href="/subjects/edit/{{$subject->id}}">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
        <div class="crud-field">
            <a class="crud-add" href="subjects/create">Add</a>
        </div>
    </div>
</x-layout>