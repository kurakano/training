@extends('layouts.template_common')

@section('title', '登録')
@section('css')
    {{ asset('css/register.css') }}
@endsection

@section('content')
<div class="register-container">
    <!-- 写真アップロード -->
    <div class="register-title">写真登録</div>
    <div class="register-contents-area">
        <a href="#"><div class="btn-photo-register">写真をアップロード</div></a>
    </div>
    <!-- 写真アップロード END -->

    <!-- マスタ登録・修正 -->
    <div class="register-title">マスタ登録・修正</div>
    <div class="register-contents-area">
        <div class="tab-master-category">
            <ul>
                <li class="series selected">シリーズ</li>                
                <li class="pose not-select">ポーズ</li>
                <li class="member not-select">メンバー</li>
            </ul>
        </div>
        <!-- シリーズマスタ -->
        <div class="master-area series-master">
            <div class="register-label" data-icon="＋">シリーズを新規登録</div>
            <div class="new-register-area">
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
                    <input type="text" name="series-color" style="width:5em;" maxlength="10">
                </div>

                <div class="display-submit-btn">
                    <a href="#"><div class="btn-submit series">登録</div></a>    
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
            <table class="master-table">
                <tr>
                    <th>ID</th>
                    <th>シリーズ名</th>
                    <th>年</th>
                    <th>月</th>
                    <th>No.</th>
                    <th>ポーズ</th>
                    <th>カラー</th>
                    <th></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>しあわせの保護色</td>
                    <td>2021</td>
                    <td>5</td>
                    <td>1</td>
                    <td class="pose">ヨリ, チュウ, ヒキヨリ, チュウ, ヒキ</td>
                    <td><div class="color-box">　</div></td>
                    <td><a href="#"><div class="btn-edit">編集</div></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>しあわせの保護色</td>
                    <td>2021</td>
                    <td>5</td>
                    <td>1</td>
                    <td class="pose">ヨリ, チュウ, ヒキヨリ, チュウ, ヒキ</td>
                    <td><div class="color-box">　</div></td>
                    <td><a href="#"><div class="btn-edit">編集</div></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>しあわせの保護色</td>
                    <td>2021</td>
                    <td>5</td>
                    <td>1</td>
                    <td class="pose">ヨリ, チュウ, ヒキヨリ, チュウ, ヒキ</td>
                    <td><div class="color-box">　</div></td>
                    <td><a href="#"><div class="btn-edit">編集</div></a></td>
                </tr>
            </table>
        </div>

        <!-- ポーズマスタ -->
        <div class="master-area pose-master">
            <div class="register-label" data-icon="＋">ポーズを新規登録</div>
            <div class="new-register-area">
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
            <table class="master-table">
                <tr>
                    <th>ID</th>
                    <th>ポーズ名</th>
                    <th></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>ヨリ</td>
                    <td><a href="#"><div class="btn-edit">編集</div></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>チュウ</td>
                    <td><a href="#"><div class="btn-edit">編集</div></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>ヒキ</td>
                    <td><a href="#"><div class="btn-edit">編集</div></a></td>
                </tr>
            </table>
        </div>

        <!-- メンバーマスタ -->
        <div class="master-area member-master">
            <div class="register-label" data-icon="＋">メンバーを新規登録</div>
            <div class="new-register-area">
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
            <table class="master-table">
                <tr>
                    <th>ID</th>
                    <th>メンバー名</th>
                    <th>メンバー名（カナ）</th>
                    <th>メンバー名（KANA）</th>
                    <th></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>金川紗耶</td>
                    <td>カナガワサヤ</td>
                    <td>KANAGAWASAYA</td>
                    <td><a href="#"><div class="btn-edit">編集</div></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>金川紗耶</td>
                    <td>カナガワサヤ</td>
                    <td>KANAGAWASAYA</td>
                    <td><a href="#"><div class="btn-edit">編集</div></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>金川紗耶</td>
                    <td>カナガワサヤ</td>
                    <td>KANAGAWASAYA</td>
                    <td><a href="#"><div class="btn-edit">編集</div></a></td>
                </tr>
            </table>
        </div>
    </div>
    <!-- マスタ登録・修正 END -->

</div>

