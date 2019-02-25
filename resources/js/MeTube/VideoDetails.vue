<template>
    <div class="container">
        <div class="VideoDetails__wrapper row" v-if="video">

            <div class="col-sm-8">

                <h2> {{ video.snippet.title }}</h2>
                <br>
                <small>Channel: {{ video.snippet.channelTitle }}</small>

                <p>{{ video.snippet.description }}</p>

                <div class="embed-responsive embed-responsive-16by9">

                    <iframe v-bind:src="url" frameborder="0" class="embed-responsive-item"></iframe>

                </div>
            </div>

        </div>
    </div>

</template>

<script>

    export  default {
        created() {
            if (this.$route.params.video === undefined) {
                this.$router.push({name: 'metube-dashboard'})
            }

            this.videoId = this.$route.params.id;
            // use backtik here not ' this
            this.url = `https://www.youtube.com/embed/${this.videoId}`
            this.video = this.$route.params.video
        },

        data() {
          return {
              videoId: null,
              video: null,
              url: null,
          }
        },
    }

</script>

<style lang="scss">
    .col-sm-8 {
        padding-bottom: 100px;
    }
</style>