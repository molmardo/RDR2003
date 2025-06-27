<style>
    .cookie-notice {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.9);
        color: white;
        padding: 15px;
        z-index: 9999;
        font-family: sans-serif;
    }

    .cookie-notice-inner {
        max-width: 1200px;
        margin: 0 auto;
    }

    .cookie-notice-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        flex-wrap: nowrap;
    }

    .cookie-text {
        margin: 0;
        font-size: 14px;
        flex: 1;
    }

    .cookie-policy-link {
        color: var(--main);
        text-decoration: none;
    }

    .cookie-policy-link:hover {
        color: var(--main);
        text-decoration: underline;
    }

    .cookie-accept-btn {
        background-color: var(--main);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s;
        white-space: nowrap;
    }

    .cookie-accept-btn:hover {
        background-color: var(--main-hover);
    }

    @media (max-width: 768px) {
        .cookie-notice-content {
            flex-direction: column;
            align-items: flex-start;
        }

        .cookie-accept-btn {
            margin-top: 10px;
        }
    }
</style>


<div id="cookie-notice" class="cookie-notice" style="display: none;">
    <div class="cookie-notice-inner">
        <div class="cookie-notice-content">
            <p class="cookie-text">
                <?= $lang['cookie']['info'] ?>
                <a href="<?= navLink('') ?>" class="cookie-policy-link"><?= $lang['cookie']['link'] ?></a>
                <?= $lang['cookie']['info-end'] ?>
            </p>
            <button id="accept-cookies" class="cookie-accept-btn">
                <?= $lang['cookie']['button'] ?>
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const notice = document.getElementById('cookie-notice');
        const acceptBtn = document.getElementById('accept-cookies');
        if (!localStorage.getItem('cookiesAccepted')) {
            notice.style.display = 'block';
        }
        acceptBtn.addEventListener('click', function() {
            localStorage.setItem('cookiesAccepted', 'true');
            notice.style.display = 'none';
        });
    });
</script>