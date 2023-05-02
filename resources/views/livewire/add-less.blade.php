<div>
    <form method="POST" action="{{ route('add-lessons') }}">
        @csrf
        <input type="text" placeholder="Title" name="title">
        <input type="text" placeholder="Video Link" name="video_url">
        <select name="course_id" wire:model="course_id" wire:change="change">
            @foreach ($courses as $course)
                <option value="{{ $course -> id }}" id="test">{{ $course -> name }}</option>
            @endforeach
        </select>

        <select name="parent" value="Parent" aria-placeholder="Parent">
            <option value="none">None</option>
            @if ($parents != null)
                @foreach ($parents as $parent)
                    <option value="{{ $parent -> id }}">{{ $parent -> title }}</option>
                @endforeach
            @endif
            
        </select>
        <textarea placeholder="Description" name="description"></textarea>
        <button type="submit">Submit</button>
    </form>
</div>
