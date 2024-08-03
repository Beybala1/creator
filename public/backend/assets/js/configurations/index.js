$(function () {
    $(document).on("click", `[data-role="configurations"]`, function (e) {
        let data = {
            "is_header" : $(`[name="is_header"]`).is(':checked') ? '1' : '0',
            "is_slider" : $(`[name="is_slider"]`).is(':checked') ? '1' : '0',
            "is_service" : $(`[name="is_service"]`).is(':checked') ? '1' : '0',
            "is_blog" : $(`[name="is_blog"]`).is(':checked')    ? '1' : '0',
            "is_brand" : $(`[name="is_brand"]`).is(':checked') ? '1' : '0',
            "is_about " : $(`[name="is_about "]`).is(':checked') ? '1' : '0',
            "is_contact_us" : $(`[name="is_contact_us"]`).is(':checked') ? '1' : '0',
            "is_footer" : $(`[name="is_footer"]`).is(':checked') ? '1' : '0',
        }; 

        $.ajax({
            url: `/admin/configurations/update`,
            type: "PUT",
            data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (d) {
                console.log(d);
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
