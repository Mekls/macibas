<x-layout>
    <x-slot:title>Lessons</x-slot:title>
    <div class="table-body">
        <table>
            <tr>
                <th>ID</th>
                <th>
                    <a href="{{ route('lessons.index', ['sort_by' => 'form_id', 'sort_direction' => $sortDirection == 'asc' ? 'desc' : 'asc']) }}" class="th-sort">
                    Form @if($sortColumn == 'form_id') {{ $sortDirection == 'asc' ? '▲' : '▼' }} @endif
                    </a>
                </th>
                <th>Teacher</th>
                <th>Subject</th>
                <th>Weekday</th>
                <th>Period</th>
            </tr>
            @foreach ($lessons as $lesson)
                <tr>
                    <td><a href="/lessons/{{$lesson->id}}">{{$lesson->id}}</a></td>
                    <td>{{$lesson->form->name}}</td>
                    <td>{{$lesson->user->last_name}}</td>
                    <td>{{$lesson->subject->name}}</td>
                    <td>{{$lesson->weekday_name}}</td>
                    <td>{{$lesson->period}}</td>
                </tr>
            @endforeach
        </table>
        <div>
            {{ $lessons->appends(['sort_by' => $sortColumn, 'sort_direction' => $sortDirection])->links() }}
        </div>
        @can('crud-actions')
        <div class="crud-field">
            <a class="crud-add" href="lessons/create">Add</a>
        </div>
        @endcan
    </div>
</x-layout>