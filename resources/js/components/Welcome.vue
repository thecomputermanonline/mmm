<template>


        <div >

            <div class="container">


                <div class="row">
                    <div class="col-lg-8 col-md-7 column-xl-9">

                        <div class="inner">
                            Instructions go here
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-5 column-xl-3">
                        <!--                    <div class="date">23:14, Thursday, Feb 26, 2018</div>-->


                        <div class="right-container">
                            <div id="app" class="inner">
                                <div class="heading">Checklist For Procedures:</div>

                                <!--                            <div class="accordion" id="accordionOne">-->
                                <!--                                <range-slider score-type="Previous" :total="7.5"  scores="scores" ></range-slider>-->

                                <!--                                <range-slider score-type="Target"   :total="9.0"  scores="scores" ></range-slider>-->

                                <!--                            </div>-->
                                <form class="form" method="POST" action="#!">

                                    <div class="praticing-reason">
                                        <div class="reason-head">List of Tasks to do:</div>

                                        <div class="checkbox-radio">
<!--                                               <div class="check-inner"   :key="item.order" v-for=" item in items ">-->
<!--                                                    <input  v-model="item.title" type="checkbox" :id="item.order"  :checked="item.state">-->
<!--                                                    <label :for="item.order">{{item.title}}</label>-->
<!--                                                </div>-->





                                            <div class="check-inner">
                                                <input type="checkbox" id="profile">
                                                <label for="profile">Submit Personal Profile</label>
                                            </div>

                                            <div class="check-inner">
                                                <input type="checkbox" id="educate">
                                                <label for="educate">Submit Education History</label>
                                            </div>

                                            <div class="check-inner">
                                                <input type="checkbox" id="exp">
                                                <label for="exp">Submit Work Experience</label>
                                            </div>
                                            <div class="check-inner">
                                                <input type="checkbox" id="bg">
                                                <label for="bg">Submit Background Information</label>
                                            </div>
                                            <div class="check-inner">
                                                <input type="checkbox" id="dep">
                                                <label for="dep">Submit Dependantse</label>
                                            </div>
<!--                                            <div class="check-inner other">-->
<!--                                                <input type="checkbox" id="others">-->
<!--                                                <label for="others">Financial Details-->
<!--&lt;!&ndash;                                                    <input type="text" class="form-control w-100 mt-3 bg-transparent" placeholder="Please specify">&ndash;&gt;-->
<!--                                                </label>-->
<!--                                            </div>-->
                                        </div>

                                        <button class="btn btn-block" disabled>Reset</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


</template>
<script>
    import Profile from "./Profile";
    export default {
        components: {Profile},
        data() {
            return {
                checklist:{},
                debounce: false,
                items:[
                    {'title':'Submit Personal Profile', 'order':1, 'state':'checked'},
                    {'title':'Submit Dependants', 'order':4, 'state':'checked'},
                    {'title':'Submit Education History', 'order':2, 'state':'checked'},
                    {'title':'Submit Work Experience', 'order':3, 'state':'false'},
                    {'title':'Submit Background Info', 'order':5, 'state':'checked'},
                    {'title':'Submit Financial Status', 'order':6, 'state':'checked'},
                ],


            }
        },
        methods: {
            updateItemOrder() {
                // alert(items);
                // get your info then...
                var items = this.items.map(function(item, index) {
                    return { item: item, order: index }
                })

                if(this.debounce) return
                this.debounce = setTimeout(function(items) {
                    this.debounce = false

                    let tasks = items;
                    axios.put('/checklist/update' +
                        '', {
                        tasks: tasks
                    }).then((response) => {
                        flash('checklist updated', 'success');
                        window.scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });
                    }).catch((error) => {
                        flash('The given data was invalid.', 'warning');
                        window.scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });
                    })
                }.bind(this, items), 2000)
            },

            onAdd(event, status) {

                alert('dragged');
                let id = event.item.getAttribute('data-id');
                axios.patch('/tasks/' + id ).then((response) => {
                    flash('Your profile has been updated.', 'success');
                }).catch((error) => {
                    console.log(error);
                })
            },
            getImportantFactors() {
                axios.get('/tasks/getUserTask').then(response => {
                    let data = response.data;
                    // this.items.title = response.data.title;
                    // this.id = response.data.order;
                    const result = data.map((item) => {
                        return {
                            title: item.title,
                            order: item.order

                        };
                    }).sort((a, b) => a.order - b.order);
                    if (result.length >0){ this.items = result};



                });
            },

        },
        created() {
          //  this.getImportantFactors();

        },
    }
</script>

<style scoped>
    .full-height {
        height: 100vh;
    }
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .position-ref {
        position: relative;
    }
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }
    .content {
        text-align: center;
    }
    .title {
        font-size: 60px;
    }
    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    .m-b-md {
        margin-bottom: 30px;
        color: #000000;
    }
</style>
