<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>مؤسسة الإتقان - تواصل معنا</title>
<link rel="stylesheet" href="style.css">
<script src="script.js" defer></script>
</head>
<body>

<header class="hero">
<h1>تواصل معنا</h1>
<p>نحن هنا لدعمك والإجابة على استفساراتك</p>
</header>

<nav class="navbar">
<a href="index.html">الرئيسية</a>
<a href="services.html">الخدمات</a>
<a href="register.html">التسجيل</a>
<a href="contact.html">تواصل معنا</a>
<a href="admin.html">لوحة التحكم</a>
</nav>

<section class="section form-section gray">
<form action="contact_submit.php" method="POST" onsubmit="return validateForm()">
<input type="text" name="name" placeholder="الاسم الكامل" required>
<input type="email" name="email" placeholder="البريد الإلكتروني" required>
<textarea name="message" placeholder="رسالتك" required></textarea>
<button type="submit">إرسال</button>
</form>

<div class="cards">
<div class="card">
<h3>البريد الإلكتروني</h3>
<p>zain@itqanhealth.com</p>
</div>
<div class="card">
<h3>الهاتف</h3>
<p>776544730</p>
</div>
<div class="card">
<h3>العنوان</h3>
<p>الحديده ، اليمن</p>
</div>
</div>
</section>

<footer>
<p>© 2025 مؤسسة الإتقان للرعاية الصحية الرقمية</p>
</footer>

</body>
</html>
