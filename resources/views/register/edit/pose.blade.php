@extends('layouts.template_common')

@section('title', 'ポーズマスタ編集')
@section('css')
    {{ asset('css/register.css') }}
@endsection

@section('content')
<div class="register-container">
    
    <!-- ポーズマスタ編集 -->
    <div class="register-title">ポーズマスタ編集</div>
    <div class="register-contents-area">

        <!-- 入力欄 -->
        <div class="new-register-area" style="display:block;">
            <div class="input-container">
                <div class="input-title">ポーズ名</div>
                <input type="text" name="pose-name" style="width:6em;" maxlength="10">
            </div>

            <div class="display-submit-btn">
                <a href="#"><div class="btn-submit pose">登録</div></a>
            </div>                

            <div class="display-confirm">
                <div class="confirm-txt">この内容で登録してもよろしいでしょうか？</div>
                <div class="confirm-txt input-data"></div>
                <div class="btn-area">
                    <table>
                        <tr>
                            <td class="btn-yes">はい</td>
                            <td class="btn-no">いいえ</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- 入力欄　END -->
    
    </div>
    <!-- ポーズマスタ編集 END -->

</div>

<script>
    $(function(){
        $('.glovalNav .register').addClass("current");
        // $('.glovalNav .register').attr('href', '#');

        $('.display-confirm').css('display', 'none');

        //マスタ登録ボタンクリック
        $('.btn-submit').each(function(){
            $(this).on('click',function(){
                //ポーズマスタ
                console.log('pose register');
                if(checkPoseInput() == true)  {
                    $(this).parent().parent().css('display', 'none');
                    $(this).parent().parent().parent().find('.input-container').css('display', 'none');
                    $(this).parent().parent().parent().find('.display-confirm').css('display', 'block');
                    confirm_txt = 'ポーズ名：'+$('input[name="pose-name"]').val();
                    $(this).parent().parent().parent().find('.display-confirm .confirm-txt.input-data').html(confirm_txt);   
                }
            });
        });

        //マスタ登録確認YESボタンクリック
        $('.display-confirm .btn-yes').each(function(){
            $(this).on('click',function(){
                console.log('YES!');
            });
        });

        //マスタ登録確認NOボタンクリック
        $('.display-confirm .btn-no').each(function(){
            $(this).on('click',function(){
                $(this).parent().parent().parent().parent().parent().parent().find('.display-submit-btn').css('display', 'block');
                $(this).parent().parent().parent().parent().parent().parent().find('.input-container').css('display', 'flex');
                $(this).parent().parent().parent().parent().parent().css('display', 'none');
            });
        });

        //ポーズの入力パラメータチェック
        function checkPoseInput() {
            pose_name = $('input[name="pose-name"]').val();

            if(pose_name != "") {
                console.log('OK');
                return true;
            }
            return false;
        }

    });
</script>
@endsection
