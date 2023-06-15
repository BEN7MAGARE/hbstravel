(function () {

    function showSuccess(message, target) {
        iziToast.success({
            title: "OK",
            message: message,
            position: "center",
            timeout: 7000,
            target: target,
        });
    }

    function showError(message, target) {
        iziToast.error({
            title: "Error",
            message: message,
            position: "center",
            timeout: 7000,
            target: target,
        });
    }
    function getCountries() {
        $.getJSON("/countries", function (countries) {
            let option = '<option value="">Select One</option>';
            $.each(countries, function (key, value) {
                option +=
                    "<option value='" +
                    value.iso +
                    "'>" +
                    value.name +
                    "</option>";
            });
            $("#country_code").html(option);
            $(".chzn-select").select2({ allowClear: true });
        });
    }

    getCountries();

    // function destinations() {
    //     $.getJSON("/destinations", function (destinations) {
    //         console.log(destinations);
    //     });
    // }

    // destinations();

    $("#country_code").on("change", function (params) {
        let country_id = $(this).val();
        console.log(country_id);
        $.getJSON("/destinations/" + country_id, function (destinations) {
            let option = "<option value=''>Select One</option>";
            $.each(destinations, function (key, value) {
                option +=
                    "<option value='" +
                    value.id +
                    "'>" +
                    value.name +
                    "</option>";
            });
            $("#destination_code").html(option);
        });
    });
    $(".chzn-select").select2({ allowClear: true });

    function categories() {
        $.getJSON("/categories", function (categories) {
            let option = "<option value=''>Select One</option>";
            $.each(categories, function (key, value) {
                option +=
                    "<option value='" +
                    value.code +
                    "'>" +
                    value.description +
                    "</option>";
            });
            $("#category_code").html(option);
        });
    }
    categories();

    function getChains() {
        $.getJSON("/chains", function (chains) {
            let option = "<option value=''>Select One</option>";
            $.each(chains, function (key, value) {
                option +=
                    "<option value='" +
                    value.code +
                    "'>" +
                    value.description +
                    "</option>";
            });
            $("#chain_code").html(option);
        });
    }
    getChains();

    function getAccommodations() {
        $.getJSON("/accommodations", function (accommodations) {
            let option = "<option value=''>Select One</option>";
            $.each(accommodations, function (key, value) {
                option +=
                    "<option value='" +
                    value.code +
                    "'>" +
                    value.typeDescription +
                    "</option>";
            });
            $("#accommodation_type_code").html(option);
        });
    }
    getAccommodations();


    function getCurrencies() {
        $.getJSON("/currencies", function (currencies) {
            console.log(currencies);
            let option = "<option value=''>Select One</option>";
            $.each(currencies, function (key, value) {
                option +=
                    "<option value='" +
                    value.code +
                    "'>" +
                    value.code +" - "+ value.description +
                    "</option>";
            });
            $("#currency").html(option);
        });
    }
    getCurrencies();
    $(".chzn-select").select2({ allowClear: true });

    $("#hotelCreateForm").on('submit', function(event) {
        event.preventDefault();
        let name = $('#name').val(),
            description = $('#description').val(),
            country_code = $('#country_code').val(),
            destination_code = $('#destination_code').val(),
            category_code = $('#category_code').val(),
            zone_code = $('#zone_code').val(),
            longitude = $('#longitude').val(),
            latitude = $('#latitude').val(),
            chain_code = $('#chain_code').val(),
            accommodation_type_code = $('#accommodation_type_code').val(),
            licence = $('#licence').val(),
            ranking = $('#ranking').val(),
            roomscount = $('#roomsCount').val(),
            currency = $('#currency').val(),
            unit_price = $('#unitPrice').val(),
            phone = $('#phone').val(),
            email = $('#email').val(),
            postal_address = $('#postal_address').val(),
            website = $('#website').val(), $this = $(this);
        let data = {
            name:name,
            description:description,
            country_code:country_code,
            destination_code:destination_code,
            category_code:category_code,
            zone_code:zone_code,
            longitude:longitude,
            latitude:latitude,
            chain_code:chain_code,
            accommodation_type_code:accommodation_type_code,
            licence:licence,
            ranking:ranking,
            roomscount:roomscount,
            currency:currency,
            unit_price:unit_price,
            phone:phone,
            email:email,
            postal_address:postal_address,
            website:website,
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $this.find("input[name='_token']").val(),
            }
        });
        $.ajax({
            method: "POST",
            url: "/hotels",
            data: data,
            success: function(params) {
                console.log(params);
                let result = JSON.parse(params);
                if (result.status == "success") {
                    showSuccess(result.message, "#hotelfeedback");
                    $this.trigger('reset');
                } else {
                    showError(result.error, "#c");
                }
                $this.find("button[type='submit']").prop({ disabled: false });
            },
            error: function(error) {
                console.log(error);
                if (error.status == 422) {
                    var errors = "";
                    $.each(error.responseJSON.errors, function (key, value) {
                        errors += value + "!";
                    });
                    showError(errors, "#hotelfeedback");
                } else {
                    showError(
                        "Error occurred during processing",
                        "#hotelfeedback"
                    );
                }
                $this.find("button[type='submit']").prop({ disabled: false });
            }
        })
    });
})();
