const Pharmacy = {
    counter: 0,
};

Pharmacy.cart = function (payload) {

    $.ajax({
            url: '/ajax/cart',
            method: 'POST',
            data: payload
        })
        .done(function (response) {

            // console.log(response)
            if (response.length < 1) {
                alert("Error Occured while processing information, click ok to refresh the browser");
                return window.location.reload();
            }
            window.location = "/shopping-cart";

        }).fail(function (err) {

        })
};
