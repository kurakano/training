@extends('layouts.template_common')

@section('title', '写真一覧')
@section('css')
    {{ asset('css/photo_list.css') }}
@endsection

@section('content')
<div class="photo-list-container">
    <div class="sort-list-container">
        <div class="sort-container">
            <div class="sort-title">年</div>
            <select>
                <option value="">指定なし</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <div class="sort-title">月</div>
            <select>
                <option value="">指定なし</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div class="sort-container">
            <div class="sort-title">ポーズ</div>
            <select>
                <option value="">指定なし</option>
                <option value="1">ヨリ</option>
                <option value="2">チュウ</option>
                <option value="3">ヒキ</option>
            </select>
            <div class="sort-title">コンプ</div>
            <select>
                <option value="">指定なし</option>
                <option value="1">コンプ済</option>
                <option value="2">未コンプ</option>
            </select>
            <div class="sort-title">お気に入り</div>
            <select>
                <option value="">指定なし</option>
                <option value="1">登録済</option>
                <option value="2">未登録</option>
            </select>
        </div>
        <div class="sort-container">
            <div class="sort-title">ソート</div>
            <select>
                <option value="">Choose</option>
                <option value="1">新しい順</option>
                <option value="2">古い順</option>
            </select>
        </div>
    </div>
    <div class="photos-container">
        <div class="photo-container">
            <p>ヨリ</p>
            <a href="{{ action('PhotoController@detail') }}"><img src="<?php echo url('assets/photo/photo_img.jpg');?>" alt="写真画像"></a>
            <div class="caption1">2021.January-III</div>
            <div class="photo-title">ジャケットセットアップ</div>
        </div>
        <div class="photo-container">
            <p>チュウ</p>
            <a href="#"><img src="<?php echo url('assets/photo/photo_img.jpg');?>" alt="写真画像"></a>
            <div class="caption1">2021.January-III</div>
            <div class="photo-title">しあわせの保護色</div>
        </div>
        <div class="photo-container">
            <p>ヒキ</p>
            <a href="#"><img src="<?php echo url('assets/photo/photo_img.jpg');?>" alt="写真画像"></a>
            <div class="caption1">2021.January-III</div>
            <div class="photo-title">しあわせの保護色</div>
        </div>
        <div class="photo-container">
            <p>座りヨリ</p>
            <a href="#"><img src="<?php echo url('assets/photo/photo_img.jpg');?>" alt="写真画像"></a>
            <div class="caption1">2021.January-III</div>
            <div class="photo-title">しあわせの保護色</div>
        </div>
        <div class="photo-container">
            <p>座りヒキ</p>
            <a href="#"><img src="<?php echo url('assets/photo/photo_img.jpg');?>" alt="写真画像"></a>
            <div class="caption1">2021.January-III</div>
            <div class="photo-title">しあわせの保護色</div>
        </div>
        <div class="photo-container">
            <p>ヨリ</p>
            <a href="#"><img src="<?php echo url('assets/photo/photo_img.jpg');?>" alt="写真画像"></a>
            <div class="caption1">2021.January-III</div>
            <div class="photo-title">しあわせの保護色</div>
        </div>
        <div class="photo-container">
            <p>ヨリ</p>
            <a href="#"><img src="<?php echo url('assets/photo/photo_img.jpg');?>" alt="写真画像"></a>
            <div class="caption1">2021.January-III</div>
            <div class="photo-title">しあわせの保護色</div>
        </div>
        <div class="photo-container">
            <p>ヨリ</p>
            <a href="#"><img src="<?php echo url('assets/photo/photo_img.jpg');?>" alt="写真画像"></a>
            <div class="caption1">2021.January-III</div>
            <div class="photo-title">しあわせの保護色</div>
        </div>
    </div>
    <div class="paging">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">&lt;</a></li>
        <li class="this">1</li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">&hellip;</a></li>
        <li><a href="#">998</a></li>
        <li><a href="#">999</a></li>
        <li><a href="#">1000</a></li>
        <li><a href="#">&gt;</a></li>
        <li><a href="#">&raquo;</a></li>
    </div>
</div>

<script>
    $(function(){
        $('.glovalNav .photo-list').addClass("current");
        $('.glovalNav .photo-list').attr('href', '#');
    });
</script>
@endsection