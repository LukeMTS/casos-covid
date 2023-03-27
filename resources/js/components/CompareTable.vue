<template>
    <div class="card text-center">
        <div class="card-header">Comparar 2 países</div>
        <div class="card-body">
            <h5 class="card-title">Selecione os países que deseja comparar</h5>

            <div class="row justify-content-center my-5">
                <div class="col-12 col-md-4 mb-md-0 mb-5">
                    <select
                        v-model="country1"
                        :disabled="loading"
                        class="form-select"
                        aria-label="Default select example"
                    >
                        <option :value="-1" selected disabled>País 1</option>
                        <option v-for="country in data" :value="country">
                            {{ country }}
                        </option>
                    </select>
                </div>
                <div class="col-12 col-md-4">
                    <select
                        v-model="country2"
                        :disabled="loading"
                        class="form-select"
                        aria-label="Default select example"
                    >
                        <option :value="-1" selected disabled>País 2</option>
                        <option v-for="country in data" :value="country">
                            {{ country }}
                        </option>
                    </select>
                </div>
            </div>

            <button
                :disabled="loading"
                @click="compare"
                class="btn btn-success"
            >
                <div v-if="loading">
                    <div
                        class="spinner-grow spinner-grow-sm pr-4"
                        role="status"
                    ></div>
                    <span style="margin-left: 0.4rem">Comparando...</span>
                </div>
                <div v-else>
                    <span>Comparar</span>
                </div>
            </button>

            <div v-if="compareData.length > 0">
                <div class="row justify-content-center py-3">
                    <div class="col-12 col-md-6 text-center">
                        <h5 class="card-title fw-bold">
                            {{ countriesData[0].Pais }}
                        </h5>
                        <div class="card text-center mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Total de mortes</h5>
                                <h3>
                                    <span class="badge text-bg-danger">{{
                                        countriesData[0].Mortos.toLocaleString()
                                    }}</span>
                                </h3>
                            </div>
                        </div>
                        <div class="card text-center mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Taxa de mortes</h5>
                                <h3>
                                    <span class="badge text-bg-danger"
                                        >{{
                                            (
                                                (countriesData[0].Mortos /
                                                    countriesData[0]
                                                        .Confirmados) *
                                                100
                                            ).toLocaleString()
                                        }}%</span
                                    >
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5 class="card-title fw-bold">
                            {{ countriesData[1].Pais }}
                        </h5>
                        <div class="card text-center mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Total de mortes</h5>
                                <h3>
                                    <span class="badge text-bg-danger">{{
                                        countriesData[1].Mortos.toLocaleString()
                                    }}</span>
                                </h3>
                            </div>
                        </div>
                        <div class="card text-center mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Taxa de mortes</h5>
                                <h3>
                                    <span class="badge text-bg-danger"
                                        >{{
                                            (
                                                (countriesData[1].Mortos /
                                                    countriesData[1]
                                                        .Confirmados) *
                                                100
                                            ).toLocaleString()
                                        }}%</span
                                    >
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center py-3">
                    <div class="col-12 col-md-6">
                        <div class="card text-center mb-3">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Diferença da taxa de mortes
                                </h5>
                                <h3>
                                    <span class="badge text-bg-warning"
                                        >{{
                                            (
                                                (countriesData[1].Mortos /
                                                    countriesData[1]
                                                        .Confirmados -
                                                    countriesData[0].Mortos /
                                                        countriesData[0]
                                                            .Confirmados) *
                                                100
                                            ).toLocaleString()
                                        }}%</span
                                    >
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-body-secondary">&nbsp;</div>
    </div>
</template>

<script>
import BarChart from "./BarChart.vue";

export default {
    props: ["countries"],
    components: { BarChart },
    data() {
        return {
            data: JSON.parse(this.countries),
            compareData: [],
            countriesData: [],
            loading: false,
            country1: -1,
            country2: -1,
        };
    },
    methods: {
        compare() {
            this.loading = true;

            axios
                .get(
                    `/api/compare-countries?country1=${this.country1}&country2=${this.country2}`
                )
                .then((response) => {
                    this.compareData = response.data;

                    this.compareData.forEach((states, index) => {
                        let totalCases = 0,
                            totalDeaths = 0;

                        states.forEach((state) => {
                            totalCases += state.Confirmados;
                            totalDeaths += state.Mortos;
                        });

                        this.countriesData[index] = {
                            Pais: states[0].Pais,
                            Confirmados: totalCases,
                            Mortos: totalDeaths,
                        };
                    });
                })
                .finally(() => (this.loading = false));
        },
    },
};
</script>
