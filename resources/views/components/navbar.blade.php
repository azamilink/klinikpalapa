 @props(['active' => false])

 @php
     $classes = $active ?? false ? 'active' : '';
 @endphp


 <li class="mx-5 px-5">
     <a {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
 </li>
