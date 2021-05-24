@extends('layouts.template_common')

@section('title', '写真詳細')
@section('css')
    {{ asset('css/photo_detail.css') }}
@endsection

@section('content')
<div class="photo-detail-container">
    <div class="photo-main">
        <div class="photo-area">
            <img src="<?php echo url('assets/photo/photo_img.jpg');?>" alt="写真画像">
        </div>
        <div class="photo-info-area">
            <div class="photo-subtitle">2021.January-III</div>
            <div class="photo-title">
                しあわせの保護色全角２０文字が入ります。
                <!-- しあわせの保護色 -->
            </div>
            <div class="photo-pose-favorite">
                <div class="photo-pose">ヨリ</div>
                <div class="photo-favorite on">★お気に入り</div>
                <div class="photo-comp on">コンプ済</div>
            </div>
            <div class="photo-hashtag">
                <li>#乃木坂46</li>
                <li>#まいやん</li>
                <li>#25thシングル</li>
                <li>#しあわせの保護色</li>
            </div>

            <div class="btn-area">
                <table>
                    <tr>
                        <td>編集</td>
                        <td>コンプ詳細</td>
                    </tr>
                    <tr>
                        <td>一覧に戻る</td>
                        <td>削除</td>
                    </tr>
                </table>
            </div>
            
        </div>
    </div>
    <div class="same-photo-area">
        <div class="same-photo-title">同種</div>
        <div class="photos-container">
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
    </div>    
    

</div>
@endsection