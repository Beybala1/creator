$(function () {
    $(document).on("click", `[data-role="configurations"]`, function (e) {
        $.ajax({
            url: `/admin/configurations/update`,
            type: "PUT",
            success: function (d) {
                console.log("alert");
            },
            error: function (d) {
                console.error(d);
            },
            complete: function () {
                //
            }
        });
    });
});
