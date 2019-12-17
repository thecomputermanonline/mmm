<template>

        <div class="profile-container">
            <a href="#" v-on:click="seen = !seen" class="profile-pic">

                <span class="img"  :style="avatarstyle"></span>
                <span class="camera-icon">
                        <span class="holder">
                          <img src="images/camera.svg"  width="24" height="24">
                          <span class="text">Change your <br>picture</span>
                        </span>
                      </span>

            </a>
        <form  method="POST" enctype="multipart/form-data">
            <image-upload name="avatar" :seen="seen" class="mr-1" @loaded="onLoad"></image-upload>
        </form>


    </div>
</template>

<script>
    import ImageUpload from './ImageUpload.vue';

    export default {
        props: ['avatarstyle'],
        components: {ImageUpload},
        data() {
            return {
                avatar: this.avatar,
                avatarstyle2: this.avatarstyle,
                seen: false
            };
        },
        created(){
            this.getProfile();
        },
        methods: {
            onLoad(avatar) {
               // console.log(avatar);
                this.avatar = avatar.src;
                this.persist(avatar.file);
            },

            getProfile() {
                axios.get('/user/avatar/').then(response => {
                    this.avatar = response.data;
                    this.avatarstyle2 = 'background-image: url("/storage/'+ this.avatar + '")' ;
                    this.seen= false;
                });
            },
            persist(avatar) {
                let data = new FormData();
                data.append('avatar', avatar);
                axios.post('/user/avatar', data)
                    .then((response) => {
                        this.getProfile();
                        flash('Avatar uploaded!');
                    });
            }
        }
    }
</script>
