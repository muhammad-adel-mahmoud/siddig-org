<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>نموذج صفحة رئيسية</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

<!-- Top Bar -->
<div class="topbar">
    <div class="container topbar__inner">
        <div class="topbar__left">
            <a href="#" class="topbar__link">English</a>
        </div>

        <div class="topbar__right">
            <span class="topbar__meta">+000 000000000</span>
            <span class="topbar__sep">|</span>
            <a class="icon-link" href="#" aria-label="Instagram">IG</a>
            <a class="icon-link" href="#" aria-label="YouTube">YT</a>
            <a class="icon-link" href="#" aria-label="X">X</a>
            <a class="icon-link" href="#" aria-label="Facebook">FB</a>
            <a class="icon-link" href="#" aria-label="Snapchat">SC</a>
        </div>
    </div>
</div>

<!-- Header + Nav -->
<header class="header">
    <div class="container header__inner">
        <a class="brand" href="/">
            <div class="brand__logo" aria-hidden="true"></div>
            <div class="brand__text">
                <div class="brand__title">اسم الجهة</div>
                <div class="brand__subtitle">وصف مختصر</div>
            </div>
        </a>

        <button class="nav-toggle" aria-controls="mainNav" aria-expanded="false">☰</button>
    </div>

    <nav id="mainNav" class="nav" aria-label="Main menu">
        <div class="container">
            <ul class="nav__menu">
                <li class="has-children">
                    <a href="#">عن الجهة</a>
                    <ul class="nav__submenu">
                        <li><a href="#">التأسيس</a></li>
                        <li><a href="#">المشرف العام</a></li>
                        <li><a href="#">الهيكل التنظيمي</a></li>
                        <li><a href="#">قواعد السلوك</a></li>
                        <li><a href="#">من نحن</a></li>
                        <li><a href="#">أين نعمل</a></li>
                        <li><a href="#">الجوائز والشهادات</a></li>
                        <li class="sep"></li>
                        <li><a href="#">إحصائيات المشاريع والبرامج</a></li>
                        <li><a href="#">البرامج الإنسانية النوعية</a></li>
                        <li><a href="#">مكتبة الملفات والتقارير</a></li>
                    </ul>
                </li>

                <li class="has-children">
                    <a href="#">المركز الإعلامي</a>
                    <ul class="nav__submenu">
                        <li><a href="#">الأخبار</a></li>
                        <li><a href="#">قصص إنسانية</a></li>
                        <li><a href="#">من الميدان</a></li>
                        <li><a href="#">قالوا عنا</a></li>
                        <li><a href="#">المؤتمرات والفعاليات</a></li>
                        <li><a href="#">النشرة الشهرية</a></li>
                        <li><a href="#">معرض الصور والفيديو</a></li>
                    </ul>
                </li>

                <li class="has-children">
                    <a href="#">الفرص</a>
                    <ul class="nav__submenu">
                        <li><a href="#">فرص التطوع</a></li>
                        <li><a href="#">فرص التبرع</a></li>
                    </ul>
                </li>

                <li><a href="#">الخدمات الإلكترونية</a></li>
                <li><a class="pill" href="#">تطوع معنا</a></li>
                <li><a class="pill pill--accent" href="#">تبرع الآن</a></li>
                <li><a href="#">اتصل بنا</a></li>
            </ul>
        </div>
    </nav>
</header>

