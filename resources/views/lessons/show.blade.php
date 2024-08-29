<x-layout>
    <x-slot:title>Show Lesson</x-slot:title>
    <div class="table-body">
        <table>
            <tr>
                <th>ID</th>
                <th>Form</th>
                <th>Teacher</th>
                <th>Subject</th>
                <th>Weekday</th>
                <th>Period</th>
            </tr>
                <tr>
                    <td>{{$lesson->id}}</td>
                    <td>{{$lesson->form->name}}</td>
                    <td>{{$lesson->user->last_name}}</td>
                    <td>{{$lesson->subject->name}}</td>
                    <td>{{$lesson->weekday_name}}</td>
                    <td>{{$lesson->period}}</td>
                </tr>
        </table>
    </div>
    <div class="button-div-3">
            <a href="/lessons/{{$lesson->id}}/edit" class="edit-button-2">Edit</a>
            <button class="delete-button-2" type="submit" form="delete-form">Delete</button>
    </div>
    <form method="POST" action="/lessons/{{$lesson->id}}" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
</x-layout>