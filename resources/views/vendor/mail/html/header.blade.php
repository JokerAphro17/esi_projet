<tr>
    <td class="header">
        <a href="#" style="display: inline-block;">
            @if (trim($slot) === 'ES')
            <img src="{{asset('img/logo.jpeg')}}" class="logo" alt="Logo ESI">
            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>