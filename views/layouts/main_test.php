<?php

/* @var $this \yii\web\View */
/* @var $content string */
use app\assets\AppAsset;

AppAsset::register($this);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Yii2 Angular Tutorial</title>
    <script>paceOptions = {ajax: {trackMethods: ['GET', 'POST']}};</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/red/pace-theme-minimal.css" rel="stylesheet"/>
</head>
<body>
<nav class="navbar-inverse navbar-fixed-top navbar" role="navigation" bs-navbar>
    <div class="container">
        <div class="navbar-header">
            <button ng-init="navCollapsed = true" ng-click="navCollapsed = !navCollapsed" type="button"
                    class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#/">My Company</a>
        </div>
        <div ng-class="!navCollapsed && 'in'" ng-click="navCollapsed=true" class="collapse navbar-collapse">
            <ul class="navbar-nav navbar-right nav">
                <li data-match-route="/$">
                    <a href="#/">Home</a>
                </li>
                <li data-match-route="/about">
                    <a href="#/about">About</a>
                </li>
                <li data-match-route="/contact">
                    <a href="#/contact">Contact</a>
                </li>
                <li data-match-route="/login">
                    <a href="#/login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>