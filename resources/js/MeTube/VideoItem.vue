<template>

    <div class="VideoItem__wrapper">

        <div class="card mx-2 mb-2" style="width: 18rem;">

            <img class="card-img-top" v-bind:src="videoImage"  v-bind:alt="videoTitle">
            <div class="card-body">

                <h5 class="card-title"> {{ videoTitle }}</h5>
                <p class="card-text"> {{ videoDescription }}</p>
                <a href="#" class="btn btn-primary btn-sm"> Go to video </a>

            </div>

        </div>

    </div>
</template>

<script>

    export default {
        props: ['video'],
        computed: {
            videoTitle() {
                return this.video.snippet.title;
            },

            videoImage() {
                return this.video.snippet.thumbnails.medium.url;
            },

            videoDescription() {
                return this.video.snippet.description;
            }
        },
    }
</script>

<style lang="scss">
    .card{
        .card-img-top {
            max-height: 210px;
        }
    }

</style>