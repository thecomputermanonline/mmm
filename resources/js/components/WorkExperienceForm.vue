<template>
<div>
    <h2>Work Experience (up to the last 10 years)</h2>
    <div v-if="items" class="table col-md-12">
        <table class="rank-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Company</th>
                <th>Job Title</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Remove</th>
            </tr>
            </thead>
            <tbody>
            <tr  :key="item.id" v-for=" item in items " >
                <td>{{item.id}}</td>
                <td>{{item.company}}</td>
                <td>{{item.jobtitle}}</td>
                <td>{{item.startdate}}</td>
                <td>{{item.enddate}}</td>
                <td>X</td>
            </tr>

            </tbody>
        </table>
    </div>


    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="company">Company</label>
            <input id="company" name="company" v-model="company" class="form-control" type="text" placeholder="Example: Middlesex University, Mauritius">
            <span class="help is-danger" v-text="errors.get('company')"></span>

        </div>
        <div class="form-group col-md-6">
            <label for="jobtitle">Job Title</label>
            <input id="jobtitle" name="jobtitle" v-model="jobtitle" class="form-control" type="text" placeholder="e.g.School Teacher">
            <span class="help is-danger" v-text="errors.get('jobtitle')"></span>
        </div>
        <div class="form-group col-md-6">
            <label for="startdate">from</label>
            <input type="date" name="startdate" placeholder="Starting Date?" v-model="startdate" class="form-control" id="startdate">
            <span class="help is-danger" v-text="errors.get('startdate')"></span>
        </div>
        <div class="form-group col-md-6">
            <label for="enddate">To </label>
            <input type="date" name="enddate" placeholder="Finishing Date?" v-model="enddate" class="form-control" id="enddate">
            <span class="help is-danger" v-text="errors.get('enddate')"></span>
        </div>
    </div>

    <div class="form-group col-md-6">

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
        name: "WorkExperienceForm",
        data(){
            return{
                items:[
                    {'company':'Submit Personal Profile', 'jobtitle':'manager','id':1, 'startdate':'checked', 'enddate':'checked'},
                    {'company':'Submit Personal Profile', 'jobtitle':'director', 'id':2, 'startdate':'checked', 'enddate':'checked'},
                ],
                company: '',
                jobtitle: '',
                startdate: '',
                enddate: '',
                errors: new Errors(),
            }
        },
        methods: {
            onSubmit() {

                axios.post('/store-work-exp', this.$data)
                    .then(response => {
                        flash('Your Work Experience has been recorded.', 'success');
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
            getWork() {
                axios.get('/get-work-exp').then(response => {
                if(response.data){
                    //console.log(response.data)
                    this.items = response.data;
                }



                });
            },
        },
        created() {
            this.getWork();
        },
    }
</script>

<style scoped>

</style>
