@if(count($errors)>0)
  @foreach($errors->all() as $error)
    <blockquote class="layui-elem-quote layui-quote-nm">{{$error}}</blockquote>
  @endforeach
@endif
