export default {
    SET_CATEGORY(state, category) {
        state.categories = category;
    },
    SET_BRAND(state, brand) {
        state.brands = brand;
    },
    ADD_BRAND(state, brand) {
        state.brands.push(brand);
    },
    ADD_CATEGORY(state, category) {
        state.categories.push(category);
    },
    ADD_PRODUCT(state, product) {
        state.products.push(product);
    },
    SET_PRODUCT(state, product) {
        state.products = product;
    },
    UPDATE_PRODUCT(state, product) {
        state.products.filter(_product => {
            if (_product.id === product.id) {
                _product.category_id = product.category_id;
                _product.brand_id = prdocut.brand_id;
                _product.title = product.title;
                _product.description = product.description;
                _product.price = product.price;
                _product.quantity = product.quantity;
                _product.product_status = product.product_status;
            }
        })
    }

}
