import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

//Modules
import errors from './modules/utils/errors'
import categories from './modules/categories'
import brands from './modules/brands'
import sizes from './modules/sizes'
import products from './modules/products'
import stocks from './modules/stocks'
import return_products from './modules/return_products'
import sold_products from './modules/sold_products'
import mobile_return_products from './modules/mobilereturn_products'
import mobile_sold_products from './modules/mobilesold_products'
import mobile_requests from './modules/mobile_requests'
import cityhall_return_products from './modules/cityhallreturn_products'
import cityhall_sold_products from './modules/cityhallsold_products'
import cityhall_requests from './modules/cityhall_requests'

export default new Vuex.Store({
    modules: {
        errors,
        categories,
        brands,
        sizes,
        products,
        stocks,
        return_products,
        sold_products,
        mobile_return_products,
        mobile_sold_products,
        mobile_requests,
        cityhall_return_products,
        cityhall_sold_products,
        cityhall_requests
    }
})
