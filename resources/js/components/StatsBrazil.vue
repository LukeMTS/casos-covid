<template>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Casos - total acumulado</th>
                <th scope="col">Mortes - total acumulado</th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr colspan="3" @click="toggleAccordion(item)" v-for="item in data">
                <td :class="{ show: item.showChart }" scope="row">1</td>
                <td>
                    {{ item.name }}
                </td>
                <td>{{ item.number }}</td>
            </tr> -->
            <tr
                v-for="(row, index) in data"
                :key="index"
                @click="expandRow(index)"
            >
                <td>{{ row.name }}</td>
                <td>{{ row.number }}</td>
                <td>{{ "11" }}</td>
            </tr>
            <tr v-for="item in data" :key="'expansion-row-' + index">
                <td :colspan="3">
                    <div v-if="selectedRowIndex === index">
                        <p>Expanded row content goes here</p>
                    </div>
                </td>
            </tr>
            <!-- <tr colspan="3">
                <td>
                    <div :class="{ show: item.showChart }">
                        <div class="collapse" :class="{ show: item.showChart }">
                            <div class="card-body">GRÁFICO</div>
                        </div>
                    </div>
                </td>
            </tr> -->
        </tbody>
    </table>
</template>

<script>
export default {
    data() {
        return {
            selectedRowIndex: -1,
            data: [
                { name: "teste", number: 123, showChart: false },
                { name: "teste222", number: 123, showChart: false },
                { name: "teste33", number: 123, showChart: false },
            ],
        };
    },
    methods: {
        toggleAccordion(item) {
            item.showChart = !item.showChart;
        },
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

<style scoped></style>
