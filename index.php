<?php include('assets/includes/header.php'); ?>

<main>
    <!-- メインビジュアル：画像100%可変 ＆ タイピング演出 -->
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
                    <div id="typing-en" class="en-title">Step to the Limit,Shape the future.</div>
                </h2>
            </div>

            <!-- スクロール案内（11秒後に表示） -->
            <div class="scroll-guide" id="js-scroll-guide">
                <span class="scroll-text">SCROLL</span>
                <div class="scroll-arrow"></div>
            </div>
        </div>
    </div>
    
    <!-- ここから下のコンテンツを追加できます -->
    <div class="content-spacer" style="height: 100vh; background: #fff;">
        <!-- 例：ここにニュースや会社紹介の続きなど -->
    </div>
</main>

<?php include('assets/includes/footer.php'); ?>