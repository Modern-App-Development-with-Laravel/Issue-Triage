@extends('incidents::layout')

@section('content')
<div class="flex justify-between items-center">
    <div class="flex items-center gap-4">
        <a href="{{ route('incidents.index') }}">
            &larr;
        </a>

        <h2 class="text-lg font-bold text-gray-900">
            #{{ $incident->id }}
            {{ $incident->title }}
        </h2>
    </div>

    <span class="rounded-full bg-orange-50 text-orange-700 px-2 py-1">
        {{ ucfirst($incident->priority->value) }}
    </span>
</div>

<p class="mt-1 text-sm text-gray-500">{{ $incident->description }}</p>

<div class="my-2 flex text-gray-500 gap-4">
    <span class="rounded-md bg-indigo-50 text-xs font-medium text-indigo-700 px-2 py-1">
        {{ ucfirst($incident->category->value) }}
    </span>
    <span class="rounded-md bg-green-50 text-xs font-medium text-green-700 px-2 py-1">
        {{ ucfirst($incident->status->value) }}
    </span>
    <span class="rounded-md bg-gray-50 text-xs font-medium text-gray-700 px-2 py-1">
        {{ $incident->created_at->diffForHumans() }}
    </span>
</div>

<section class="rounded-2xl border border-gray-200 bg-white p-4 shadow-sm">
    <div class="mb-4 flex items-center gap-4">
        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-orange-50 text-orange-600">
            &#9888;
        </div>

        <div>
            <h2 class="font-semibold text-gray-900">
                Business impact
            </h2>

            <p class="text-sm text-gray-500">
                Potential consequences of this incident
            </p>
        </div>
    </div>

    <div class="rounded-xl border border-orange-100 bg-orange-50/50 p-4">
        <p class="text-sm text-gray-700">{{ $incident->impact }}</p>
    </div>

    <div class="mt-6">
        <h2 class="font-semibold text-slate-900">
            Recommended actions
        </h2>

        <p class="text-sm text-slate-500">
            Suggested next steps for investigation
        </p>

        @if (count($incident->recommendations ?? []) > 0)
            <ul class="mt-4">
                @foreach ($incident->recommendations as $recommendation)
                    <li class="flex items-start gap-2">
                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-xs font-bold text-emerald-700">
                            {{ $loop->iteration }}
                        </span>

                        <p class="text-sm text-gray-700">
                            {{ $recommendation }}
                        </p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</section>
@endsection