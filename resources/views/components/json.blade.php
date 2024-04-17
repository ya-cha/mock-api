@php
    $highlighter = new \Tempest\Highlight\Highlighter()
@endphp
{!! $highlighter->parse(e($slot), 'json') !!}
