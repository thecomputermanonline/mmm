
<template>
    <div>
    <form class="interest-form" method="post" action="/store-work-goals" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)">

        <h2>My Goals</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="gotjob">Have you gotten a job yet?</label>
                <select v-model="gotjob" class="custom-select"id="gotjob" @change="errors.clear('gotjob')">
                    <option selected>Please select</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>

                </select>
                <span class="help is-danger" v-text="errors.get('gotjob')"></span>
            </div>
            <div class="form-group col-md-6">
                <label for="company">Which company?</label>
                <input id="company" name="company" v-model="company" class="form-control" type="text" placeholder="e.g.IBM Canada">
            </div>

        </div>
        <div class="form-row mb-5">
            <div class="form-group mb-md-0 col-md-6">
                <label for="jobtitle">What career path are you thnking of going into?</label>
                <input id="jobtitle" name="jobtitle" v-model="jobtitle" class="form-control" type="text" placeholder="jobtitle">
                <span class="help is-danger" v-text="errors.get('jobtitle')"></span>
            </div>
            <div class="form-group mb-0 col-md-6">

                <div class="form-group">
                    <label for="startingdate">Starting Date</label>
                    <input type="date" name="startdate" placeholder="When are you starting?" v-model="startingdate" class="form-control" id="startingdate">
                    <span class="help is-danger" v-text="errors.get('startingdate')"></span>
                </div>

            </div>
        </div>

        <div class="text-right mt-4">
            <button  class="button btn" :disabled="errors.any()">Save</button>
        </div>
    </form>
<work-experience-form></work-experience-form>
    </div>
</template>

<script>
                import WorkExperienceForm from "./WorkExperienceForm";

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
                components: {WorkExperienceForm},
                //props: ['study_goals'],
                data() {

                    return {
                        company: '',
                        gotjob: '',
                        jobtitle: '',
                        startingdate: '',
                        undergraduate: [],
                        language: [],
                        postgraduate: [],
                        errors: new Errors(),

                    }
                },
                methods: {
                    onSubmit() {

                        axios.post('/store-work', this.$data)
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
                                flash('Your working abroad goals has been updated.', 'success');
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
                    getWorkGoal() {
                        axios.get('/get-work').then(response => {

                            this.location = response.data.location;
                            this.gotjob = response.data.gotjob;
                            this.profession = response.data.profession;
                            this.certification = response.data.certification;

                           this.language = response.data.language.split(',');
                           this.undergraduate = response.data.undergraduate.split(',');
                           this.postgraduate = response.data.postgraduate.split(',');


                        }).catch(error => error.response.data.errors);
                    },
                },
                created() {
                    this.getWorkGoal();
                },
            }




</script>



