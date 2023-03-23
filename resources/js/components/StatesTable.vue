<template>
    <div class="row">
        <div class="card text-white mb-3" :class="data.color">
            <div class="card-header">
                <h1 class="text-center">{{ data.country }}</h1>
            </div>
            <div class="card-body">
                <div class="container table text-white">
                    <div class="row fw-bold">
                        <div class="col-4">#</div>
                        <div class="col-4">Heading 1</div>
                        <div class="col-4">Heading 2</div>
                    </div>
                    <div
                        class="row table-row py-2 my-2"
                        v-for="(state, index) in data.states"
                        data-bs-toggle="collapse"
                        :data-bs-target="`#r${index}`"
                    >
                        <div class="col-4">{{ state.name }}</div>
                        <div class="col-4">{{ state.number }}</div>
                        <div class="col-4">zzzzz</div>
                        <div
                            class="row collapse accordion-collapse"
                            :id="`r${index}`"
                            data-bs-parent=".table"
                        >
                            <div class="col">
                                {{ data.country }} .. This is the first item's
                                accordion body. It is shown by default, until
                                the collapse plugin adds the appropriate classes
                                that we use to style each element. These classes
                                control the overall appearance,
                                {{ data.number }}
                                hiding via CSS transitions. You can modify any
                                of this with custom CSS or overriding our
                                default variables. It's also worth noting that
                                just about any HTML can go within the
                                .accordion-body, though the transition does
                                limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["data"],
    data() {
        return {
            selectedRowIndex: -1,
            data: JSON.parse(this.data),
        };
    },
    methods: {
        expandRow(index) {
            if (this.selectedRowIndex === index) {
                this.selectedRowIndex = -1;
            } else {
                this.selectedRowIndex = index;
            }
        },
    },
};
</script>

<style scoped>
.table-row {
    cursor: pointer;
}

.table-row[aria-expanded="true"],
.table-row:hover {
    border: 2px solid white;
    border-radius: 10px;
}
</style>
