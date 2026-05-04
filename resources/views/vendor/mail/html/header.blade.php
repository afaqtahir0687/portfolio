@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block; color: #3d3d3d; font-size: 24px; font-weight: bold; text-decoration: none; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
    {{ $slot }}
</a>
</td>
</tr>
