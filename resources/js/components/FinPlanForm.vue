<template>
<section>
    <strong class="heading d-block">My Financial Plan</strong>
    <form class="interest-form" method="post" action="/store-finsup" @submit.prevent="onSubmit" @change="errors.clear($event.target.name)">
        <div class="form-group">
            <label for="sponsor">Financial Support</label>
            <select v-model="sponsor"  name="sponsor" class="custom-select" id="sponsor">
                <option value="" >Please select</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>

            </select>
            <span class="help is-danger" v-text="errors.get('finsup')"></span>
        </div>
        <div class="form-group">
            <label for="budget">Budget</label>
            <input v-model="budget" name="budget"  id="budget" class="form-control" type="text" placeholder="Enter your budget">
            <span class="help is-danger" v-text="errors.get('budget')"></span>
        </div>
        <div class="btn-container">
            <button class="btn  btn-block" :disabled="errors.any()" >Save Details</button>
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
        //props: ['study_goals'],
        data() {

            return {
                sponsor:'',
                budget:'',
                errors: new Errors(),

            }
        },
        methods: {
            onSubmit() {

                axios.post('/store-finsup', this.$data)
                    .then(response => {

                        // this.recentmajorprogramme = response.data.recentmajorprogramme;
                        // this.recentinstitution = response.data.recentinstitution;
                        flash('Your Financial Support has been updated.', 'success');
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
            getFinSup() {
                axios.get('/get-finsup').then(response => {

                    this.finsup = response.data.financial_support;
                    this.budget = response.data.budget;


                });
            },
        },
        created() {
            this.getFinSup();
        },
    }
</script>


