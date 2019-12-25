<template>
    <section>
        <strong class="heading d-block">Countries Visited</strong>
        <form class="interest-form" method="post" action="/store-countries-visited" @submit.prevent="onSubmit" @change="errors.clear($event.target.name)">
            <div class="form-group">
                <label for="country">Country </label>
                <select class="custom-select" id="country" v-model="country_name" name="country">
                    <option value="">Please Choose one</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Niger">Niger</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                </select>
                <span class="help is-danger" v-text="errors.get('country')"></span>

            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <select v-model="year"  name="year" class="custom-select" id="year">
                    <option selected>Please select one</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>

                </select>
                <span class="help is-danger" v-text="errors.get('year')"></span>
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input v-model="duration" name="duration"  id="duration" class="form-control" type="text" placeholder="e.g 5 weeks">
                <span class="help is-danger" v-text="errors.get('duration')"></span>
            </div>
            <div class="btn-container">
                <button class="btn  btn-block btn-sm" :disabled="errors.any()" >Save and Add More</button>
            </div>
        </form>
    </section>
</template>

<script>
    class Errors{
        constructor(){

            this.errors={};
        }
        get(field){
            if(this.errors[field])
            {
                return this.errors[field][0];
            }
        }
        record(errors){
            this.errors = errors;
        }
        clear(field){
            delete this.errors[field];
        }
        any(){
            return Object.keys(this.errors).length > 0;
        }
    }
    export default {
        name: 'CountriesVisited',
        data() {

            return {
                country_name:'',
                year:'',
                duration:'',
                errors: new Errors(),

            }
        },
        methods: {
            onSubmit() {

                axios.post('/store-countries-visited', this.$data)
                    .then(response => {

                        flash('you have added a new country visited.', 'success');
                        window.scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });
                    }).catch(error => {
                    this.errors.record(error.response.data.errors);
                    flash('The given data was invalid.', 'warning');
                    window.scroll({
                        top: 0,
                        left: 0,
                        behavior: 'smooth'
                    });
                });
            },
            getCountries() {
                axios.get('/get-countries-visited').then(response => {

                    // this.name = response.data.financial_support;
                    // this.relationship = response.data.budget;
                    // this.age = response.data.budget;

                });
            },
        },
        created() {
            this.getCountries();
        },
    }
</script>

<style scoped>

</style>
