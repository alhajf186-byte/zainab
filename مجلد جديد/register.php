<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>مؤسسة الإتقان - التسجيل</title>
<link rel="stylesheet" href="style.css">
<script src="script.js" defer></script>
</head>
<body>

<header class="hero">
<h1>التسجيل</h1>
<p>قم بتسجيل بياناتك لتستفيد من خدماتنا الرقمية</p>
</header>

<nav class="navbar">
<a href="index.html">الرئيسية</a>
<a href="services.html">الخدمات</a>
<a href="register.html">التسجيل</a>
<a href="contact.html">تواصل معنا</a>
<a href="admin.html">لوحة التحكم</a>
</nav>

<section class="section form-section gray">
<form action="register_submit.php" method="POST" onsubmit="return validateForm()">
<input type="text" name="name" placeholder="الاسم الكامل" required>
<input type="email" name="email" placeholder="البريد الإلكتروني" required>
<input type="date" name="dob" placeholder="تاريخ الميلاد" required>
<select name="course" required>
<option value="">اختر الخدمة</option>
<option value="حجز مواعيد">حجز مواعيد</option>
<option value="سجلات طبية">سجلات طبية</option>
<option value="استشارات عن بعد">استشارات عن بعد</option>
</select>
<button type="submit">تسجيل</button>
</form>
</section>

<footer>
<p>© 2025 مؤسسة الإتقان للرعاية الصحية الرقمية</p>
</footer>

</body>
</html>
