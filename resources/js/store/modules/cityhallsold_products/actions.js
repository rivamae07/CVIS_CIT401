import * as actions from '../../action-types'
import * as mutations from '../../mutation-types'
import Axios from 'axios'
import { error } from 'jquery'

export default {
    [actions.CITYHALL_SUBMIT_SOLD_PRODUCT]({ commit }, payload){
        Axios.post('/cityhall/dispatched-products', payload)
            .then(res=>{
               if(res.data.success == true){
                    window.location.href = '/cityhall/dispatched-products'
               }
            })
            .catch(err=>{
                commit(mutations.SET_ERRORS, err.response.data.errors)
            })

            }
        }
