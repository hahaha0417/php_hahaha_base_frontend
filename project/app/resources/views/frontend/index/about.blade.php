@extends('frontend.layout')


@section('content')
    <!-- 資訊 -->
    <?php \hahaha\view\frontend\component\author_info::Instance()->view(); ?>
    <!-- 連結 -->
    <?php \hahaha\view\frontend\component\author_link::Instance()->view(); ?>
    <!-- 學歷 -->
    <?php \hahaha\view\frontend\component\author_education::Instance()->view(); ?>
    <!-- 經歷 -->
    <?php \hahaha\view\frontend\component\author_experience::Instance()->view(); ?>
    <!-- 技能 -->
    <?php \hahaha\view\frontend\component\author_skill::Instance()->view(); ?>





    
@endsection