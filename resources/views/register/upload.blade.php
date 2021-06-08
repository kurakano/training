@extends('layouts.template_common')

@section('title', '写真アップロード')
@section('css')
    {{ asset('css/register.css') }}
@endsection

@section('content')
<div class="register-container">
    
    <!-- 写真アップロード -->
    <div class="register-title">写真アップロード</div>
    <div class="register-contents-area">

        <!-- 入力欄 -->     
        <div class="new-register-area" style="display:block;">
            <!-- シリーズ -->
            <div class="input-container">
                <div class="input-title">シリーズ</div>
                <select name ="series">
                    <option value="1">2021.January-III しあわせの保護色</option>
                    <option value="2">2021.February-III しあわせの保護色</option>
                    <option value="3">2021.March-III しあわせの保護色</option>
                    <option value="4">2021.Arlil-III しあわせの保護色</option>
                </select>
            </div>
            <!-- ポーズ -->
            <div class="input-container">
                <div class="input-title">ポーズ</div>
                <select name ="pose">
                    <option value="1">ヨリ</option>
                    <option value="2">チュウ</option>
                    <option value="3">ヒキ</option>
                    <option value="4">座りヨリ</option>
                    <option value="5">座りヒキ</option>
                </select>
            </div>
            <!-- メンバー -->
            <div class="input-container">
                <div class="input-title">メンバー</div>
                <select name ="member">
                    <option value="1">金川紗耶</option>
                    <option value="2">金川紗耶</option>
                    <option value="3">金川紗耶</option>
                </select>
            </div>
            <!-- ハッシュタグ -->
            <div class="input-container hashtag" style="flex-wrap: wrap;">
                <div class="btn-plus">＋</div> <!-- ハッシュタグ入力欄追加 -->
                <div class="input-hashtag">
                    <div class="input-title">＃</div>
                    <input type="text" name="hashtag" style="width:6em;">
                </div>
            </div>

            <div class="input-container">
                <label class="btn-file-select" for="upload-photo">写真を選択
                    <input type="file" id="upload-photo" accept='image/*' style="display:none;">
                </label>
            </div>

            <div class="input-container">
                <div class="upload-photo-area">
                    <img src="{{ asset('assets/photo/photo_img_gray.jpg') }}" alt="アップロード画像">
                </div>
            </div>

            <div class="display-submit-btn">
                <a href="#"><div class="btn-submit">登録</div></a>    
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
    <!-- 写真アップロード END -->

    <a href="{{ action('RegisterController@index') }}"><div class="btn-back">戻る</div></a>

</div>

<script>
    $(function(){
        upload_img_flg = false;
        $('.glovalNav .register').addClass("current");
        // $('.glovalNav .register').attr('href', '#');

        $('.display-confirm').css('display', 'none');

        //マスタ登録ボタンクリック
        $('.btn-submit').on('click',function(){
            console.log('photo register');
            if(checkInput() == true)  {
                $('.display-submit-btn').css('display', 'none');
                $('.input-container').css('display', 'none');
                $('.display-confirm').css('display', 'block');
                confirm_series = 'シリーズ：'+$('select[name="series"] option:selected').text();
                confirm_pose = 'ポーズ：'+$('select[name="pose"] option:selected').text();
                confirm_member = 'メンバー：'+$('select[name="member"] option:selected').text();
                confirm_hashtag = (getInputHashtag().length > 0) ? '#'+getInputHashtag().join(", #") : '';
                confirm_img = '<div class="upload-photo-area"><img src="'+$('.upload-photo-area img').attr('src')+'"></div>';
                confirm_txt = confirm_series+'<br>'+confirm_pose+'<br>'+confirm_member+'<br>'+confirm_hashtag+'<br>'+confirm_img;
                $('.display-confirm .confirm-txt.input-data').html(confirm_txt);
            }
        });

        //マスタ登録確認YESボタンクリック
        $('.display-confirm .btn-yes').on('click',function(){
                console.log('YES!');
        });

        //マスタ登録確認NOボタンクリック
        $('.display-confirm .btn-no').on('click',function(){
                $('.display-submit-btn').css('display', 'block');
                $('.input-container').css('display', 'flex');
                $('.display-confirm').css('display', 'none');
        });

        //入力パラメータチェック
        function checkInput() {
            series = $('select[name="series"]').val();
            pose = $('select[name="pose"]').val();
            member = $('select[name="member"]').val();

            console.log('seriesID: '+series)
            console.log('poseID: '+pose)
            console.log('memberID: '+member)
            console.log('upload_img: '+upload_img_flg)

            if(series != "" && pose != "" && member != "" && upload_img_flg) {
                console.log('OK');
                return true;
            }
            return false;
        }

    });

    //入力されているハッシュタグを配列で取得
    function getInputHashtag() {
        var arr = [];
        $('input[name="hashtag"]').each(function(){
            if($(this).val() != '') {
                arr.push($(this).val());
            }
        });

        return arr;
    }

    // アップロード画像に変更があったらプレビューを変更
    $(document).on('change', '#upload-photo', function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".upload-photo-area img").attr('src', e.target.result);
            upload_img_flg = true;
        }
        reader.readAsDataURL(e.target.files[0]);
    })

    // ハッシュタグ入力欄追加
    $('.btn-plus').click(function(mouseEvent) {
    
        $('.input-container.hashtag').append('<div class="input-hashtag"><div class="input-title">＃</div><input type="text" name="hashtag" style="width:6em;"></div>');
    
    })

</script>
@endsection
