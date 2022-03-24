<template>
    <div id="checkout" class="container">
        <div class="py-5 text-center">
          <h2>Checkout form</h2>
          <h3>{{user.first_name}} {{' '}} {{user.last_name}}</h3>
        </div>
        <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span>Your cart</span>
              <span class="badge bg-danger rounded-pill">{{totalQuantity}}</span>
            </h4>
            <ul class="list-group mb-3"  v-for="product in shoppingCart" :key="product.id">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                    <span>Product Name:</span>
                  <h6 class="mb-2">{{product.name}}</h6>
                  <span>Quantity:</span>
                  <small class="text-muted">{{product.quantity}}</small>
                </div>
                <div>
                  <h6 class="mb-2">Price:</h6>
                    <span v-if="product.onsale30">
                        <span> 
                            <b>$ {{(product.price - product.price*30/100)*product.quantity}}</b>
                        </span>
                        <div class="newPrice30">30%</div>
                    </span>
                    <span v-else-if="product.onsale50">
                        <span> 
                            <b>$ {{(product.price - product.price*50/100)*product.quantity}}</b>
                        </span>
                        <div class="newPrice50">50%</div>
                    </span>
                    <span v-else><b>$ {{product.price*product.quantity}}</b></span><br>
                </div>
              </li>
            </ul>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Total Discount</h6>
                </div>
                <span class="text-success">${{totalPriceNoSale - totalPrice}}</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span><strong>Total (USD)</strong></span>
                <strong>${{totalPrice}}</strong>
              </li>
          </div>

          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value=firstN required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value=lastN required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                  <input type="email" class="form-control" id="email" placeholder="you@example.com" value=useremail>
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
    
                <div class="col-sm-12">
                  <label for="address" class="form-label">Street</label>
                  <input type="text" class="form-control" id="street" placeholder="Brinkstraat" vlaue=userstreet required>
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
    
                <div class="col-sm-4">
                  <label for="house_number" class="form-label">House Number </label>
                  <input type="text" class="form-control" id="house_number" placeholder="17">
                </div>

                <div class="col-md-3">
                  <label for="zip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required>
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>
              </div>
    
                <div class="col-md-4">
                  <label for="state" class="form-label">City</label>
                  <select class="form-select" id="state" required>
                    <option value="">Choose...</option>
                    <option>California</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>
    
                <div class="col-md-5">
                  <label for="country" class="form-label">Country</label>
                  <select class="form-select" id="country" required>
                    <option value="">Choose...</option>
                    <option>United States</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
    
              <hr class="my-4">
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
              </div>
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Save this information for next time</label>
              </div>
    
              <hr class="my-4">
    
              <h4 class="mb-3">Payment</h4>
    
              <div class="my-3">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                  <label class="form-check-label" for="credit">Credit card</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="debit">Debit card</label>
                </div>
                <div class="form-check">
                  <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="paypal">PayPal</label>
                </div>
              </div>
    
              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
    
                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required>
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>
    
              <hr class="my-4">
              <!-- <a class="w-100 btn btn-primary btn-lg" type="submit" :href="'checkout/' + product.id">Continue to checkout</a> -->
              <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
            </form>
          </div>
        </div>
    
    
    </div>
</template>

<script>

    export default {
       
        props:{
            shoppingCart: {
                type: Array,
            },
            totalQuantity: {
                type: Number,
                default: 0,
            },
            totalPrice: {
                type: parseFloat(Number),
                default: 0,
            },
            totalPriceNoSale:{
                type: parseFloat(Number),
                default: 0,
            },
            user:{
                type:Object
            },
        },

        data() {
            return {
                products:[],
                users:[],
                user_orders:[],
                user_addresses:[],
                useremail: '',
                loading: true,
                firstN:"",
                lastN:"",
                userstreet:''
            }
        },

        mounted() {
            console.log('Component mounted.')
            this.loadProductMedia();
            this.loadProduct();
            this.loadUser();
            this.loadUserOrder();
            this.loadUserAddress();
            this.firstN=document.getElementById('firstName').value=this.user.first_name;
            this.lastN=document.getElementById('lastName').value=this.user.last_name;
            this.useremail=document.getElementById('email').value=this.user.email;
            this.user_addresses.forEach(element => {
                if(element.user_id == this.user.id){
                    this.userstreet = document.getElementById('street').value= element.street;
                }
            });

        },

         created() {
        },

        methods: {
            loadProductMedia(){
                axios.get('/api/product_media')
                .then((response) =>{
                    this.product_media = response.data.data;
                    this.loading = false;

                })
                .catch(function(error){
                    console.log(error);
                });
            },

            loadProduct(){
                axios.get('/api/products')
                .then((response) =>{
                    this.products = response.data.data;
                    this.loading = false;
                })
                .catch(function(error){
                    console.log(error);
                });
            },
            loadUser(){
                axios.get('/api/users')
                .then((response) =>{
                    this.users = response.data.data;
                })
                .catch(function(error){
                    console.log(error);
                });
            },
            loadUserOrder(){
                axios.get('/api/user_orders')
                .then((response) =>{
                    this.user_orders = response.data.data;
                })
                .catch(function(error){
                    console.log(error);
                });
            },
            loadUserAddress(){
                axios.get('/api/user_addresses')
                .then((response) =>{
                    this.user_addresses = response.data.data;
                })
                .catch(function(error){
                    console.log(error);
                });
            },



            remove() {
                this.$root.$emit('remove')
            },
            removeProduct(index) {
                this.$root.$emit('remove-product', index)
            },

            updateProduct(product, index, updateType) {
                this.$root.$emit('update-product', product,index, updateType)
            },

            updateCart(product) {
                this.$root.$emit('update-cart', product)
            },

            updateCart(product) {
                this.$root.$emit('update-cart', product)
            },

            detail(index){
                this.$root.$emit('detail', index)
            },
        },
    }
</script>
