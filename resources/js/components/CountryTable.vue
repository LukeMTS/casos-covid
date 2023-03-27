<template>
    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <h2 class="card-header text-center">Totais</h2>
                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-center py-3">
                            <div class="col-12 col-md-6 text-center">
                                <div class="card text-center mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Total de casos
                                        </h5>
                                        <h3>
                                            <span
                                                class="badge text-bg-warning"
                                                >{{
                                                    totalCases.toLocaleString()
                                                }}</span
                                            >
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card text-center mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Total de mortes
                                        </h5>
                                        <h3>
                                            <span
                                                class="badge text-bg-danger"
                                                >{{
                                                    totalDeaths.toLocaleString()
                                                }}</span
                                            >
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-12 col-md-6 text-center">
                                <BarChart
                                    :cases="totalCases"
                                    :deaths="totalDeaths"
                                    classes="w-100"
                                />
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
            data: JSON.parse(this.propData),
        };
    },
    computed: {
        totalCases() {
            return this.data.states.reduce(
                (accum, item) => accum + item.Confirmados,
                0
            );
        },
        totalDeaths() {
            return this.data.states.reduce(
                (accum, item) => accum + item.Mortos,
                0
            );
        },
    },
};
</script>
