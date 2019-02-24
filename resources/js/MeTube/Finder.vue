<template>

    <div class="Search__wrapper">

        <div class="container">

            <form v-on:submit.prevent="handleFormSubmit">

                <input
                        v-model="searchString"
                        type="text"
                        class="form-control mb-3">

            </form>

        </div>

    </div>

</template>

<script>

    import Search from './Search'
    export default {
        data() {
            return {
                searchString: ''
            }
        },

        methods: {
            handleFormSubmit(){

                window.eventBus.$emit('searchForVideosStarted')

                Search({
                    apiKey: 'AIzaSyAlb5pUjfDs-OEs0H9A6xONItYvNQbBYl8',
                    term: this.searchString,
                }, data => {
                    window.eventBus.$emit('searchFromYoutube', data)
                    //this.searchString = ''
                })
            }
        },
    }

</script>