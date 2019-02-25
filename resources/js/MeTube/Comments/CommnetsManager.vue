<template>

    <div class="Comment__wrapper">

        <div class="mt-3">
            <AddComment />
        </div>

        <div class="my-3">
            <ShowComment />
        </div>

    </div>

</template>

<script>
    import AddComment from './AddComment'
    import ShowComment from './ShowComment'

    export default {
        components: { AddComment, ShowComment}
    }

</script>