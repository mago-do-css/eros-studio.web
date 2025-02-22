@props([
'title', 
'subtitle', 
'text', 
'imageName', 
'isCta'=>false,
'boxStyle'=>'',
])

<div class="{{ $boxStyle }} flex flex-col">
  <div class="" style="background-image: url('{{asset('storage/images/' . $imageName) }}')">

  </div>
  <h3>{{ $title }}</h3>
  <h4>{{ $subtitle }}</h4>
  <p>{{ $text }}</p>

  @if ($isCta == "true")
    <a href="">Ver mais</a>
  @endif
</div>