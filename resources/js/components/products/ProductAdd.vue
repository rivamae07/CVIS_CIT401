<template>
    <form role="form" method="post" @submit.prevent="submitForm">
        <div class="row">
            <show-error></show-error>
            <div class="col-sm-6">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Add Product</h5>

                        <br />

                        <div class="card-body">
                            <div class="form-group">
                                <label
                                    >Category
                                    <span class="text-danger">*</span></label
                                >

                                <Select2
                                    v-model="form.category_id"
                                    :options="categories"
                                    :settings="{
                                        placeholder: 'Select Category'
                                    }"
                                >
                                </Select2>
                            </div>

                            <div class="form-group">
                                <label
                                    >Brand
                                    <span class="text-danger">*</span></label
                                >
                                <Select2
                                    v-model="form.brand_id"
                                    :options="brands"
                                    :settings="{ placeholder: 'Select Brand' }"
                                >
                                </Select2>
                            </div>

                            <div class="form-group">
                                <label
                                    >Stock Keeping Unit
                                    <span class="text-danger">*</span></label
                                >
                                <input
                                    type="text"
                                    v-model="form.sku"
                                    class="form-control"
                                    placeholder="Enter Stock Keeping Unit"
                                />
                            </div>

                            <div class="form-group">
                                <label
                                    >Name
                                    <span class="text-danger">*</span></label
                                >
                                <input
                                    type="text"
                                    v-model="form.name"
                                    class="form-control"
                                    placeholder="Enter Product Name"
                                />
                            </div>

                            <div class="form-group">
                                <label
                                    >Image
                                    <span class="text-danger">*</span></label
                                >
                                <input
                                    type="file"
                                    class="form-control"
                                    placeholder="Enter product image"
                                    @change="selectImage"
                                />
                            </div>

                            <div class="form-group">
                                <label
                                    >Cost Price(₱)
                                    <span class="text-danger">*</span></label
                                >
                                <input
                                    type="number"
                                    v-model="form.cost_price"
                                    class="form-control"
                                    placeholder="Enter Product Cost Price"
                                />
                            </div>

                            <div class="form-group">
                                <label
                                    >Expiration Date
                                    <span class="text-danger">*</span></label
                                >
                                <input
                                    type="date"
                                    v-model="form.expiration_date"
                                    class="form-control"
                                    placeholder="Enter Expiration Date"
                                />
                            </div>

                            <div class="form-group">
                                <label
                                    >Year
                                    <span class="text-danger">*</span></label
                                >
                                <input
                                    type="text"
                                    v-model="form.year"
                                    class="form-control"
                                    placeholder="Enter Product Year (ex. 2021)"
                                />
                            </div>

                            <div class="form-group">
                                <label
                                    >Description
                                    <span class="text-danger">*</span></label
                                >
                                <input
                                    type="text"
                                    v-model="form.description"
                                    class="form-control"
                                    placeholder="Enter Product Description (max: 200 characters)"
                                />
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i>
                                &nbsp;Add product
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Product Size</h5>
                        <br /><br />

                        <div
                            class="row mb-2"
                            v-for="(item, index) in form.items"
                            :key="index"
                        >
                            <div class="col-sm-4">
                                <select
                                    class="form-control"
                                    v-model="item.size_id"
                                >
                                    <option value=""
                                        >Select Product Size</option
                                    >
                                    <option
                                        v-for="(size, index) in sizes"
                                        :key="index"
                                        :value="size.id"
                                        >{{ size.size }}</option
                                    >
                                </select>
                            </div>

                            <div class="col-sm-3">
                                <select
                                    class="form-control"
                                    v-model="item.location"
                                >
                                    <option value=""
                                        >Location</option
                                    >
                                    <option>MCV</option>
                                    <option>CHV</option>
                                </select>
                            </div>

                            <div class="col-sm-3">
                                <input
                                    type="number"
                                    v-model="item.quantity"
                                    class="form-control"
                                    placeholder="Quantity"
                                />
                            </div>

                            <div class="col-sm-2">
                                <button
                                    type="button"
                                    class="btn-danger btn-sm"
                                    @click="deleteItem(index)"
                                >
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </div>

                        <button
                            class="btn btn-success btn-sm mt-3"
                            type="button"
                            @click="addItem"
                        >
                            <i class="fa fa-plus"></i>
                            Add Item
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
import store from "../../store";
import * as actions from "../../store/action-types";
import { mapGetters } from "vuex";
import Select2 from "v-select2-component";
import ShowError from "../utils/ShowError";
export default {
    components: {
        Select2,
        ShowError
    },

    data() {
        return {
            form: {
                category_id: "",
                brand_id: "",
                sku: "",
                name: "",
                image: "",
                cost_price: 0,
                expiration_date: "",
                year: "",
                description: "",
                status: 1,
                items: [
                    {
                        size_id: "",
                        location: "",
                        quantity: 0
                    }
                ]
            }
        };
    },

    computed: {
        ...mapGetters({
            categories: "getCategories",
            brands: "getBrands",
            sizes: "getSizes"
        })
    },

    mounted() {
        //Get categories
        store.dispatch(actions.GET_CATEGORIES);

        //Get brands
        store.dispatch(actions.GET_BRANDS);

        //Get sizes
        store.dispatch(actions.GET_SIZES);
    },

    methods: {
        selectImage(e) {
            this.form.image = e.target.files[0];
        },
        addItem() {
            let item = {
                size_id: "",
                location: "",
                quantity: 0
            };
            this.form.items.push(item);
        },
        deleteItem(index) {
            this.form.items.splice(index, 1);
        },
        submitForm() {
            let data = new FormData();
            data.append("category_id", this.form.category_id);
            data.append("brand_id", this.form.brand_id);
            data.append("sku", this.form.sku);
            data.append("name", this.form.name);
            data.append("image", this.form.image);
            data.append("cost_price", this.form.cost_price);
            data.append("expiration_date", this.form.expiration_date);
            data.append("year", this.form.year);
            data.append("description", this.form.description);
            data.append("status", this.form.status);
            data.append("items", JSON.stringify(this.form.items));

            store.dispatch(actions.ADD_PRODUCT, data);

            // console.log(this.form)
        }
    }
};
</script>
