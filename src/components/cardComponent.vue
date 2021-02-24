<template>
    <v-card
        class="mx-auto my-12"
        max-width="300"
    >
        <v-img
        height="250"
        :src="data.img_url"
        ></v-img>

        <v-card-title><h3 class="card-title">{{data.title}}</h3></v-card-title>

        <v-divider class="mx-4"></v-divider>

        <v-card-text>
        <v-row class="pl-4">
            <v-col cols="6" class="d-flex align-center pa-0 justify-start ">
                <v-icon
                    medium
                    color="orange darken-2"
                >
                    mdi-phone
                </v-icon>
                <p class="pt-2 pl-3">{{data.our_sent}}</p>
            </v-col>
            <v-col cols="6" class="d-flex align-center pa-0 justify-start ">
                <v-icon
                    medium
                    color="orange darken-2"
                >
                    mdi-thumb-up-outline
                </v-icon>
                <p class="pt-2 pl-3">{{data.our_likes}}</p>
            </v-col>
            <v-col cols="6" class="d-flex align-center pa-0 justify-start ">
                <v-icon
                    medium
                    color="orange darken-2"
                >
                    mdi-star
                </v-icon>
                <p class="pt-2 pl-3">{{data.likes}}</p>
            </v-col>
            <v-col cols="6" class="d-flex align-center pa-0 justify-start ">
                <v-icon
                    medium
                    color="orange darken-2"
                >
                    mdi-forum
                </v-icon>
            
            </v-col>
        </v-row>
        </v-card-text>

        <v-card-actions class="d-flex justify-center">
            <v-btn
                color="#237F11"
                class="mb-3 send-prank-btn"
            >
                Send This Prank
            </v-btn>
        </v-card-actions>
    </v-card>
</template>
<script>
export default {
    props: {
        data : {
            type : Object,
            required : true
        }
    }
}
</script>
