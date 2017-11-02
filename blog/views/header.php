<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= $this->setting_model->get('icon') ?>"/>
    <title><?= !empty($meta_title) ? $meta_title : '' ?></title>
    <meta name="description" content="<?= !empty($meta_description) ? $meta_description : '' ?>">

    <!--define language-->
    <script>
        var CI_language = <?= json_encode($this->lang->language) ?>;
        CI_language.language = '<?= $this->config->item('language') ?>';
        CI_language.base_url = '<?= base_url() ?>';
        CI_language.site_url = '<?= site_url() ?>';
    </script>

    <!--jquery-->
    <script src="<?= base_url('vendors/jquery.min.js') ?>"></script>

    <!--bootstrap-->
    <link type="text/css" rel="stylesheet" href="<?= base_url('vendors/bootstrap/css/bootstrap.min.css') ?>"/>
    <script src="<?= base_url('vendors/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!--font awesome-->
    <link href="<?= base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" type="text/css" rel="stylesheet">

    <!--custom css-->
    <link href="<?= base_url('blog/views/style.css') ?>" rel="stylesheet" type="text/css"/>

    <!--spinner load-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendors/Spinner/Spinner.css') ?>"/>
    <script src="<?= base_url('vendors/Spinner/Spinner.js') ?>"></script>

    <!--alertify-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendors/AlertifyJS/alertify.min.css') ?>"/>

    <!--custom script-->
    <script src="<?= base_url('blog/views/script.js') ?>"></script>
</head>
<body>

<!--menu-->
<nav class="navbar navbar-default navbar-fixed-top" style="font-size:18px;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?= site_url() ?>">
                <img class="img-responsive navbar-brand" style="height:70px;padding:0"
                     src="<?= $this->setting_model->get('logo') ?>"/>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= site_url('tai-sao-chon-xe-minh-phat.html') ?>">TẠI SAO CHỌN XE MINH PHÁT</a></li>
                <li><a href="<?= site_url('hinh-anh-xe.html') ?>">ẢNH XE MINH PHÁT</a></li>
                <li><a href="<?= site_url('cam-nhan.html') ?>">CẢM NHẬN KH</a></li>
                <li><a href="<?= site_url('#footer') ?>">LIÊN HỆ</a></li>
            </ul>
        </div>
    </div>
</nav>
<div style="height: 70px;"></div>
<div class="container">
    <img style="width: 100%;" src="<?= base_url('uploads/images/banner.png') ?>"/>
</div>
<!--<div class="container text-center">-->
<!--    <h1 style="color:#DD1E3F;font-size: 50px"><b>MINH PHÁT</b></h1>-->
<!--    <p class="text-uppercase" style="font-size: 20px">Chuyên phục vụ xe tết tuyến Quảng Ngãi - Sài Gòn<br/>-->
<!--    Bình Sơn - Quảng Ngãi <i class="fa fa-arrow-left"></i><i class="fa fa-arrow-right"></i> Sài Gòn - Tân Phú</p>-->
<!--</div>-->
<div class="container-fluid" style="background: #CB2134;color: #FFF;">
    <div class="row">
        <div class="col-sm-3" style="border-top:solid 1px #FF5568;padding:15px;text-align: center">
            <p style="font-size:25px;padding-top:10px;color:#ffff00"><b>ĐẶT VÉ TẾT GỌI NGAY <i class="fa fa-arrow-right"></i> </b></p>
        </div>
        <div class="col-sm-3" style="border-top:solid 1px #FF5568;padding:15px;text-align: center">
            <i style="font-size: 35px;color:#ffff00" class="fa fa-phone"></i>&nbsp;
            <i style="font-size: 35px;color:#ffff00">0886.62.20.20</i>
        </div>
        <div class="col-sm-3" style="border-top:solid 1px #FF5568;padding:15px;text-align: center">
            <i style="font-size: 35px;color:#ffff00" class="fa fa-phone"></i>&nbsp;
            <i style="font-size: 35px;color:#ffff00">09.32.52.35.65</i>
        </div>
        <div class="col-sm-3" style="border-top:solid 1px #FF5568;padding:15px;text-align: center">
            <i style="font-size: 35px;color:#ffff00" class="fa fa-phone"></i>&nbsp;
            <i style="font-size: 35px;color:#ffff00">0886.77.95.95</i>
        </div>
    </div>
</div>