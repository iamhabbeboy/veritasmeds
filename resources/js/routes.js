import Home from "./pages/Home";
import AddProduct from "./pages/AddProduct";
import ProductList from "./pages/ProductList";
import SingleProduct from "./pages/SingleProduct";
import Category from "./pages/Category";

const routes = [
    { path: "/panel/home", component: Home, name: "Home" },
    {
        path: "/panel/add-product/:id?",
        component: AddProduct,
        name: "AddProduct"
    },
    { path: "/panel/product", component: ProductList, name: "ProductList" },
    {
        path: "/panel/single-product",
        component: SingleProduct,
        name: "SingleProduct"
    },
    { path: "/panel/category", component: Category, name: "Category" },
    { path: "*", redirect: "/panel/home" }
];

export default routes;
