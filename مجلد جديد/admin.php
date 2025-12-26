<?php
$conn = mysqli_connect("localhost","root","","itqan_health");
if(!$conn) die("فشل الاتصال");
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>لوحة التحكم - Admin</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header class="hero">
<h1>لوحة التحكم</h1>
</header>

<section class="section gray">
<h2>إدارة المرضى</h2>
<ul>
<li>حجز مواعيد</li>
<li>سجلات طبية</li>
<li>استشارات عن بعد</li>
</ul>

<h2>حجوزات المرضى</h2>
<table border="1" cellpadding="10">
<tr>
<th>الاسم</th>
<th>البريد الإلكتروني</th>
<th>الخدمة</th>
<th>التاريخ</th>
</tr>
<?php
$res = mysqli_query($conn,"SELECT * FROM appointments");
while($row = mysqli_fetch_assoc($res)){
echo "<tr>
<td>{$row['name']}</td>
<td>{$row['email']}</td>
<td>{$row['service']}</td>
<td>{$row['date']}</td>
</tr>";
}
?>
</table>
</section>

<footer>
<p>© 2025 مؤسسة الإتقان للرعاية الصحية الرقمية</p>
</footer>

</body>
</html>
