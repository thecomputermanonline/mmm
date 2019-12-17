<template>
<!--    <ul id="dropdown" class="profile-menu">-->
<!--         <a href="#" v-on:click.prevent="showDropDown=!showDropDown">-->
<!--            Catness-->
<!--            <img src="" alt="avatar">-->
<!--            <i :class="{ 'fa-caret-up': showDropDown, 'fa-caret-down': !showDropDown }" class="fa" aria-hidden="true"></i>-->
<!--        </a>-->

<!--                       <div v-if="showDropDown">-->
<!--                           <ul class="menu list pl0 pa0 ma0">-->
<!--                               <li v-for="link in links" class="list">-->
<!--                                   <a href="#" class="dd-link pointer hover-bg-moon-gray">{{link.name}}</a>-->
<!--                               </li>-->
<!--                           </ul>-->
<!--                       </div>-->
<!--                   </ul>-->


                   <ul class="profile-menu" >
        <li class="d-none d-md-block">
            <a href="/my-account" class="name">{{name}} </a>


        </li>
        <li class="profile_ic dropdown">

            <a href="#" class="dropdown-toggle" role="button" id="profile_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="/images/header/profile_ic.jpg" alt="">


                <!--                                    <img :src="avatar"  />-->



            </a>
            <div class="dropdown-menu" aria-labelledby="profile_dropdown">
                <a href="#" class="dropdown-item d-md-none">{{name}}</a>
                <router-link :to="{ name: 'updateprofile' }" class="dropdown-item" > My Profile</router-link>
                <router-link :to="{ name: 'board' }" class="dropdown-item" > My Applications</router-link>
                <router-link :to="{ name: 'stories' }" class="dropdown-item" > My Stories</router-link>

                <a class="dropdown-item" href="/billing">My Plans</a>

                <a class="dropdown-item" href="/my-account">My Account</a>
                <a class="dropdown-item" href="/"
                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
Logout
                </a>

                <form id="logout-form" :action="logout"   style="display: none;">
                    @csrf
                </form>


            </div>
        </li>
</ul>
</template>

<script>
    export default {
        name: "ProfileMenu",
        data(){
            return{
                showDropDown: true,
                links: [
                    {
                        name: "Account"
                    },
                    {
                        name: "Profile"
                    },
                    {
                        name: "Logout"
                    }
                ],
                name: 'john doe',
                avatar: 'images/header/profile_ic.jpg',
                role: '',



            }

        },
        methods:{
            logout(){
                axios.post('/logout').then(response => {
alert("res");
                    localStorage.clear()
                        //.setItem('user',response.data.success.name)
                    //localStorage.setItem('jwt',response.data.success.token)
                    this.$router.go('/login')
                    if (localStorage.getItem('jwt') == null){

                    }

            //});
        })
            }
        },
        // created() {
        //     this.getUserProfile();
        // },

    }
</script>

<style scoped>

</style>
