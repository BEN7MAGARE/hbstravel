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
                            "<div class='form-group'><label>Child " +
                            i +
                            " Age</label><input class='form-control childages' type='number' name='childAge" +
                            i +
                            "' required></div>";
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
        if (roomscount <= 1) {
            $("#roomsCount").val(roomscount);
            $("#numberOfRoomsModal").modal("hide");
            if (children > 0) {
                for (let i = 1; i <= children; i++) {
                    childinput +=
                        "<div class='form-group'><label>Child " +
                        i +
                        " Age</label><input class='form-control childages' type='number' name='childAge" +
                        i +
                        "' required></div>";
                }
                $("#childrenAgeSection").html(childinput);
                $("#childrenSearchModal").modal("toggle");
            } else {
                // $("#searchSubmit").off("submit");
                $("#searchPlacesForm").submit();
            }
        } else {
            if (children > 0) {
                for (let i = 1; i <= children; i++) {
                    childinput +=
                        "<div class='form-group'><label>Child " +
                        i +
                        " Age</label><input class='form-control childages' type='number' name='childAge" +
                        i +
                        "' required></div>";
                }
                $("#childrenAgeSection").html(childinput);
                $("#childrenSearchModal").modal("toggle");
            } else if (roomscount > 1) {
                $("#numberOfRoomsModal").modal('hide');
                let occusection = ""
                for (let i = 1; i <= roomscount; i++) {
                    occusection +=
                        "<div class='col-md-12'><p><b>Room " +
                        i +
                        "</b></p></div><div class='col-md-6'><div class='form-group'><label>NO of Adults</label><input class='form-control room' type='number' name='no_of_adult" +
                        i +
                        "' required></div></div><div class='col-md-6'><div class='form-group'><label>NO of Children</label><input class='form-control room' type='number' name='no_of_children" +
                        i +
                        "' required></div></div>";
                }
                $("#roomDistributionSection").html(occusection);
                $("#roomDistributionModal").modal("toggle");
            } else {
                $("#searchPlacesForm").submit();
            }
        }
    });

    $("#childrenAgesAdd").on("click", function (event) {
        let children = [];
        $(".childages").each(function (key, input) {
            children.push($(input).val());
        });
        $("#childrenAges").val(children);
        $("#searchPlacesForm").submit();
        console.log(children);
    });

    $("#roomOcuppantsAdd").on('click', function() {
        let roomscount = parseInt($("#numberOfRooms").val()), values = [];
        console.log(roomscount);
        for (let i = 1; i <= roomscount; i++) {
            let adults = $("input[name='no_of_adult" + i + "']").val(), child = $("input[name='no_of_children"+i+"']").val();
            values.push({
                [i]: {
                    adult: adults,
                    child: child,
                }
            });
        }
        console.log(values);
        $("#roomsSpread").val(values);
    });



    // $("#searchSubmit").on("click", function (event) {
    //     event.preventDefault();
    //     let $this = $(this),
    //         roomscount = parseInt($("#roomsCount").val());
    //     if (roomscount === 0) {
    //         $("#numberOfRoomsModal").modal("toggle");
    //     } else {
    //         if (childAges == "") {
    //             if (children > 0) {
    //                 $("#childrenSearchModal").modal("toggle");
    //                 for (let i = 0; i < children; i++) {
    //                     childinput +=
    //                         "<div class='form-group'><label>Child " +
    //                         i +
    //                         " Age</label><input class='form-control childages' type='number' name='childAge" +
    //                         i +
    //                         "' required></div>";
    //                 }
    //                 $("#childrenAgeSection").html(childinput);
    //             }
    //         } else {
    //             $("#searchPlacesForm").submit();
    //         }
    //     }
    // });

})();
