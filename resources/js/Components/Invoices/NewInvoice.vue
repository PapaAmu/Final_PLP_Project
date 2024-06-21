<script setup>
    import { ref } from 'vue';
    import axios from 'axios';

    const form = ref({
        customer_id: null,
        date: '',
        due_date: '',
        number: '',
        reference: '',
        discount: 0,
        terms_and_conditions: 'Default Terms and Conditions',
        items: [
            {
                product_id: null,
                product: '',
                unit_price: 0,
                quantity: 1,
            }
        ]
    });

    const saveInvoice = async () => {
    try {
        const response = await axios.post('/create_invoice', form.value);
        console.log('Invoice created:', response.data);
        // Optionally, you can redirect or handle the response as needed
    } catch (error) {
        console.error('Error creating invoice:', error);
        // Handle error
    }
};
</script>

<template>
    <div class="container">
        <div class="invoices">
            <div class="card__header">
                <div>
                    <h2 class="invoice__title">New Invoice</h2>
                </div>
                <div>
                    <!-- Button to save the invoice -->
                    <button class="btn btn-secondary" @click="saveInvoice">Save</button>
                </div>
            </div>

            <div class="card__content">
                <div class="card__content--header">
                    <!-- Customer and date input fields -->
                    <div>
                        <p class="my-1">Customer</p>
                        <select v-model="form.customer_id" class="input">
                            <option value="">Customer 1</option>
                            <!-- Add your customer options here -->
                        </select>
                    </div>
                    <div>
                        <p class="my-1">Date</p> 
                        <input id="date" type="date" class="input" v-model="form.date">
                        <p class="my-1">Due Date</p> 
                        <input id="due_date" type="date" class="input" v-model="form.due_date">
                    </div>
                    <div>
                        <p class="my-1">Number</p> 
                        <input type="text" class="input" v-model="form.number"> 
                        <p class="my-1">Reference (Optional)</p> 
                        <input type="text" class="input" v-model="form.reference">
                    </div>
                </div>

                <br><br>

                <!-- Items table -->
                <div class="table">
                    <div class="table--heading2">
                        <p>Item Description</p>
                        <p>Unit Price</p>
                        <p>Qty</p>
                        <p>Total</p>
                        <p></p>
                    </div>
    
                    <!-- item 1 -->
                    <div class="table--items2">
                        <p>#093654 vjxhchkvhxc vkxckvjkxc jkvjxckvjkx </p>
                        <input type="text" class="input" v-model="form.items[0].product">
                        <input type="text" class="input" v-model="form.items[0].unit_price">
                        <input type="text" class="input" v-model="form.items[0].quantity">
                        <p>$ 10000</p>
                        <p style="color: red; font-size: 24px;cursor: pointer;">&times;</p>
                    </div>
                    <div style="padding: 10px 30px !important;">
                        <button class="btn btn-sm btn__open--modal">Add New Line</button>
                    </div>
                </div>

                <!-- Footer section with terms, subtotal, discount, and total -->
                <div class="table__footer">
                    <div class="document-footer">
                        <p>Terms and Conditions</p>
                        <textarea v-model="form.terms_and_conditions" cols="50" rows="7" class="textarea"></textarea>
                    </div>
                    <div>
                        <div class="table__footer--subtotal">
                            <p>Sub Total</p>
                            <span>$ 1000</span>
                        </div>
                        <div class="table__footer--discount">
                            <p>Discount</p>
                            <input type="text" class="input" v-model="form.discount">
                        </div>
                        <div class="table__footer--total">
                            <p>Grand Total</p>
                            <span>$ 1200</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for adding new items -->
            <div class="modal main__modal">
                <div class="modal__content">
                    <span class="modal__close btn__close--modal">×</span>
                    <h3 class="modal__title">Add Item</h3>
                    <hr><br>
                    <div class="modal__items">
                        <select class="input my-1">
                            <option value="None">None</option>
                            <option value="None">LBC Padala</option>
                        </select>
                    </div>
                    <br><hr>
                    <div class="model__footer">
                        <button class="btn btn-light mr-2 btn__close--modal">Cancel</button>
                        <button class="btn btn-light btn__close--modal" @click="saveItem">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    /* Add any necessary styles */
</style>
