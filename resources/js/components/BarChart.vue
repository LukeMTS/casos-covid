<template>
    <div class="row justify-content-center">
        <div :class="classes">
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
    props: ["cases", "deaths", "classes"],
    data() {
        return {
            chartData: {
                labels: ["Confirmados", "Mortos"],
                datasets: [
                    {
                        label: "Vítimas",
                        backgroundColor: ["#ffc107", "red"],
                        data: [this.cases, this.deaths],
                    },
                ],
            },
            chartOptions: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                },
            },
        };
    },
};
</script>
