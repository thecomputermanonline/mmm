<template>
<div>
    <h2>Education History</h2>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="institution">institution?</label>
            <input id="institution" name="institution" v-model="institution" class="form-control" type="text" placeholder="Example: Middlesex University, Mauritius">
            <span class="help is-danger" v-text="errors.get('institution')"></span>
        </div>
        <div class="form-group col-md-6">
            <label for="qualification">Qualification</label>
            <input id="qualification" name="qualification" v-model="qualification" class="form-control" type="text" placeholder="Example: Bachealor Degree">
            <span class="help is-danger" v-text="errors.get('qualification')"></span>
        </div>

    </div>


    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="discipline">Discipline</label>
            <input id="discipline" name="discipline" v-model="discipline" class="form-control" type="text" placeholder="Enter Discipline">
            <span class="help is-danger" v-text="errors.get('discipline')"></span>
        </div>

            <div class="form-group col-md-3 ">
                <label for="sdate">from</label>
                <input type="date" name="sdate" placeholder="Starting Date?" v-model="sdate" class="form-control" id="sdate">
                <span class="help is-danger" v-text="errors.get('sdate')"></span>
            </div>
            <div class="form-group col-md-3 ">
                <label for="edate">To </label>
                <input type="date" name="edate" placeholder="Finishing Date?" v-model="edate" class="form-control" id="edate">
                <span class="help is-danger" v-text="errors.get('edate')"></span>
            </div>
        </div>


    <div class="btn-container">
        <button class="btn  btn-block btn-sm" :disabled="errors.any()" >Save and Add More</button>
    </div>
</div>
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
        name: "EducationHistoryForm",
        data(){
            return{

                education: '',
                grade: '',
                recentmajorprogramme: '',
                recentinstitution: '',
                errors: new Errors(),
            }
        },
        methods: {
            onSubmit() {

                axios.post('/store-edu', this.$data)
                    .then(response => {
                        flash('Your Education History has been recorded.', 'success');
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
            getEdu() {
                axios.get('/edu-history').then(response => {


                    // this.education = response.data.education;
                    // this.grade = response.data.grade;
                    // this.recentmajorprogramme = response.data.recentmajorprogramme;
                    // this.recentinstitution = response.data.recentinstitution;

                });
            },
        },
        created() {
            //this.getEdu();
        },
    }
</script>

<style scoped>

</style>
