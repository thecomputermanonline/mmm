<template>
    <section>
        <h2 class="heading d-block">Countries Visited</h2>
        <div v-if="items" class="table col-md-12">
            <table class="rank-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Country</th>
                    <th>Year</th>
                    <th>Duration</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody>
                <tr  :key="item.id" v-for=" item in items " >
                    <td>{{item.id}}</td>
                    <td>{{item.country_name}}</td>
                    <td>{{item.year}}</td>
                    <td>{{item.duration}}</td>

                    <td>X</td>
                </tr>

                </tbody>
            </table>
        </div>
        <form class="interest-form" method="post" action="/store-countries-visited" @submit.prevent="onSubmit" @change="errors.clear($event.target.name)">

           <div class="form-row">
            <div class="form-group col-md-4">
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
            <div class="form-group col-md-4">
                <label for="year">Year</label>
                <select v-model="year"  name="year" class="custom-select" id="year">
                    <option selected>Please select one</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>

                </select>
                <span class="help is-danger" v-text="errors.get('year')"></span>
            </div>
            <div class="form-group col-md-4">
                <label for="duration">Duration</label>
                <input v-model="duration" name="duration"  id="duration" class="form-control" type="text" placeholder="e.g 5 weeks">
                <span class="help is-danger" v-text="errors.get('duration')"></span>
            </div>
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

                items:[
                    {'country_name':'Mauritius', 'year':'1999','id':1, 'duration':'3 weeks',},
                    {'country_name':'Canada',  'year':'1999','id':2, 'duration':'3 weeks',},
                ],

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

                    if(response.data){
                        console.log(response.data)
                        this.items = response.data;
                    }

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
