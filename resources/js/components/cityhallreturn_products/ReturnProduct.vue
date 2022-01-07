<template>
<form role="form" method="post" @submit.prevent="submitForm">
<div class="row">
<show-error></show-error>
<div class="col-sm-6">
    <div class="card card-primary card-outline">
    <div class="card-body">
      <h5 class="card-title">Return Product</h5>

      <br />

        <div class="card-body">
          <div class="form-group">

            <label>Product <span class="text-danger">*</span></label>
            <Select2 @change="selectedProduct" v-model="form.product_id" :options="products" :settings="{ placeholder: 'Select Product' }">
            </Select2>
          </div>
        
          <div class="form-group"> 
              <label> Date <span class="text-danger">*</span></label>
              <input type="date" class="form-control" v-model="form.date">
          </div>

        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">
            <i class="fa fa-save"></i>
            &nbsp; Confirm
          </button>
        </div>

    </div>
    </div>
</div>

<div class="col-sm-6">
    <div class="card card-primary card-outline">
    <div class="card-body">
        <h5 class="card-title">Product Size</h5>
        <br><br>
       <table>
           <tr v-for="(item, index) in form.items" :key="index">
               <td>{{ item.size }}</td>
               <td style="padding: 0px 1rem">
                   <input class="form-control" type="number" v-model="item.quantity"  placeholder="Quantity">
               </td>
           </tr>
       </table>
       <br>
       <p><i><b>Note:</b> The number displayed in the form pertains to the current stock of the size. 
       Remember to set the quantity to zero if you do not wish to return a stock to the inventory.</i></p>
    </div>
    </div>
</div>
</div>

</form>
</template>

<script>
import store from '../../store'
import * as actions from "../../store/action-types";
import { mapGetters } from 'vuex'
import Select2 from 'v-select2-component'
import ShowError from "../utils/ShowError";
export default {

    components: {
        Select2,
        ShowError
    },

    data(){
        return{
        form: {
            date: '',
            product_id: '',
            items: []
        }
        }
    },

    computed: {
        ...mapGetters({
        products: "getProducts",
        }),
    },

    mounted() {
        //Get products
        store.dispatch(actions.GET_PRODUCTS);
        this.form.items = this.product.product_stocks
    },

    methods: {
       selectedProduct(id){
           this.form.items = []
           let product = this.products.filter(product=>product.id == id)
           
           product[0].product_stocks.map(stock=>{
               let item = {
                size : stock.size.size,
                size_id : stock.size_id,
                quantity : stock.quantity
               }

               this.form.items.push(item)
           })
       },
       submitForm(){
           store.dispatch(actions.CITYHALL_SUBMIT_RETURN_PRODUCT, this.form)
       }
    }

}
</script>
