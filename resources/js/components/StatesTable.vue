<template>
    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <h1 class="card-header text-center">
                    {{ data.states[0].Pais }}
                </h1>
                <div class="card-body">
                    <div class="container table">
                        <div class="row justify-content-center fw-bold">
                            <div class="col-1">#</div>
                            <div class="col-3">Estado</div>
                            <div class="col-3 text-center">Casos totais</div>
                            <div class="col-3 text-center">
                                Mortes confirmadas
                            </div>
                        </div>
                        <div
                            class="row justify-content-center table-row py-3"
                            v-for="(state, index) in data.states"
                            data-bs-toggle="collapse"
                            :data-bs-target="`#r${index}`"
                        >
                            <div class="col-1">{{ state.id }}</div>
                            <div class="col-3">
                                <span class="underline fromLeft">{{
                                    state.ProvinciaEstado
                                }}</span>
                            </div>
                            <div class="col-3 text-center">
                                <span class="underline fromLeft">{{
                                    state.Confirmados
                                }}</span>
                            </div>
                            <div class="col-3 text-center">
                                <span class="underline fromLeft">{{
                                    state.Mortos
                                }}</span>
                            </div>
                            <div
                                class="row collapse accordion-collapse"
                                :id="`r${index}`"
                                data-bs-parent=".table"
                            >
                                <div class="col">
                                    <BarChart
                                        :cases="state.Confirmados"
                                        :deaths="state.Mortos"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import BarChart from "./BarChart.vue";

export default {
    props: ["propData"],
    components: { BarChart },
    data() {
        return {
            selectedRowIndex: -1,
            data: JSON.parse(this.propData),
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

.underline {
    cursor: pointer;
    color: #666;
    margin: 0;
    text-transform: uppercase;
    display: inline-block;
}

.underline:after {
    display: block;
    content: "";
    border-bottom: solid 1px black;
    transform: scaleX(0);
    transition: transform 250ms ease-in-out;
}
.table-row[aria-expanded="true"] .accordion-collapse {
    background-color: #f2f2f2;
}

.underline:hover:after {
    transform: scaleX(1);
}

.underline.fromLeft:after {
    transform-origin: 0% 50%;
}
</style>
