<template>
    <div class="domande">
        <h1 v-if="isLoading">Caricamento in corso...</h1>
        <table v-if="!isLoading">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>domanda</th>
                </tr>
            </thead>
            <tr v-for="(domanda, index) in domande" :key="index">
                <td>{{ domanda.id }}</td>
                <td>{{ domanda.question }}</td>
            </tr>
        </table>
    </div>
</template>

<script>
//import axios from "axios";

export default {
    name: "Domande",
    data() {
        return {
            domande: [],
            isLoading: true,
        }
    },
    async mounted() {
        this.isLoading = true;
        let response = await this.axios.get("http://127.0.0.1:8000/api/questions");
        this.domande = response.data;
        this.isLoading = false;
    },
    methods: {
        scrivi() {
            this.message = "sono un pirla";
        },
    }
}
</script>