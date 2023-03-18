<template>
    <div
        class="d-flex align-items-center vh-100 flex-lg-row flex-column justify-content-center"
    >
        <div class="mx-4">
            <a href="google.com">
                <img
                    class="rounded-2"
                    src="/images/australia.jpg"
                    alt="Imagem do Brasil"
                />
            </a>
        </div>
        <div class="mx-4">
            <a href="google.com">
                <img
                    class="rounded-2"
                    src="/images/brazil.jpg"
                    alt="Imagem da Australia"
                />
            </a>
        </div>
        <div class="mx-4">
            <a href="google.com">
                <img
                    class="rounded-2"
                    src="/images/canada.jpg"
                    alt="Imagem do Canada"
                />
            </a>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {};
    },
};
</script>

<style scoped>
img {
    width: 300px;
    height: 200px;
}

img:hover {
    border: 5px solid #198754;
}

/*
.image-container {
    margin-right: 20px;
    display: flex;
    align-items: center;
}

.image-row {
    display: flex;
    justify-content: center;
    min-height: 100vh;
} */
</style>
