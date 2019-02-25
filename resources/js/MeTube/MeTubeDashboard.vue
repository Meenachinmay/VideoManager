<template>

    <div class="MeTubeDashboard__wrapper mt-3">
        <finder></finder>

        <div class="ml-3" v-if="!loading">
            <video-group :videos="this.videos"></video-group>
        </div>
        <div v-else>
            Loading...
        </div>


    </div>

</template>

<script>

    import Search from './Search.js'
    import VideoGroup from './VideoGroup'
    import Finder from './Finder'

    export default {

        components: { VideoGroup, Finder },

        created() {

            Search({
                apiKey: 'AIzaSyAlb5pUjfDs-OEs0H9A6xONItYvNQbBYl8',
                term: 'laravel',
            }, response => this.handleSearchResult(response))

            window.eventBus.$on('searchForVideosStarted', () => {
                this.loading = true
            })

            window.eventBus.$on('searchFromYoutube', resultFromFinder => {
                this.loading = false
                this.videos = resultFromFinder
            })
        },

        data(){
            return {
                videos: null,
                loading: true,
            }
        },

        methods: {
          handleSearchResult(result) {
              this.loading = false
              this.videos = result
          }
        },
    }

</script>