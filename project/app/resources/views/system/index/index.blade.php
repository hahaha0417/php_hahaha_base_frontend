@extends('system.layout')


@section('content')
    <div class="layout">
        <?php \hahaha\view\component\system\sidebar::Instance()->view(); ?>

        <div class="content">
        </div>
    </div>
@endsection