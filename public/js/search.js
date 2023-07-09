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

    $("#searchSubmit").on("click", function (event) {
        event.preventDefault();
        let $this = $(this),
            roomscount = parseInt($("#roomsCount").val()),
            children = $("#childrenInput1").val(),
            childinput = "",
            childAges = $("#childrenAges").val();
        if (roomscount === 0) {
            $("#numberOfRoomsModal").modal("toggle");
        } else {
            if (childAges == "") {
                if (children > 0) {
                    $("#childrenSearchModal").modal("toggle");
                    console.log("here");
                    for (let i = 0; i < children; i++) {
                        childinput +=
                            "<div class='row'><div class='col-md-6'><label>Child " +
                            i +
                            " Age</label></div><div class='col-md-6'><input class='form-control' type='number' name='childAge" +
                            i +
                            "'></div></div>";
                    }
                    $("#childrenAgeSection").html(childinput);
                }
            } else {
                $("#searchPlacesForm").submit();
            }
        }
    });

    $("#numberOfRooms").on("change", function () {
        let roomscount = parseInt($(this).val());
        if (roomscount > 0) {
            $("#roomsCount").val(roomscount);
        }
    });

    $("#roomsCountAction").on("click", function (event) {
        let roomscount = parseInt($("#numberOfRooms").val()),
            children = parseInt($("#childrenInput1").val()),
            childinput = "";
        if (roomscount > 0) {
            $("#roomsCount").val(roomscount);
            $("#numberOfRoomsModal").modal("hide");
            if (children > 0) {
                for (let i = 1; i <= children; i++) {
                    childinput +=
                        "<div class='row'><div class='col-md-6'><label>Child " +
                        i +
                        " Age</label></div><div class='col-md-6'><input class='form-control childages' type='number' name='childAge" +
                        i +
                        "' required></div></div>";
                }
                $("#childrenAgeSection").html(childinput);
                $("#childrenSearchModal").modal("toggle");
            } else {
                // $("#searchSubmit").off("submit");
                $("#searchPlacesForm").submit();
            }
        } else {
            // $("#searchSubmit").off("submit");
            $("#searchPlacesForm").submit();
        }
    });

    $("#childrenAgesAdd").on("click", function (event) {
        let children = [];
        $(".childages").each(function (key, input) {
            children.push($(input).val());
        });
        $("#childrenAges").val(children);
        // $("#searchSubmit").off("submit");
        $("#searchPlacesForm").submit();
        console.log(children);
        // console.log($("#childrenAges").val());;
    });
})();
