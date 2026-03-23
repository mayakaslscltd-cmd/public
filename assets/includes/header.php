<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="飛行方式設計・GIS・データ解析・マイクロステーション自動描画・自動判定ツール">
    <title>株式会社エスエルエスクリエーション</title>
    <!-- ファビコン設定 -->
    <link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="is-locked"> <!-- 初期状態でロック -->

    <!-- ローディング画面 -->
    <div id="loading-screen">
        <div class="loading-content">
            <div class="logo-wrapper">
                <img src="assets/images/logo.webp" alt="SLSCREATION" id="loading-logo">
            </div>
            <div class="loading-number">
                <span id="loading-percent">0</span><span class="unit">%</span>
            </div>
            <div class="loading-bar-container">
                <div id="loading-bar"></div>
            </div>
            <div class="loading-text">LOADING</div>
        </div>
    </div>

    <!-- ヘッダー（高さ80px固定・透過率80%） -->
    <header id="main-header">
        <div class="header-inner">
            <div class="logo-area">
                <a href="index.php">
                    <img src="assets/images/logostyle.webp" alt="SLSCREATION" class="header-logo-img">
                </a>
            </div>
            
            <button class="hamburger" id="js-hamburger">
                <img src="assets/images/open.svg" alt="メニューを開く" class="nav-icon-open">
                <img src="assets/images/close.svg" alt="メニューを閉じる" class="nav-icon-close">
            </button>

            <nav class="nav-menu" id="js-nav">
                <ul>
                     <li><a href="company-profile.php">会社概要</a></li>
                     <li><a href="business-contents.php">事業内容</a></li>
                     <li><a href="recruit.php">採用情報</a></li>
                     <li><a href="contact.php" class="btn-nav">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
    </header>