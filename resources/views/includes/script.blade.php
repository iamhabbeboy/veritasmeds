<script src="/pharm-script.js"></script>
<script>
$(function() {
    $('#add-cart').on('click', function(e) {
        const qty = $('#quantity-count').val();
        const cartInfo = $('#cart-info').val();
        const token = $('#_token').val();

        if (qty != '' && cartInfo != '') {
            const payload = { cart: cartInfo, qty: qty, _token: token};
            Pharmacy.cart(payload);
        }
   });
});
 
</script>