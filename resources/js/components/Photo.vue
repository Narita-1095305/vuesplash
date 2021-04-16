<template>
    <div class="photo">
        <figure class="photo__wrapper">
            <ing
                class="photo_image"
                :src="item.url"
                :alt="Photo by ${item.owner.name}"
            >
        </figure>
    </div>
</template>

<script>
export default {
    props: {
        item: {
            type: Object,
            required: true
        }
    }
}
</script>