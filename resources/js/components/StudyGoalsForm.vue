<template>
    <div>
    <form class="interest-form" method="post" action="/store-study-goals" @submit.prevent="onSubmit" @change="errors.clear($event.target.name)">

        <h2>What is your current study goal?</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="gotoffer">Have you got an offer of admission ?</label>
                <select v-model="gotoffer" name ="gotoffer"  class="custom-select" id="gotoffer" @change="errors.clear('gotoffer')">
                    <option selected>Please select</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>

                </select>
                <span class="help is-danger" v-text="errors.get('study')"></span>
            </div>
            <div class="form-group col-md-6">
                <label for="school">Which school</label>
                <input v-model="school" name="school" id="school"  class="form-control" type="text" placeholder="School Name" >
                <span class="help is-danger" v-text="errors.get('school')"></span>
            </div>

        </div>
        <div class="form-row mb-5">
            <div class="form-group mb-md-0 col-md-6">
                <label for="course">Which course</label>
                <input v-model="course" name="course" id="course"  class="form-control" type="text" placeholder="course or discipline" >
                <span class="help is-danger" v-text="errors.get('course')"></span>
            </div>

            <div class="form-group mb-0 col-md-6">

                    <div class="form-group">
                        <label for="startingdate">Starting Date</label>
                        <input type="date" name="startingdate" placeholder="When are you starting?" v-model="startingdate" class="form-control" id="startingdate">
                        <span class="help is-danger" v-text="errors.get('startingdate')"></span>
                    </div>

            </div>
        </div>

        <h2>Have you taken any of the following tests?</h2>

        <span class="sub-title">A. English proficiency test</span>
        <span class="help is-danger" v-text="errors.get('language')"></span>
        <ul class="radios-holder">
            <li>
                <div class="checkbox-radio">
                    <input  v-model="language" value="ietls" type="checkbox" id="ielts" @change="errors.clear('language')">
                    <label for="ielts">IELTS</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input  v-model="language" value="toefl"  type="checkbox" id="toefl" @change="errors.clear('language')">
                    <label for="toefl">TOEFL</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input  v-model="language" value="toeic" type="checkbox" id="toeic" @change="errors.clear('language')">
                    <label for="toeic">TOEIC</label>
                </div>
            </li>

        </ul>

        <span class="sub-title">B. Undergraduate Admissions Test</span>
        <ul class="adm-test">
            <li>
                <div class="checkbox-radio">
                    <input name="language" v-model="undergraduate" value="umat" type="checkbox" id="test1">
                    <label for="test1">UMAT - Undergraduate Medical Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input v-model="undergraduate" value="gedh" type="checkbox" id="test2">
                    <label for="test2">GED - High School Diploma Equivalent</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input v-model="undergraduate" value="ukcat" type="checkbox" id="test3">
                    <label for="test3">UKCAT - United Kingdom Clinical Aptitude Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input v-model="undergraduate" value="gceal" type="checkbox" id="test4">
                    <label for="test4">GCE/A Level - General Certificate of Education</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input v-model="undergraduate" value="sat" type="checkbox" id="test5">
                    <label for="test5">SAT - Scholastic Assessment Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="undergraduate" value="act" id="test6">
                    <label for="test6">ACT - Formerly American College TEsting Program or American College Test </label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="undergraduate" value="ged" id="test7">
                    <label for="test7">GED - General Equivalency Diploma</label>
                </div>
            </li>
        </ul>

        <span class="sub-title">C. Postgraduate / Professional Admission Tests</span>
        <ul class="adm-test pb-5">
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="gamsat" id="test8">
                    <label for="test8">GAMSAT - Graduate Medical Schools Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="lsat" id="test9">
                    <label for="test9">LSAT - Law School Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="mat" id="test10">
                    <label for="test10">MAT - Miller Analogies Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="gre" id="test11">
                    <label for="test11">GRE - Graduate Record Examination</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="gmat" id="test12">
                    <label for="test12">GMAT -  Graduate Management Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="mcat" id="test13">
                    <label for="test13">MCAT - Medical College Admission Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="dat" id="test14">
                    <label for="test14">DAT - Dental Aptitude Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="oat" id="test15">
                    <label for="test15">OAT - Optometry Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="pcat" id="test16">
                    <label for="test16">PCAT - Pharmacy College Admission Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="teas" id="test17">
                    <label for="test17">TEAS - Test of Essential Academic Skills</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox" v-model="postgraduate" value="ahpat" id="test18">
                    <label for="test18">AHPAT - Allied Health Professions Admissions Test</label>
                </div>
            </li>
            <li>
                <div class="checkbox-radio">
                    <input type="checkbox"v-model="postgraduate" value="lsatlaw" id="test19">
                    <label for="test19">LSAT - Law School Admissions Test</label>
                </div>
            </li>
        </ul>



        <div class="text-right mt-4">
            <button  class="button btn" :disabled="errors.any()">Save</button>
        </div>
    </form>
    <education-history-form></education-history-form>
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
       // components: {EducationHistoryForm},
        //props: ['study_goals'],
        data() {

            return {
                        school: '',
                        startingdate: '',
                        gotoffer: '',
                        course: '',
                        undergraduate: [],
                        language: [],
                        postgraduate: [],

                        errors: new Errors(),

            }
        },
        methods: {
            onSubmit() {

                axios.post('/store-study', this.$data)
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
                        flash('Your study goals has been updated.', 'success');
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
            getStudyGoal() {
                axios.get('/get-study').then(response => {

                    this.study = response.data.study;
                    this.subject = response.data.subject;
                    this.destination = response.data.destination;
                    this.when = response.data.when;
                    this.undergraduate = response.data.undergraduate;
                    this.language = response.data.language.split(',');
                    this.undergraduate = response.data.undergraduate.split(',');;
                    this.postgraduate = response.data.postgraduate.split(',');;
                    // this.education = response.data.education;
                    // this.grade = response.data.grade;
                    // this.recentmajorprogramme = response.data.recentmajorprogramme;
                    // this.recentinstitution = response.data.recentinstitution;

                });
            },
        },
        created() {
            this.getStudyGoal();
        },
    }




</script>


