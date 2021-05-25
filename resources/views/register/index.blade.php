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
                    <select>
                        @for( $i = 1; $i <= 12; $i++ )
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    <div class="input-title">No.</div>
                    <input type="text" name="series-no" style="width:2em;" maxlength="2">
                    <div class="input-title">ポーズ</div>
                    <select>
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
                <a href="#"><div class="btn-submit">登録</div></a>
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
                ポーズを新規登録
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
                メンバーを新規登録
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

        $('.register-label').each(function(){
            $(this).on('click',function(){
                $("+.new-register-area",this).slideToggle();
                if($(this).attr('data-icon') == '＋') {
                    $(this).attr('data-icon', 'ー');
                }
                else {
                    $(this).attr('data-icon', '＋');
                }
                return false;
            });
        });

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

    });
</script>
@endsection
