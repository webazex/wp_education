$("#form-sm1").submit(function() {
    return $.ajax({
        type: "POST",
        url: "form-sm1.php",
        data: $(this).serialize()
    }).done(function() {
		window.location.href = "https://pl-education.com.ua/thanks.html";
        //toastr.success("Дякуємо за ваше повідомлення. \n Ми звя\'яжемося з вами як тільки це буде можливо!"), $("#form-sm1").get(0).reset()
    }), !1
}), $("#form-sm2").submit(function() {
    return $.ajax({
        type: "POST",
        url: "form-sm2.php",
        data: $(this).serialize()
    }).done(function() {
		window.location.href = "https://pl-education.com.ua/thanks.html";
        //toastr.success("Дякуємо за ваше повідомлення. \n Ми звя\'яжемося з вами як тільки це буде можливо!"), $("#form-sm2").get(0).reset()
    }), !1
});