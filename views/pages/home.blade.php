<div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue">
    {{ $content }}
</div>

<div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue">
    <p>папавпвапвапвапв</p>
</div>

<table class="w3-table-all">
    <tr class="w3-blue">
        <th>ID</th>
        <th>Назва товару</th>
        <th>Кількість товару</th>
        <th>Дія</th>
    </tr>
    @foreach($data as $student)
        <tr class="w3-hover-light-grey">
            <td>{{ $student['id'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['count'] ?? '0' }}</td>
            <td>
                <a href="/home/delete?id={{ $student['id'] }}" class="w3-button w3-red">Видалити</a>
            </td>
        </tr>
    @endforeach
</table>

<div class="w3-container w3-blue w3-padding-16 w3-margin-top">
    @include('form')
</div>
