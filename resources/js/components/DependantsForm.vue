<template>
<section>
    <strong class="heading d-block">Dependants</strong>
    <form class="interest-form" method="post" action="/store-dependent" @submit.prevent="onSubmit" @change="errors.clear($event.target.name)">
        <div class="form-group">
            <label for="name">Name</label>
            <input v-model="name" name="name"  id="name" class="form-control" type="text" placeholder="Enter dependant Name">
            <span class="help is-danger" v-text="errors.get('name')"></span>
        </div>
        <div class="form-group">
            <label for="relationship">Relationship</label>
            <select v-model="relationship"  name="relationship" class="custom-select" id="relationship">
                <option selected>Please select one</option>
                <option value="child">Child</option>
                <option value="parent">Parent</option>
                <option value="Other">Other</option>

            </select>
            <span class="help is-danger" v-text="errors.get('relationship')"></span>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input v-model="age" name="age"  id="age" class="form-control" type="text" placeholder="Enter dependant age">
            <span class="help is-danger" v-text="errors.get('age')"></span>
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
        //props: ['study_goals'],
        data() {

            return {
                name:'',
                relationship:'',
                age:'',
                errors: new Errors(),

            }
        },
        methods: {
            onSubmit() {

                axios.post('/store-dependant', this.$data)
                    .then(response => {
                        // this.study = response.data.study;
                        // this.subject = response.data.subject;
                        // this.destination = response.data.destination;
                        // this.when = response.data.when;
                        // this.undergraduate = response.data.undergraduate;
                        // this.language = response.data.language;
                        // this.undergraduate = response.data.undergraduate;
                        // this.postgraduate = response.data.postgraduate;
                        // this.education = response.data.education;
                        // this.grade = response.data.grade;
                        // this.recentmajorprogramme = response.data.recentmajorprogramme;
                        // this.recentinstitution = response.data.recentinstitution;
                        flash('Your Dependent has been updated.', 'success');
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
                axios.get('/get-dependent').then(response => {

                    this.name = response.data.financial_support;
                    this.relationship = response.data.budget;
                    this.age = response.data.budget;

                });
            },
        },
        created() {
            this.getFinSup();
        },
    }




</script>


