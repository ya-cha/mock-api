<div class="container mx-auto">
@foreach($endpoints as $endpoint)
    <div class="flex py-3 border-b justify-between space-x-12">
        <div class="flex-1">
            <div class="font-bold text-gray-300 text-xs uppercase">Request</div>
            <div class="flex items-baseline space-x-3">
                <div class="font-bold text-gray-500">{{ $endpoint->request_method }}</div>
                <div class="font-mono text-sm">{{ $endpoint->request_uri }}</div>
            </div>
        </div>
        <div class="flex-1">
            <div class="font-bold text-gray-300 text-xs uppercase">Status Code</div>
            <div class="font-bold text-gray-500">{{ $endpoint->response_status_code }}</div>
            <div class="font-bold text-gray-300 text-xs uppercase mt-3">Headers</div>
            <div class="font-mono text-sm">
                @foreach($endpoint->response_headers as $key => $value)
                    <div>{{ $key }}: {{ $value }}</div>
                @endforeach
            </div>
            <div class="font-bold text-gray-300 text-xs uppercase mt-3">Body</div>
            <div class="font-mono text-sm">{{ $endpoint->response_body }}</div>
        </div>
    </div>
@endforeach
{{ $endpoints->links() }}
</div>


