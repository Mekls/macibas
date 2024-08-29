<x-layout>
    <x-slot:title>Edit Lesson</x-slot:title>
    <div class="div-create-lesson">
        <div>
            <h1>Edit Lesson</h1>

            @if ($errors->any())
                <div>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="error-list">{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/lessons/{{$lesson->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="form_id">Form:</label>
                    <select name="form_id" id="form_id" class="form-control" required>
                        @foreach ($forms as $form)
                            <option value="{{ $form->id }}">{{ $form->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="user_id">Teacher:</label>
                    <select name="user_id" id="user_id" class="form-control" required>
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->first_name }} {{ $teacher->last_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="subject_id">Subject:</label>
                    <select name="subject_id" id="subject_id" class="form-control" required>
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="weekday">Weekday:</label>
                    <select name="weekday" id="weekday" class="form-control" required>
                        <option value="1">Monday</option>
                        <option value="2">Tuesday</option>
                        <option value="3">Wednesday</option>
                        <option value="4">Thursday</option>
                        <option value="5">Friday</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="period">Period:</label>
                    <select name="period" id="period" class="form-control" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <button type="submit" class="submit-button">Submit</button>
            </form>
        </div>
    </div>
</x-layout>