@foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(session()->has($msg))
  <blockquote class="layui-elem-quote">  {{ session()->get($msg) }}</blockquote>
  @endif
@endforeach
