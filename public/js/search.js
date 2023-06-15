(function () {

    $("#searchparam").on("keyup", function () {
        var word = this.value.replace(/\W/g, "");
        if (word.length > 0) {
            let token = $("#searchPlacesForm")
                .find("input[name='_token']")
                .val();
            $.post("/filter", { _token: token, term: word }, function (params) {
                let result = JSON.parse(params);
                console.log(result);
                if (result.length) {
                    let option = "";
                    $.each(result, function (key, country) {
                        $.each(result, function (key, value) {
                            option +=
                                "<option value=" +
                                value.id +
                                ">" +
                                value.name +
                                " , " +
                                value.city +
                                " , " +
                                country.name +
                                "</option>";
                        });
                    });
                    $("#searchList").html(option);
                }
            });
        }
    });
})();
