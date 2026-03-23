karadaxtutata<!DOCTYPE html>
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
<body class="is-locked">

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

    <!-- ヘッダー（高さ80px固定・透過80%） -->
    <header id="main-header">
        <div class="header-inner">
            <div class="logo-area">
                <a href="index.html">
                    <img src="assets/images/logostyle.webp" alt="SLSCREATION" class="header-logo-img">
                </a>
            </div>
            
            <button class="hamburger" id="js-hamburger">
                <img src="assets/images/open.svg" alt="メニューを開く" class="nav-icon-open">
                <img src="assets/images/close.svg" alt="メニューを閉じる" class="nav-icon-close">
            </button>

            <nav class="nav-menu" id="js-nav">
                <ul>
                     <li><a href="company-profile.html">会社概要</a></li>
                     <li><a href="business-contents.html">事業内容</a></li>
                     <li><a href="recruit.html">採用情報</a></li>
                     <li><a href="contact.html" class="btn-nav">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- メインビジュアル -->
        <div class="hero-section">
            <div class="bg">
                <div class="bg-overlay"></div> 
                <div class="bg-image-container">
                    <img src="assets/images/akafuji.webp" alt="赤富士" class="responsive-hero-img">
                </div>
                <div class="title-container">
                    <h2 class="title">
                        <div class="jp-title-row">
                            <span id="typing-jp1" class="jp-part">空を繋ぐ、</span>
                            <span id="typing-jp2" class="jp-part">未来を拓く。</span>
                        </div>
                        <div id="typing-en" class="en-title">Creative Company SLSCREATION</div>
                    </h2>
                </div>

                <!-- スクロールガイド（11秒後に表示） -->
                <div class="scroll-guide" id="js-scroll-guide">
                    <span class="scroll-text">SCROLL</span>
                    <div class="scroll-arrow"></div>
                </div>
            </div>
        </div>
        
        <!-- コンテンツエリア（テスト用） -->
        <div class="main-content-placeholder" style="height: 200vh; background: #fff;">
            <!-- ここに実際のコンテンツが入ります -->
        </div>
    </main>

    <footer>
        <div class="container">
            <p class="footer-logo">株式会社エスエルエスクリエーション</p>
            <p class="copyright">&copy;SLSCREATION All Rights Reserved.</p>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>