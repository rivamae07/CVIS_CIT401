import * as actions from '../../action-types'
import * as mutations from '../../mutation-types'
import Axios from 'axios'
import { error } from 'jquery'

export default {
    [actions.ADD_PRODUCT]({ commit }, payload){
        Axios.post('/products', payload)
            .then(res=>{
               if(res.data.success == true){
                    // commit(mutations.SET_PRODUCTS, res.data.data)
                    window.location.href = '/products'
               }
            })
            .catch(err=>{
                // console.log(err.response.data.errors)
                commit(mutations.SET_ERRORS, err.response.data.errors)
            })

            },
            // `products`
            [actions.EDIT_PRODUCT]({ commit }, payload){
                Axios.post(`/products/${payload.id}`, payload.data)
                    .then(res=>{
                       if(res.data.success == true){
                            // commit(mutations.SET_CATEGORIES, res.data.data)
                            window.location.href = '/products'
                       }
                    })
                    .catch(err=>{
                        // console.log(err.response.data.errors)
                        commit(mutations.SET_ERRORS, err.response.data.errors)
                    })
        
                    },
                    [actions.GET_PRODUCTS]({ commit }){
                        Axios.get('/api/products')
                            .then(res=>{
                               if(res.data.success == true){
                                   commit(mutations.SET_PRODUCTS, res.data.data)
                
                               }
                            })
                
                            .catch(err=>{
                                console.log(err.response)
                            })
                
                            }
        }
