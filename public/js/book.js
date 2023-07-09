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

    let noOfAdults = $("#noOfAdults"),
        noOfChildren = $("#noOfChildren"),
        adultsNameSection = $("#adultsNameSection"),
        childrenNamesSection = $("#childrenNamesSection");
    noOfAdults.on("change", function () {
        let no = $(this).val(),
            div = "";
        adultsNameSection.children().remove();
        if (no > 0) {
            for (let index = 0; index < no; index++) {
                div +=
                    '<div class="row mb-1"><div class="col-md-2"><select name="title" id="userTitle" class="form-control" required><option value="Mr">Mr</option><option value="Mrs">Mrs</option><option value="Ms">Ms</option></select></div><div class="col-md-5"><input type="text" name="firstname" id="firstName" class="form-control" required></div><div class="col-md-5"><input type="text" name="lastname" id="lastName" class="form-control" required></div></div>';
            }
            adultsNameSection.html(div);
        }
    });

    noOfChildren.on("change", function () {
        let child = $(this).val(),
            div = "";
        childrenNamesSection.children().remove();
        if (child > 0) {
            for (let index = 0; index < child; index++) {
                div +=
                    '<div class="row mb-1"><div class="col-md-2"><select name="title" id="userTitle" class="form-control" required><option value="Mr">Mr</option><option value="Mrs">Mrs</option><option value="Ms">Ms</option></select></div><div class="col-md-5"><input type="text" name="firstname" id="firstName" class="form-control" required></div><div class="col-md-5"><input type="text" name="lastname" id="lastName" class="form-control" required></div></div>';
            }
            childrenNamesSection.html(div);
        }
    });

    $("#bookingForm").on("submit", function (event) {
        event.preventDefault();
        let $this = $(this),
            dayrate = $("#dayrate").val(),
            daysprice = $("#daysprice").val(),
            TotalFare = $("#totalfare").val(),
            totaltax = $("#totaltax").val(),
            ExtraGuestCharges = $("#ExtraGuestCharges").val(),
            grandTotal = $("#grandTotal").val(),
            checkIn = $(".checkInVal").val(),
            checkOut = $(".checkOutVal").val(),
            tbocode = $('#TboCode').val(),
            noOfAdults = $("#noOfAdults").val(),
            noOfChildren = $("#noOfChildren").val(),
            adultsNameSection = $("#adultsNameSection"),
            childrenNamesSection = $("#childrenNamesSection"),
            EmailId = $("#emailID").val(),
            PhoneNumber = $("#PhoneNumber").val(),
            CardNumber = $("#CardNumber").val(),
            CvvNumber = $("#CvvNumber").val(),
            CardExpirationMonth = $("#CardExpirationMonth").val(),
            CardExpirationYear = $("#CardExpirationYear").val(),
            CardHolderFirstName = $("#CardHolderFirstName").val(),
            CardHolderlastName = $("#CardHolderlastName").val(),
            BookingCode = $("#BookingCode").val(),
            CardHolderAddress = $("#CardHolderAddress").val(),
            AddressLine1 = $("#AddressLine1").val(),
            AddressLine2 = $("#AddressLine2").val(),
            City = $("#City").val(),
            PostalCode = $("#PostalCode").val(),
            CountryCode = $("#CountryCode").val(),
            BillingCurrency = $("#BillingCurrency").val();
        $this.find("button[type='submit']").prop("disabled", true);
        let CustomerNames = [];

        adultsNameSection.find(".row").each(function (key, row) {
            let Title = $(row).find("#userTitle").val(),
                FirstName = $(row).find("#firstName").val(),
                LastName = $(row).find("#lastName").val();
            let obj = {
                Title: Title,
                FirstName: FirstName,
                LastName: LastName,
                Type: "Adult",
            };
            CustomerNames.push(obj);
        });
        childrenNamesSection.find(".row").each(function (key, row) {
            let Title = $(row).find("#userTitle").val(),
                FirstName = $(row).find("#firstName").val(),
                LastName = $(row).find("#lastName").val();
            let obj = {
                Title: Title,
                FirstName: FirstName,
                LastName: LastName,
                Type: "Child",
            };
            CustomerNames.push(obj);
        });

        let data = {
            BookingCode: BookingCode,
            CustomerDetails: [{ CustomerNames }],
            HotelCode: tbocode,
            TotalFare: TotalFare,
            EmailId: EmailId,
            PhoneNumber: PhoneNumber,
            PaymentInfo: {
                CvvNumber: CvvNumber,
                CardNumber: CardNumber,
                CardExpirationMonth: CardExpirationMonth,
                CardExpirationYear: CardExpirationYear,
                CardHolderFirstName: CardHolderFirstName,
                CardHolderlastName: CardHolderlastName,
                BillingAmount: grandTotal,
                BillingCurrency: BillingCurrency,
                CardHolderAddress: {
                    AddressLine1: AddressLine1,
                    AddressLine2: AddressLine2,
                    City: City,
                    PostalCode: PostalCode,
                    CountryCode: CountryCode,
                },
            },
            DaysRate: dayrate,
            DaysPrice: daysprice,
            TotalTax: totaltax,
            ExtraGuestCharges: ExtraGuestCharges,
            CheckIn: checkIn,
            CheckOut: checkOut,
            NoOfAdults: noOfAdults,
            NoOfChildren: noOfChildren,
        };

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $this.find("input[name='_token']").val(),
            },
        });
        $.ajax({
            method: "POST",
            url: "/bookings",
            data: data,
            success: function (params) {
                $this.find("button[type='submit']").prop("disabled", false);
                console.log(params);
                let result = JSON.parse(params);
                if (result.status == "success") {
                    showSuccess(result.message, "#bookingfeedback");
                    $this.trigger("reset");
                } else {
                    showError(result.error, "#bookingfeedback");
                }
            },
            error: function (error) {
                $this.find("button[type='submit']").prop("disabled", false);
                console.log(error);
                if (error.status == 422) {
                    var errors = "";
                    $.each(error.responseJSON.errors, function (key, value) {
                        errors += value + "!";
                    });
                    showError(errors, "#bookingfeedback");
                } else {
                    showError(
                        "Error occurred during processing",
                        ".bookingfeedback"
                    );
                }
            },
        });
    });
})();
