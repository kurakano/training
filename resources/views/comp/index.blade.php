@extends('layouts.template_common')

@section('title', 'コンプ一覧')
@section('css')
    {{ asset('css/comp.css') }}
@endsection

@section('content')
コンプ一覧
<script>
    $(function(){
        $('.glovalNav .comp-list').addClass("current");
        $('.glovalNav .comp-list').attr('href', '#');
    });
</script>
@endsection
