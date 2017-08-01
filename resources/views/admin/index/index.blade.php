@extends('admin.layouts.base')

@section('title','默认首页')

@section('pageHeader','控制面板')

@section('pageDesc','DashBoard')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1 class="pull-left">网站基本情况</h1>
        </section>
        <div class="content">
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <div class="box box-primary">
                <div class="box-body">
                    <table class="table table-responsive table-striped" style="word-break: break-all" id="videos-table">
                        <tr style="text-align: left;"><td >当前域名</td> <td>stage.ipmfj.com</td></tr>
                        <tr style="text-align: left;"><td >当前浏览器</td> <td>Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36</td></tr>
                        <tr style="text-align: left;"><td >当前IP</td> <td>110.252.209.106</td></tr>

                        <tr style="text-align: left;"><td >标题</td> <td>妹夫家—全球轻视频优选中心</td></tr>
                        <tr style="text-align: left;"><td >关键字</td> <td>妹夫家,短视频版权,版权交易,版权登记,版权服务,确权,版权,短视频,DCI,线上登记,内容,图片,图集,版权库,小说,视频,改编,作家,创作者,UGC,IP,PGC,专题,生活,品质生活,自媒体,轻视频</td></tr>
                        <tr style="text-align: left;"><td >描述</td> <td>妹夫家——更好，更实用，更性感的未来媒体，专注“品质生活“，打造最具价值的自媒体版权中心，全球化轻视频版权及广告服务</td></tr>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection


@section('js')

@endsection