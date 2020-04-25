<!DOCTYPE html>
<head>
    <title><?= $meeting['class']; ?></title>
    <meta charset="utf-8" />
    <link href="https://knsonline.tsbeducation.com/wp-content/themes/learningpitch/img/icons/favicon.png?v=1" rel="shortcut icon">
    <meta data-base="<?= base_url(); ?>">
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.7.6/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.7.6/css/react-select.css"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<style>
    body {padding-top: 50px;}
    .meeting-tip span {display: none;}
</style>
<?php
$m = $meeting;
$s = $student;
?>
<div data-access="<?= $m['api'].'|'.$m['secret'].'|'.base_url().'|'.$m['meeting_id'].'|'.$s['fullname'].'|'.$m['password'] ?>"></div>

<script src="https://source.zoom.us/1.7.6/lib/vendor/react.min.js"></script>
<script src="https://source.zoom.us/1.7.6/lib/vendor/react-dom.min.js"></script>
<script src="https://source.zoom.us/1.7.6/lib/vendor/redux.min.js"></script>
<script src="https://source.zoom.us/1.7.6/lib/vendor/redux-thunk.min.js"></script>
<script src="https://source.zoom.us/1.7.6/lib/vendor/jquery.min.js"></script>
<script src="https://source.zoom.us/1.7.6/lib/vendor/lodash.min.js"></script>
<script src="https://source.zoom.us/zoom-meeting-1.7.6.min.js"></script>
<script src="<?= base_url('public/class/') ?>js/tool.js"></script>
<script src="<?= base_url('public/class/') ?>js/index.js"></script>
<script src="<?= base_url('public/') ?>js/script.js"></script>
</body>
</html>
