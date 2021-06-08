@extends('layouts.template_common')

@section('title', 'メンバーマスタ編集')
@section('css')
    {{ asset('css/register.css') }}
@endsection

@section('content')
<div class="register-container">
    
    <!-- メンバーマスタ編集 -->
    <div class="register-title">メンバーマスタ編集</div>
    <div class="register-contents-area">

        <!-- 入力欄 -->
        <div class="new-register-area" style="display:block;">
            <div class="input-container">
                <div class="input-title">メンバー名</div>
                <input type="text" name="member-name" maxlength="20">                    
            </div>
            <div class="input-container">
                <div class="input-title">メンバー名(カナ)</div>
                <input type="text" name="member-name-kana" maxlength="20">
            </div>
            <div class="input-container">
            <div class="input-title">メンバー名(KANA)</div>
                <input type="text" name="member-name-kana-e" maxlength="20">
            </div>

            <div class="display-submit-btn">
                <a href="#"><div class="btn-submit member">登録</div></a>
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
    <!-- メンバーマスタ編集 END -->

    <a href="{{ action('RegisterController@index') }}"><div class="btn-back">戻る</div></a>

</div>

<script>
    $(function(){
        $('.glovalNav .register').addClass("current");
        // $('.glovalNav .register').attr('href', '#');

        $('.display-confirm').css('display', 'none');

        //マスタ登録ボタンクリック
        $('.btn-submit').each(function(){
            $(this).on('click',function(){
                //メンバーマスタ
                console.log('member register');
                if(checkMemberInput() == true)  {
                    $(this).parent().parent().css('display', 'none');
                    $(this).parent().parent().parent().find('.input-container').css('display', 'none');
                    $(this).parent().parent().parent().find('.display-confirm').css('display', 'block');
                    confirm_txt = 'メンバー名：'+$('input[name="member-name"]').val()+'<br>メンバー名(カナ)：'+$('input[name="member-name-kana"]').val()+'<br>メンバー名(KANA)：'+$('input[name="member-name-kana-e"]').val();
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

        //メンバーの入力パラメータチェック
        function checkMemberInput() {
            member_name = $('input[name="member-name"]').val();
            member_name_kana = $('input[name="member-name-kana"]').val();
            member_name_kana_e = $('input[name="member-name-kana-e"]').val();

            if(member_name != "" && member_name_kana != "" && member_name_kana_e != "") {
                console.log('OK');
                return true;
            }
            return false;
        }

    });
</script>
@endsection
