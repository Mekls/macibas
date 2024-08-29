<x-layout>
    <x-slot:title>Create Subject</x-slot:title>
    <div class="form-div">
        <form method="POST" action="/subjects">
            @csrf
            <label for="name">Subject name:</label><br>
            <input type="text" id="name" name="name" placeholder="Math" required><br>
            <button type="submit" class="submit-button">Save</button>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="error-list">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </form>
    </div>
</x-layout>