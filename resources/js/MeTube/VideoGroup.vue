<template>

    <div class="VideoGroup__wrapper row grid">

        <video-item
                v-images-loaded:on.progress="imageProgress"
                v-for="video in videos"
                :video="video"
                :key="video.id.videoId"

        >
        </video-item>

    </div>
</template>

<script>

    import VideoItem from './VideoItem.vue'
    import Isotope from 'isotope-layout'
    import imagesLoaded from 'vue-images-loaded'

    export default {

        props: ['videos'],

        components: {VideoItem},

        data(){
            return {
                isotope: null,
                counter: 0,
            }
        },

        created() {

        },

        directives:{
            imagesLoaded
        },

        methods: {
            relayoutGrid(){
                setTimeout(() => {
                    var elem = document.querySelector('.grid')
                    this.isotope = new Isotope(elem, {
                        itemSelector: '.card',
                        layoutMode: 'masonry'
                    })
                }, 1)
            },

            imageProgress(instance, img){
                this.counter++;
                if (this.counter == this.videos.length){
                    this.relayoutGrid()
                }
            },
        }
    }
</script>