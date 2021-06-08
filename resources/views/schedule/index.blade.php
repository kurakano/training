@extends('layouts.template_common')

@section('title', 'スケジュール')
@section('css')
    {{ asset('css/schedule.css') }}
@endsection

@section('content')
スケジュール
<script>
    $(function(){
        $('.glovalNav .schedule').addClass("current");
        $('.glovalNav .schedule').attr('href', '#');
    });
</script>
@endsection