<main>

    <!-- Hero -->
    <section class="hero">
        <div class="container hero__inner">
            <div class="hero__copy">
                <h1>عنوان رئيسي كبير</h1>
                <p>هذا نص تعريفي قصير (Placeholder) — سنقوم لاحقًا بتغييره.</p>
            </div>

            <div class="hero__quick">
                <a class="quickcard" href="#">
                    <div class="quickcard__title">التأسيس</div>
                    <div class="quickcard__text">نص قصير عن التأسيس (Placeholder).</div>
                </a>
                <a class="quickcard" href="#">
                    <div class="quickcard__title">رؤيتنا</div>
                    <div class="quickcard__text">نص قصير عن الرؤية (Placeholder).</div>
                </a>
                <a class="quickcard" href="#">
                    <div class="quickcard__title">رسالتنا</div>
                    <div class="quickcard__text">نص قصير عن الرسالة (Placeholder).</div>
                </a>
                <a class="quickcard" href="#">
                    <div class="quickcard__title">المشرف العام</div>
                    <div class="quickcard__text">اسم/وصف (Placeholder).</div>
                </a>
            </div>
        </div>
    </section>

    <!-- From the Field -->
    <section class="section">
        <div class="container grid grid--2">
            <article class="card">
                <div class="card__kicker">من الميدان</div>
                <h2 class="card__title">اسم الكاتب - اسم الموقع</h2>
                <p class="card__text">
                    أثناء عملي ... (Placeholder) نص قصة قصيرة من الميدان. يمكن أن تكون فقرة واحدة أو أكثر.
                </p>
                <a class="link" href="#">اقرأ المزيد</a>
            </article>

            <div class="media">
                <div class="media__img" aria-label="صورة من الميدان"></div>
            </div>
        </div>
    </section>

    <!-- Latest News -->
    <section class="section section--alt">
        <div class="container">
            <div class="section__head">
                <h2>آخر الأخبار</h2>
                <a class="link" href="#">جميع الأخبار</a>
            </div>

            <div class="news">
                <article class="news__item">
                    <div class="news__img" aria-hidden="true"></div>
                    <div class="news__body">
                        <div class="news__meta">2026/02/24</div>
                        <h3 class="news__title">عنوان خبر (Placeholder)</h3>
                        <p class="news__text">مقتطف خبر (Placeholder) ...</p>
                        <a class="link" href="#">اقرأ المزيد</a>
                    </div>
                </article>

                <article class="news__item">
                    <div class="news__img" aria-hidden="true"></div>
                    <div class="news__body">
                        <div class="news__meta">2026/02/24</div>
                        <h3 class="news__title">عنوان خبر (Placeholder)</h3>
                        <p class="news__text">مقتطف خبر (Placeholder) ...</p>
                        <a class="link" href="#">اقرأ المزيد</a>
                    </div>
                </article>

                <article class="news__item">
                    <div class="news__img" aria-hidden="true"></div>
                    <div class="news__body">
                        <div class="news__meta">2026/02/24</div>
                        <h3 class="news__title">عنوان خبر (Placeholder)</h3>
                        <p class="news__text">مقتطف خبر (Placeholder) ...</p>
                        <a class="link" href="#">اقرأ المزيد</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Social Feed Placeholder -->
    <section class="section">
        <div class="container">
            <div class="social">
                <div class="social__badge">@Account -</div>
                <div class="social__grid">
                    <div class="social__tile"></div>
                    <div class="social__tile"></div>
                    <div class="social__tile"></div>
                    <div class="social__tile"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feedback Widget -->
    <section class="section section--alt">
        <div class="container">
            <div class="feedback card">
                <h2 class="card__title">هل استفدت من هذه الصفحة؟</h2>
                <div class="feedback__actions">
                    <button class="btn" data-feedback="yes">نعم</button>
                    <button class="btn btn--ghost" data-feedback="no">لا</button>
                </div>

                <div class="feedback__panel" id="feedbackPanel" hidden>
                    <p class="muted">أضف السبب (Placeholder):</p>
                    <label class="check"><input type="checkbox" /> وجدت الصفحة مفيدة وواضحة</label>
                    <label class="check"><input type="checkbox" /> تمكنت من الوصول للمعلومات بسهولة</label>
                    <label class="check"><input type="checkbox" /> واجهتني مشكلة تقنية</label>
                    <label class="check"><input type="checkbox" /> سبب آخر</label>

                    <div class="feedback__send">
                        <button class="btn">إرسال التعليق</button>
                        <button class="btn btn--ghost" id="feedbackCancel">إلغاء</button>
                    </div>
                </div>

                <div class="feedback__thanks" id="feedbackThanks" hidden>شكراً على تقييمك</div>
            </div>
        </div>
    </section>

</main>

<!-- Footer -->
<footer class="footer">
    <div class="container footer__top">
        <div class="footer__brand">
            <div class="footer__logo" aria-hidden="true"></div>
            <p class="footer__desc">
                نص وصفي مختصر (Placeholder) عن الجهة وأثرها.
            </p>

            <div class="subscribe">
                <input type="email" placeholder="البريد الإلكتروني" />
                <button class="btn btn--light">اشترك</button>
            </div>
        </div>

        <div class="footer__cols">
            <div class="footer__col">
                <h3>مواقعنا</h3>
                <a href="#">قم بزيارة مواقعنا</a>
            </div>

            <div class="footer__col">
                <h3>طرق الدفع</h3>
                <div class="payments">
                    <span class="pay">MADA</span>
                    <span class="pay">APPLE</span>
                    <span class="pay">VISA</span>
                    <span class="pay">MC</span>
                </div>
                <a href="#">الرسائل النصية</a><br/>
                <a href="#">التحويل البنكي</a>
            </div>

            <div class="footer__col">
                <h3>روابط مهمة</h3>
                <a href="#">الخدمات الإلكترونية</a><br/>
                <a href="#">التوظيف</a><br/>
                <a href="#">المشاركة المجتمعية</a><br/>
                <a href="#">البيانات المفتوحة</a>
            </div>

            <div class="footer__col">
                <h3>اتصل بنا</h3>
                <div class="muted">العنوان (Placeholder)</div>
                <div class="muted">الهاتف: 000000000</div>
                <div class="muted">الفاكس: 000000000</div>
                <div class="muted">البريد الإلكتروني: example@email.com</div>
            </div>
        </div>
    </div>

    <div class="container footer__bottom">
        <div class="muted">جميع الحقوق محفوظة © 2026</div>
        <div class="footer__links">
            <a href="#">خريطة الموقع</a>
            <span class="muted">|</span>
            <a href="#">سياسات الخصوصية</a>
            <span class="muted">|</span>
            <a href="#">سياسات الموقع</a>
        </div>
    </div>
</footer>

<!-- Cookie Banner -->
<div class="cookie" id="cookieBanner">
    <div class="container cookie__inner">
        <div>
            <strong>ملفات تعريف الارتباط</strong>
            <div class="muted">هذا الموقع يستخدم ملفات تعريف الارتباط لضمان تحسين تجربتك أثناء التصفح. (Placeholder)</div>
        </div>
        <div class="cookie__actions">
            <button class="btn" id="cookieAccept">قبول</button>
            <button class="btn btn--ghost" id="cookieReject">رفض</button>
        </div>
    </div>
</div>

<script src="assets/js/main.js"></script>
</body>
</html>