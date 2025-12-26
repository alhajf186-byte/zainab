// تحقق من نموذج التسجيل والمراسلة
function validateForm() {
    let name = document.querySelector('input[name="name"]').value.trim();
    let email = document.querySelector('input[name="email"]').value.trim();

    if(name === "" || email === "") {
        alert("يرجى تعبئة جميع الحقول");
        return false;
    }
    return true;
}
