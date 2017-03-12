@if (Session::has('message'))
    <div class="message">{{Session::get('message')}}</div>
@endif
<ul>
    @foreach ($list as $item )
        <li>{{$item->name}}</li>
    @endforeach
</ul>
{{-- giaynu=name = ten trong table --}}
