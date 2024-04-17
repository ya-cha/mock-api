<div class="p-6">
    <form wire:submit="update">
        <div class="flex flex-col md:flex-row space-y-3 md:space-x-12">
            <div class="flex-1">
                <label for="response_status_code" class="font-bold text-gray-300 text-xs uppercase">Response Status
                    Code</label>
                <input wire:model="response_status_code" type="number" id="response_status_code"
                       class="font-mono text-sm w-full bg-gray-800 text-gray-300 rounded p-2"/>
            </div>
        </div>
        <label for="response_headers" class="font-bold text-gray-300 text-xs uppercase">Response Headers</label>
        @foreach($response_headers as $key => $header)
            <div class="flex flex-col md:flex-row md:space-x-12">
                <div class="flex-1">
                    <input wire:model="response_headers.{{ $loop->index }}.key" type="text" id="response_headers"
                           class="font-mono text-sm w-full bg-gray-800 text-gray-300 rounded p-2"/>
                </div>
                <div class="flex-1">
                    <input wire:model="response_headers.{{ $loop->index }}.value" type="text" id="response_headers"
                           class="font-mono text-sm w-full bg-gray-800 text-gray-300 rounded p-2"/>
                </div>
                <button wire:click.prevent="removeHeader({{ $loop->index }})" type="button"
                        class="bg-red-500 text-white px-4 py-2 rounded">Remove
                </button>
            </div>
        @endforeach
        <div class="flex flex-col md:flex-row space-y-3 md:space-x-12">
            <div class="flex-1">
                <button wire:click.prevent="addHeader" type="button"
                        class="bg-blue-500 text-white px-4 py-2 rounded">Add Header
                </button>
            </div>
        </div>
        <div class="flex flex-col md:flex-row space-y-3 md:space-x-12">
            <div class="flex-1">
                <label for="response_body" class="font-bold text-gray-300 text-xs uppercase">Response Body</label>
                <textarea wire:model="response_body" id="response_body"
                          class="min-h-44 font-mono text-sm w-full bg-gray-800 text-gray-300 rounded p-2"></textarea>
            </div>
        </div>
        <div class="flex flex-col md:flex-row space-y-3 md:space-x-12">
            <div class="flex-1">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
            </div>
        </div>
    </form>
</div>
