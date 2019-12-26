<template>
<div>
    <h2>Education History</h2>

    <div v-if="items" class="table col-md-12">
        <table class="rank-table">
            <thead>
            <tr>
                <th>#</th>
                <th>institution</th>
                <th>Qualification</th>
                <th>Discipline</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Remove</th>
            </tr>
            </thead>
            <tbody>
            <tr  :key="item.id" v-for=" item in items " >
                <td>{{item.id}}</td>
                <td>{{item.institution}}</td>
                <td>{{item.qualification}}</td>
                <td>{{item.startdate}}</td>
                <td>{{item.enddate}}</td>
                <td>X</td>
            </tr>

            </tbody>
        </table>
    </div>
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
                <label for="startdate">from</label>
                <input type="date" name="startdate" placeholder="Starting Date?" v-model="startdate" class="form-control" id="startdate">
                <span class="help is-danger" v-text="errors.get('startdate')"></span>
            </div>
            <div class="form-group col-md-3 ">
                <label for="enddate">To </label>
                <input type="date" name="enddate" placeholder="Finishing Date?" v-model="enddate" class="form-control" id="enddate">
                <span class="help is-danger" v-text="errors.get('enddate')"></span>
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
                items:[
                    {'institution':'Mauritius', 'qualification':'1999','id':1, 'discipline':'3 weeks','startdate':'3 weeks','enddate':'3 weeks',},
                    {'institution':'Canada',  'qualification':'1999','id':2, 'discipline':'3 weeks','startdate':'3 weeks','enddate':'3 weeks',},
                ],
                institution: '',
                qualification: '',
                discipline: '',
                startdate: '',
                enddate: '',
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

                    if(response.data){
                        console.log(response.data)
                        this.items = response.data;
                    }


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
