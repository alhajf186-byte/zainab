<?php
$conn = mysqli_connect("localhost","root","","itqan_health");
if(!$conn) die("فشل الاتصال بقاعدة البيانات");

$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$course = $_POST['course'];

$sql = "INSERT INTO patients (name,email,dob,course) VALUES ('$name','$email','$dob','$course')";

if(mysqli_query($conn,$sql)){
    echo "<h2>✅ تم تسجيلك بنجاح</h2><a href='index.php'>العودة للرئيسية</a>";
}else{
    echo "<h2>❌ حدث خطأ</h2>";
}
?>



<?php
$conn = mysqli_connect("localhost","root","","itqan_health");
if(!$conn) die("فشل الاتصال بقاعدة البيانات");

$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$service = $_POST['service'];

$sql = "INSERT INTO appointments (name,email,date,service) VALUES ('$name','$email','$date','$service')";

if(mysqli_query($conn,$sql)){
    echo "<h2>✅ تم حجز الموعد بنجاح</h2><a href='index.php'>العودة للرئيسية</a>";
}else{
    echo "<h2>❌ حدث خطأ</h2>";
}
?>



<?php
$conn = mysqli_connect("localhost","root","","itqan_health");
if(!$conn) die("فشل الاتصال بقاعدة البيانات");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (name,email,message) VALUES ('$name','$email','$message')";

if(mysqli_query($conn,$sql)){
    echo "<h2>✅ تم إرسال رسالتك بنجاح</h2><a href='index.php'>العودة للرئيسية</a>";
}else{
    echo "<h2>❌ حدث خطأ</h2>";
}
?>
