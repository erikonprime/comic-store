import Home from '../components/test/Home.vue'
import {createRouter, createWebHistory} from 'vue-router'
import Main from "../components/test/Main";
import ProductsList from "../components/test/ProductsList";
import Product from "../components/test/Product";
import ProductDetails from "../components/ProductDetails";
import MainSection from "../components/MainSection";
import MainProduct from '../components/Products/Main'

export default createRouter({
    history: createWebHistory(),
    routes: [
        {
            name: 'main',
            path: '/',
            component: MainSection
        },
        {
            name: '123',
            path: '/cats',
            component: Product
        },
        {
            name: 'shop',
            path: '/main',
            component: MainProduct
        },
        {
            name: 'productDetails',
            path: '/products/:id',
            component: ProductDetails
        },
    ]
})