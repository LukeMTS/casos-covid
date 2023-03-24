<template>
    <div class="row justify-content-center">
        <div class="w-50">
            <Bar :options="chartOptions" :data="chartData" />
        </div>
    </div>
</template>

<script>
import { Bar } from "vue-chartjs";
import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale,
} from "chart.js";

ChartJS.register(
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale
);

// ChartJS.defaults.color = "#fff";

export default {
    name: "BarChart",
    components: { Bar },
    props: ["cases", "deaths"],
    data() {
        return {
            chartData: {
                labels: ["Confirmados", "Mortos"],
                datasets: [
                    {
                        label: "Vítimas",
                        backgroundColor: ["yellow", "red"],
                        data: [this.cases, this.deaths],
                    },
                ],
            },
            chartOptions: {
                responsive: true,
                plugins: {
                    label: { color: "green" },
                    legend: {
                        display: false,
                    },
                },
            },
        };
    },
};
</script>
