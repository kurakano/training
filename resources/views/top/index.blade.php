@extends('layouts.template_common')

@section('title', 'TOP')
@section('css')
    {{ asset('css/top.css') }}
@endsection

@section('content')
トップページ
<script>
    $(function(){
        $('.glovalNav .top').addClass("current");
        $('.glovalNav .top').attr('href', '#');
    });
</script>
@endsection
