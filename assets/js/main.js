// 必ず最上部固定
window.onbeforeunload = function () { window.scrollTo(0, 0); };

document.addEventListener('DOMContentLoaded', () => {
    const isVisited = sessionStorage.getItem('visited');
    const loader = document.getElementById('loading-screen');
    const bg = document.querySelector('.bg');
    const guide = document.getElementById('js-scroll-guide');

    // --- A. スクロール禁止/解除ロジック ---
    function preventDefault(e) { e.preventDefault(); }
    function lockScroll() {
        window.addEventListener('wheel', preventDefault, { passive: false });
        window.addEventListener('touchmove', preventDefault, { passive: false });
        window.addEventListener('keydown', function(e) {
            const keys = ['ArrowUp','ArrowDown','Space','PageUp','PageDown','Home','End'];
            if (keys.includes(e.code)) preventDefault(e);
        }, { passive: false });
    }
    function unlockScroll() {
        window.removeEventListener('wheel', preventDefault);
        window.removeEventListener('touchmove', preventDefault);
        document.body.classList.add('is-unlocked');
        document.documentElement.classList.add('is-unlocked');
    }

    // --- B. タイピング設定関数 ---
    function setupTyping(id, baseDelay, totalDuration, skip = false) {
        const el = document.getElementById(id);
        if (!el) return;
        const text = el.textContent;
        el.textContent = '';
        const chars = text.split('');
        const charDelay = skip ? 0 : (totalDuration / chars.length);

        chars.forEach((char, index) => {
            const span = document.createElement('span');
            span.textContent = char === ' ' ? '\u00A0' : char;
            span.classList.add('char');
            span.style.transitionDelay = skip ? '0s' : `${baseDelay + (index * charDelay)}s`;
            el.appendChild(span);
        });
    }

    // --- C. 分岐：2回目以降のアクセス ---
    if (isVisited) {
        if (loader) loader.style.display = 'none';
        document.body.classList.add('is-unlocked', 'is-skip');
        document.documentElement.classList.add('is-unlocked');
        if (bg) bg.classList.add('-visible');
        if (guide) guide.classList.add('is-active');
        
        setupTyping('typing-jp1', 0, 0, true);
        setupTyping('typing-jp2', 0, 0, true);
        setupTyping('typing-en', 0, 0, true);

    } else {
        // --- D. 初回アクセスのフルアニメーション ---
        window.scrollTo(0, 0);
        lockScroll();

        // 1. タイピング開始 (ロード3s + 演出1.2s後)
        const typingStart = 4.2; 
        setupTyping('typing-jp1', typingStart, 0.6);
        setupTyping('typing-jp2', typingStart + 0.6, 0.6);
        setupTyping('typing-en', typingStart + 1.2, 0.8);

        // 2. 11秒：ガイド出現
        setTimeout(() => {
            if(guide) guide.classList.add('is-active');
        }, 11000);

        // 3. 12秒：ロック解除
        setTimeout(() => {
            unlockScroll();
            sessionStorage.setItem('visited', 'true');
        }, 12000);

        // 4. ローディング処理
        const percentEl = document.getElementById('loading-percent');
        const barEl = document.getElementById('loading-bar');
        const logoEl = document.getElementById('loading-logo');
        const duration = 3000;
        const startTime = performance.now();

        function updateLoading() {
            const progress = Math.min((performance.now() - startTime) / duration, 1);
            const currentPercent = Math.floor(progress * 100);
            if(percentEl) percentEl.textContent = currentPercent;
            if(barEl) barEl.style.width = currentPercent + '%';

            if (progress < 1) {
                requestAnimationFrame(updateLoading);
            } else {
                if(logoEl) logoEl.classList.add('fade-off');
                setTimeout(() => {
                    if(loader) loader.classList.add('fade-out');
                    window.scrollTo(0, 0); 
                    setTimeout(() => {
                        if(bg) bg.classList.add('-visible');
                    }, 400);
                }, 600);
            }
        }
        requestAnimationFrame(updateLoading);
    }

    // --- E. ハンバーガーメニュー（共通） ---
    const hamburger = document.getElementById('js-hamburger');
    const nav = document.getElementById('js-nav');
    if(hamburger && nav) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            nav.classList.toggle('active');
        });
    }
});