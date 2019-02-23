<template>

    <div class="MeTubeDashboard__wrapper">

        <video-group :videos="this.videos"></video-group>

    </div>

</template>

<script>

    import Search from './Search.js'
    import VideoGroup from './VideoGroup'

    export default {

        components: { VideoGroup },

        created() {

            Search({
                apiKey: 'AIzaSyAlb5pUjfDs-OEs0H9A6xONItYvNQbBYl8',
                term: 'laravel tutorials'
            }, response => this.videos = response)
        },

        data(){
            return {
                videos: null
            }
        }
    }

</script>