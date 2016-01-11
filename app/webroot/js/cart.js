$(document).on('ready', function () {
    $("#addCart").on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            url: "http://" + document.location.host + "/users/add_cart",
            type: "POST",
            success: function (result) {
                console.log(result);
            }
        });
    });
});