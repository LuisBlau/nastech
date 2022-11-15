@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="/media/logo.png" class="logo" alt="Nascence Home Page">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
