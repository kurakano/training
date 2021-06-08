@extends('layouts.template_common')

@section('title', 'シリーズマスタ編集')
@section('css')
    {{ asset('css/register.css') }}
@endsection

@section('content')
<div class="register-container">
    
    <!-- シリーズマスタ編集 -->
    <div class="register-title">シリーズマスタ編集</div>
    <div class="register-contents-area">

        <!-- 入力欄 -->     
        <div class="new-register-area" style="display:block;">
            <div class="input-container">
                <div class="input-title">年</div>
                <input type="text" name="series-year" style="width:3em;" value="2021" maxlength="4">
                <div class="input-title">月</div>
                <select name ="series-month">
                    @for( $i = 1; $i <= 12; $i++ )
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <div class="input-title">No.</div>
                <input type="text" name="series-no" style="width:2em;" maxlength="2">
            </div>
            <div class="input-container">
                <div class="input-title">ポーズ</div>
                <select id="series-poses" size="5" multiple>
                    <option value="1">ヨリ</option>
                    <option value="2">チュウ</option>
                    <option value="3">ヒキ</option>
                    <option value="4">座りヨリ</option>
                    <option value="5">座りヒキ</option>
                </select>
            </div>
            <div class="input-container">
                <div class="input-title">シリーズカラー</div>
                <div class="color-preview"><div class="color-box">　</div></div>
            </div>
            
            <div class="input-container">
                <label class="btn-file-select" for="file_photo">写真を選択
                    <input type="file" id="file_photo" accept='image/*' style="display:none;" onchange="previewImage(this);">
                </label>
            </div>

            <div class="input-container">
                <canvas id="demo_canvas" width=0 height=0></canvas>
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
    <!-- シリーズマスタ編集 END -->

    <a href="{{ action('RegisterController@index') }}"><div class="btn-back">戻る</div></a>

</div>

<script>
    color_code = '#7e1083';
    $(function(){
        $('.glovalNav .register').addClass("current");
        // $('.glovalNav .register').attr('href', '#');

        $('.display-confirm').css('display', 'none');

        //マスタ登録ボタンクリック
        $('.btn-submit').each(function(){
            $(this).on('click',function(){
                //シリーズマスタ
                console.log('series register');
                if(checkSeriesInput() == true)  {
                    $(this).parent().parent().css('display', 'none');
                    $(this).parent().parent().parent().find('.input-container').css('display', 'none');
                    $(this).parent().parent().parent().find('.display-confirm').css('display', 'block');
                    confirm_series_no = ($('input[name="series-no"]').val() != "") ? ' No.'+$('input[name="series-no"]').val() : '';
                    confirm_txt = $('input[name="series-year"]').val()+'年 '+$('select[name="series-month"]').val()+'月'+confirm_series_no+'<br>ポーズ：'+getSeriesPoses().join(",")+'<br>シリーズカラー：'+color_code;
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

        //シリーズのポーズ取得
        function getSeriesPoses() {
            var sel = document.getElementById("series-poses");
            var arr = [];
            // 選択値を配列に追加
            for (var i = 0; i < sel.length; i++) {
                if (sel[i].selected) { arr.push(sel[i].value); }
            }
            // カンマ区切りテキストをreturn
            //return arr.join(",");
            return arr;
        }

        //シリーズの入力パラメータチェック
        function checkSeriesInput() {
            series_year = $('input[name="series-year"]').val();
            series_month = $('select[name="series-month"]').val();
            series_no = $('input[name="series-no"]').val();
            series_poses = getSeriesPoses();

            if(series_year != "" && series_month != "" && series_poses.length > 0) {
                console.log('OK');
                return true;
            }
            return false;
        }

    });

    function previewImage(obj) {
        var fileReader = new FileReader();
        fileReader.onload = (function() {
            var canvas = document.getElementById('demo_canvas');
            var ctx = canvas.getContext('2d');
            var image = new Image();
            image.src = fileReader.result;
            image.onload = (function () {
                width = 200;
                height = width * image.height / image.width;
                canvas.width = width;
                canvas.height = height;
                ctx.drawImage(image, 0, 0, width, height);
            });
        });
        fileReader.readAsDataURL(obj.files[0]);
    }

    $('#demo_canvas').click(function(mouseEvent) {
        //クリックされた座標のピクセルデータを取得する
        var canvas = document.getElementById('demo_canvas');
        var ctx = canvas.getContext('2d');
        var imgData = ctx.getImageData(mouseEvent.offsetX, mouseEvent.offsetY, 1, 1);
        var rgba = imgData.data;

        //rgbaからカラーコードを取得
        red = rgba[0].toString(16).replace(/(^[0-9a-f]{1}$)/, '0$1');
        green = rgba[1].toString(16).replace(/(^[0-9a-f]{1}$)/, '0$1');
        blue = rgba[2].toString(16).replace(/(^[0-9a-f]{1}$)/, '0$1');
        color_code = '#' + red + green + blue;
        
        $('.color-preview .color-box').css('background-color', color_code);
    })
</script>
@endsection
