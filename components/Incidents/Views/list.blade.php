@forelse($incidents as $incident)
    <article class="border-b last:border-b-0 border-gray-200 py-4">
        <div class="flex justify-between items-center">
            <h2 class="text-lg font-bold text-gray-900">
                <a href="{{ route('incidents.show', $incident) }}">
                    {{ $incident->title }}
                </a>
            </h2>
            <span class="rounded-full bg-orange-50 text-orange-700 px-2 py-1">{{ ucfirst($incident->priority->value) }}</span>
        </div>

        <p class="mt-1 text-sm text-gray-500">{{ $incident->description }}</p>

        <div class="mt-2 flex text-gray-500 gap-4">
            <span class="rounded-md bg-indigo-50 text-xs font-medium text-indigo-700 px-2 py-1">{{ ucfirst($incident->category->value) }}</span>
            <span class="rounded-md bg-green-50 text-xs font-medium text-green-700 px-2 py-1">{{ ucfirst($incident->status->value) }}</span>
            <span class="rounded-md bg-gray-50 text-xs font-medium text-gray-700 px-2 py-1">{{ $incident->created_at->diffForHumans() }}</span>
        </div>
    </article>
@empty
    <div>
        <h3 class="mt-4 text-sm font-semibold text-gray-900">
            No incidents yet
        </h3>

        <p class="max-w-sm text-sm text-gray-500 italic">
            When you report your first incident, its AI-generated analysis will appear here.
        </p>
    </div>
@endforelse