<script>
    $(function(){
        $('.glovalNav .register').addClass("current");
        $('.glovalNav .register').attr('href', '#');
        $('.display-confirm').css('display', 'none');

        //マスタ切替
        $('.pose-master').css('display', 'none');
        $('.member-master').css('display', 'none');

        $('.tab-master-category .series').click(function() {
            changeTab('series');
        })

        $('.tab-master-category .pose').click(function() {
            changeTab('pose');
        })

        $('.tab-master-category .member').click(function() {
            changeTab('member');
        })

        //マスタ切替（関数）
        function changeTab(tab) {
            $('.series-master').css('display', 'none');
            $('.pose-master').css('display', 'none');
            $('.member-master').css('display', 'none');
            $('.'+tab+'-master').css('display', 'block');

            $('.tab-master-category .series').removeClass('selected');
            $('.tab-master-category .pose').removeClass('selected');
            $('.tab-master-category .member').removeClass('selected');

            $('.tab-master-category .series').addClass('not-select');
            $('.tab-master-category .pose').addClass('not-select');
            $('.tab-master-category .member').addClass('not-select');

            $('.tab-master-category .'+tab).removeClass('not-select');
            $('.tab-master-category .'+tab).addClass('selected');
        }

        //マスタ登録入力欄展開
        $('.register-label').each(function(){
            $(this).on('click',function(){
                $("+.new-register-area",this).slideToggle();
                if($(this).attr('data-icon') == '＋') {
                    $(this).attr('data-icon', 'ー');
                }
                else {
                    $(this).attr('data-icon', '＋');
                }
            });
        });

        //マスタ登録ボタンクリック
        $('.btn-submit').each(function(){
            $(this).on('click',function(){
                //シリーズマスタ
                if($(this).hasClass('series')) {
                    console.log('series register');
                    if(checkSeriesInput() == true)  {
                        $(this).parent().parent().css('display', 'none');
                        $(this).parent().parent().parent().find('.input-container').css('display', 'none');
                        $(this).parent().parent().parent().find('.display-confirm').css('display', 'block');
                        confirm_series_no = ($('input[name="series-no"]').val() != "") ? ' No.'+$('input[name="series-no"]').val() : '';
                        confirm_txt = $('input[name="series-year"]').val()+'年 '+$('select[name="series-month"]').val()+'月'+confirm_series_no+'<br>ポーズ：'+getSeriesPoses().join(",");
                        $(this).parent().parent().parent().find('.display-confirm .confirm-txt.input-data').html(confirm_txt);
                    }
                }
                //ポーズマスタ
                else if($(this).hasClass('pose')) {
                    console.log('pose register');
                    if(checkPoseInput() == true)  {
                        $(this).parent().parent().css('display', 'none');
                        $(this).parent().parent().parent().find('.input-container').css('display', 'none');
                        $(this).parent().parent().parent().find('.display-confirm').css('display', 'block');
                        confirm_txt = 'ポーズ名：'+$('input[name="pose-name"]').val();
                        $(this).parent().parent().parent().find('.display-confirm .confirm-txt.input-data').html(confirm_txt);   
                    }
                }
                //メンバーマスタ
                else if($(this).hasClass('member')) {
                    console.log('member register');
                    if(checkMemberInput() == true)  {
                        $(this).parent().parent().css('display', 'none');
                        $(this).parent().parent().parent().find('.input-container').css('display', 'none');
                        $(this).parent().parent().parent().find('.display-confirm').css('display', 'block');
                        confirm_txt = 'メンバー名：'+$('input[name="member-name"]').val()+'<br>メンバー名(カナ)：'+$('input[name="member-name-kana"]').val()+'<br>メンバー名(KANA)：'+$('input[name="member-name-kana-e"]').val();
                        $(this).parent().parent().parent().find('.display-confirm .confirm-txt.input-data').html(confirm_txt);   
                    }
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
            //TODO: シリーズカラー

            if(series_year != "" && series_month != "" && series_poses.length > 0) {
                console.log('OK');
                return true;
            }
            return false;
        }

        //ポーズの入力パラメータチェック
        function checkPoseInput() {
            pose_name = $('input[name="pose-name"]').val();

            if(pose_name != "") {
                console.log('OK');
                return true;
            }
            return false;
        }

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
