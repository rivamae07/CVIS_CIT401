import * as actions from '../../action-types'
import * as mutations from '../../mutation-types'
import Axios from 'axios'
import { error } from 'jquery'

export default {
    [actions.CITYHALL_SUBMIT_REQUEST]({ commit }, payload){
        Axios.post('/cityhall/requests', payload)
            .then(res=>{
               if(res.data.success == true){
                    // commit(mutations.SET_STOCKS, res.data.data)
                    window.location.href = '/cityhall/requests'
               }
            })
            .catch(err=>{
                // console.log(err.response.data.errors)
                commit(mutations.SET_ERRORS, err.response.data.errors)
            })

            }
        }
