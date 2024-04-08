<table>
    <thead>
    <tr>
        <th>Request Method</th>
        <th>Request URI</th>
        <th>Response Status Code</th>
        <th>Response Headers</th>
        <th>Response Body</th>
    </tr>
    </thead>
    <tbody>
    @foreach($endpoints as $endpoint)
        <tr>
            <td>{{ $endpoint->request_method }}</td>
            <td>{{ $endpoint->request_uri }}</td>
            <td>{{ $endpoint->response_status_code }}</td>
            <td>{{ $endpoint->response_headers->implode(', ') }}</td>
            <td>{{ $endpoint->response_body }}</td>
        </tr>
    @endforeach
</table>
