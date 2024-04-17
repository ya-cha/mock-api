<div class="container mx-auto">
@foreach($endpoints as $endpoint)
        <div class="flex flex-col md:flex-row py-3 border-b justify-between md:space-x-12 space-y-3">
            <x-dl class="flex-1">
                <x-dt>Request</x-dt>
                <x-dd class="flex items-baseline space-x-3">
                    <div class="font-bold text-gray-500">{{ $endpoint->request_method }}</div>
                    <x-code>{{ $endpoint->request_uri }}</x-code>
                </x-dd>
            </x-dl>
            <x-dl class="flex-1">
                <x-dt>Status Code</x-dt>
                <x-dd class="font-bold text-gray-500">{{ $endpoint->response_status_code }}</x-dd>
                <x-dt class="mt-3">Headers</x-dt>
                <x-dd>
                    @foreach($endpoint->response_headers as $key => $value)
                        <x-code>{{ $key }}: {{ $value }}</x-code>
                    @endforeach
                </x-dd>
                <x-dt class="mt-3">Body</x-dt>
                <x-dd>
                    <x-code class="max-h-32 overflow-hidden">
                        @if (json_validate($endpoint->response_body))
                            <x-json>{!! $endpoint->response_body !!}</x-json>
                        @else
                            {{ $endpoint->response_body }}
                        @endif
                    </x-code>
                </x-dd>
            </x-dl>
            <div class="flex flex-col space-y-3">
                <button wire:click="$dispatch('openModal', {component: 'edit-endpoint', arguments: {endpoint: {{ $endpoint->id }} }})"
                        class="bg-blue-500 text-white px-4 py-2 rounded">Edit
                </button>
                <button wire:click="delete({{ $endpoint->id }})" wire:confirm="Are you sure?"
                        class="bg-red-500 text-white px-4 py-2 rounded">Delete
                </button>
            </div>
        </div>
    @endforeach
    {{ $endpoints->links() }}
</div>


