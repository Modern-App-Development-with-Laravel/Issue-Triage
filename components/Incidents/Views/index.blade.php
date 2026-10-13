@extends('incidents::layout')

@section('content')
    <form 
        action="{{ route('incidents.store') }}"
        method="POST"
    >
        @csrf

        @if($errors->any())
            <div class="rounded border border-red-200 bg-red-50 text-red-800 p-4 mb-6">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <label class="block text-sm font-semibold text-slate-800">
            What happened?
        </label>

        <p class="text-sm leading-6 text-slate-500">
            Include the symptoms, when the problem started, and how it affects your work.
        </p>

        <textarea 
            name="description"
            rows="5"
            maxlength="5000"
            class="mt-4 border border-gray-300 rounded p-2 w-full bg-white resize-none focus:outline-none"
        >{{ old('description') }}</textarea>

        <p class="text-xs text-slate-400">
            Minimum 10 characters<br>
            Maximum 5,000 characters
        </p>

        <button 
            class="mt-6 bg-blue-500 text-white font-bold py-2 px-4 rounded cursor-pointer"
            type="submit"
        >
            Analyze and register incident
        </button>
    </form>

    <script>
        document.querySelector('form').addEventListener('submit', function () {
            const button = this.querySelector('button[type="submit"]');
            
            button.disabled = true;
            button.textContent = 'Analyzing...';
        });
    </script>

    <div class="py-8 max-w-2xl">
        @include('incidents::list')
    </div>
@endsection