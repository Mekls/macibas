<x-layout>
    <x-slot:title>Timetable</x-slot:title>
    <div class="div-timetable">
    @if ($lessons->isEmpty())
        <p>No lessons scheduled.</p>
    @else
        @foreach ([1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday'] as $day => $dayName)
            @php
                $dayLessons = $lessons->where('weekday', $day);
            @endphp
            @if ($dayLessons->isNotEmpty())
                <h2>{{ $dayName }}</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Period</th>
                            @if (Auth::user()->user_role_id == 3) {{-- For students --}}
                                <th>Form</th>
                                <th>Subject</th>
                                <th>Teacher</th>
                            @elseif (Auth::user()->user_role_id == 2) {{-- For teachers --}}
                                <th>Form</th>
                                <th>Subject</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dayLessons as $lesson)
                            <tr>
                                <td>{{ $lesson->period }}</td>
                                @if (Auth::user()->user_role_id == 3) {{-- For students --}}
                                    <td>{{ $lesson->form->name }}</td>
                                    <td>{{ $lesson->subject->name }}</td>
                                    <td>{{ $lesson->user->first_name }} {{ $lesson->user->last_name }}</td>
                                @elseif (Auth::user()->user_role_id == 2) {{-- For teachers --}}
                                    <td>{{ $lesson->form->name }}</td>
                                    <td>{{ $lesson->subject->name }}</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h2>{{ $dayName }}</h2>
                <p>No lessons scheduled for {{ $dayName }}.</p>
            @endif
        @endforeach
    @endif
    </div>
</x-layout>
