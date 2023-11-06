(function () {
    $("#date-range0").dateRangePicker({
        autoClose: true,
        singleDate: true,
        showShortcuts: false,
        singleMonth: true,
        showTopbar: false,
        extraClass: "reserved-form",
    });

    $("#date-range1").dateRangePicker({
        autoClose: true,
        singleDate: true,
        showShortcuts: false,
        singleMonth: true,
        showTopbar: false,
        extraClass: "reserved-form",
    });

    function getCountries() {
        $.getJSON("/countries", function (countries) {
            let option = '<option value="">Select One</option>';
            $.each(countries, function (key, value) {
                option +=
                    "<option value=" +
                    value.iso +
                    ">" +
                    value.name +
                    "</option>";
            });
            $("#searchcountries").html(option);
            $("#CountryCode").html(option);
        });
    }

    getCountries();

    function getDeafaultSearchOptions() {
        $.getJSON("/default-search-options", function (countries) {
            if (countries.length > 0) {
                let destination = "",
                    city = "";

                $.each(countries, function (key, value) {
                    destination +=
                        '<div class="col-lg-4 col-md-6 col-xs-12 mb-4"><div class="trend-item"><div class="trend-image"><img src="images/trending/trending' +
                        key +
                        '.jpg" alt="image"><div class="trend-tags"><a href="country/' +
                        value.country_code +
                        "/city/" +
                        value.city +
                        '"><i class="flaticon-like"></i></a></div></div><div class="trend-content-main"><div class="trend-content"><h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i>&nbsp;' +
                        value.country +
                        '&nbsp;</h6><h4><a href="city-hotels/' +
                        value.city +
                        '">' +
                        value.city +
                        '</a></h4><div class="rating-main d-flex align-items-center"><span class="ml-2"> ' +
                        value.hotelcount +
                        "&nbsp;&nbsp;Hotels</span></div></div></div></div></div>";
                    city +=
                        '<div class="pretty p-default p-thick p-pulse"><input type="checkbox"><div class="state"><label>' +
                        value.city +
                        '<span class="number">' +
                        value.hotelcount +
                        "</span></label></div></div>";
                });
                $("#topdestinations").html(destination);

                $(".citiesection").html(city);
            }
        });
    }


    // function makeAjaxRequest(url) {
    //     return new Promise((resolve, reject) => {
    //         fetch(url)
    //             .then((response) => {
    //                 if (!response.ok) {
    //                     reject(new Error("Network response was not ok"));
    //                 }
    //                 return response.json();
    //             })
    //             .then((data) => {
    //                 resolve(data);
    //             })
    //             .catch((error) => {
    //                 reject(error);
    //             });
    //     });
    // }

    // makeAjaxRequest("user-country")
    //     .then((data) => {
    //         // $("#bs-example-navbar-collapse-1").append(
    //         //     '<li><a href="#toggleCountryChangeModal"><img src=\'images/countries_flags/' +
    //         //         country.country.toLowerCase() +
    //         //         ".PNG'></a></li>"
    //         // );
    //         console.log(data);
    //     })
    //     .catch((error) => {
    //         console.error(error);
    //     });

    const ajaxRequest = $.ajax({
        url: "/user-country",
        method: "GET",
        // dataType: "json",
    });

    ajaxRequest
        .done(function (data) {
            const startIndex = data.indexOf("{");
            const endIndex = data.lastIndexOf("}") + 1;

            const jsonResponse = data.slice(startIndex, endIndex);
            console.log(jsonResponse);
            let result = JSON.parse(jsonResponse);
            $(".navbar-header").append(
                '<a href="#" data-toggle="modal" data-target="changeCountryModal"><img src=\'images/countries_flags/' +
                    result.iso.toLowerCase() +
                    ".PNG'></a>"
            );
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.error(errorThrown);
            console.error(textStatus);
        });


})();
