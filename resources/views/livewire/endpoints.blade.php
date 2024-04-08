<div class="container mx-auto">
@foreach($endpoints as $endpoint)
    <div class="flex flex-col md:flex-row py-3 border-b justify-between md:space-x-12 space-y-3">
        <dl class="flex-1">
            <dt class="font-bold text-gray-300 text-xs uppercase">Request</dt>
            <dd class="flex items-baseline space-x-3">
                <div class="font-bold text-gray-500">{{ $endpoint->request_method }}</div>
                <div class="font-mono text-sm">{{ $endpoint->request_uri }}</div>
            </dd>
        </dl>
        <dl class="flex-1">
            <dt class="font-bold text-gray-300 text-xs uppercase">Status Code</dt>
            <dd class="font-bold text-gray-500">{{ $endpoint->response_status_code }}</dd>
            <dt class="font-bold text-gray-300 text-xs uppercase mt-3">Headers</dt>
            <dd class="font-mono text-sm">
                @foreach($endpoint->response_headers as $key => $value)
                    <div>{{ $key }}: {{ $value }}</div>
                @endforeach
            </dd>
            <dt class="font-bold text-gray-300 text-xs uppercase mt-3">Body</dt>
            <dd class="max-h-32 font-mono text-sm overflow-hidden">{{ $endpoint->response_body }}</dd>
        </dl>
        <div class="flex flex-col space-y-3">
            <button wire:click="delete({{ $endpoint->id }})" wire:confirm="Are you sure?" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
        </div>
    </div>
@endforeach
{{ $endpoints->links() }}
</div>


