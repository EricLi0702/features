<template>
  <v-container>
    <v-row class="text-center">
      <v-col cols="12">
        <h1 class="mt-10">Prank Call Your Friends <br> With The Ownage PrankDial App!</h1>
      </v-col>
      <v-col >
      <v-col cols="12" class="mt-10">
        <v-row class="d-flex justify-center align-center">
          <v-btn
            rounded
            color="#2fdbd9"
            dark
            x-large
            class="ma-5 hover-btn"
            @click="getPrankData('view-all-pranks')"
            :loading="params[0].loading"
          >
            View All Pranks
          </v-btn>
          <v-btn
            rounded
            color="#2fdbd9"
            dark
            x-large
            class="ma-5 hover-btn"
            @click="getPrankData('new-prank-calls')"
            :loading="params[1].loading"
          >
            New Pranks
          </v-btn>
          <v-btn
            rounded
            color="#2fdbd9"
            dark
            x-large
            class="ma-5 hover-btn"
            @click="getPrankData('food-restaurant-prank-calls')"
            :loading="params[2].loading"
          >
            Food and Restaurants
          </v-btn>
        </v-row>
      </v-col>
        <v-dialog
          v-model="isOpenDialog"
          width="1000"
          scrollable
          @click:outside="closeDialog"
        >
          <!-- <v-row class="bg-white">
            <v-col cols="12" class="text-center">
              
            </v-col>
            <v-col cols="12" >

            </v-col>
          </v-row> -->
      <v-card>
        <v-card-title>
          <h2 class="text-primary ma-3 ">Prank Data</h2>
        </v-card-title>
        <v-divider></v-divider>
        <v-card-text style="height: 700px;">
          <v-row>
            <v-col cols="4" v-for="(data, i) in resData" :key="i">
              <Category v-if="isGettingAllPrank" :data="data"/>
              <Card v-else :data="data"/>
            </v-col>
          </v-row>
        </v-card-text>
        <v-divider></v-divider>
        <v-card-actions class="pa-5 d-flex justify-center">
          <v-pagination
            v-model="paginationData.current_page"
            :length="paginationData.total_pages"
            total-visible="9"
            @input="callSpecPage"
          ></v-pagination>
        </v-card-actions>
      </v-card>
        </v-dialog>
      
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
  import axios from 'axios';
  import Card from './cardComponent';
  import Category from './categoryComponent';
  import {mapGetters,mapActions} from 'vuex';

  
  export default {
    name: 'HelloWorld',
    components: {
      Card,
      Category
    },
    data: () => ({
      params:[
        {
          url:"https://t0u4i52ro7.execute-api.us-east-1.amazonaws.com/api/v1/category?limit=5&page=",
          loading:false,
          type:"view-all-pranks"
        },
        {
          url:"https://t0u4i52ro7.execute-api.us-east-1.amazonaws.com/api/v1/prank-idea?limit=3&page=",
          loading:false,
          type:"new-prank-calls"
        },
        {
          url:"https://t0u4i52ro7.execute-api.us-east-1.amazonaws.com/api/v1/prank-idea/view-all-pranks?limit=10&page=",
          loading:false,
          type:"food-restaurant-prank-calls"
        }
      ],
      resData : [],
      isOpenDialog : false,
      isGettingAllPrank : false,
      paginationData : {
        total_pages:0,
        current_page:0,
      },
      
    }),
    computed:{
      currentPath(){
        return this.$route
      },
      ...mapGetters([
        'getCurrentIndex'
      ])
    },
    methods: {

      ...mapActions([
        'changeCurrentIndex', 
      ]),

      getPrankData(type){
        let index = this.params.findIndex(param=>param.type == type)
        this.$router.push(`${this.currentPath.path}/${this.params[index].type}`)
        this.getData(index)
      },
      
      async getData(index,page=1){
        this.params[index].loading = true;
        this.changeCurrentIndex(index)
        axios.get(`${this.params[index].url}${page}`)
              .then(res=>{
                this.params[index].loading = false
                this.isOpenDialog = true;
                this.resData = res.data.data;
                if(this.params[index].type == 'view-all-pranks'){
                  this.isGettingAllPrank = true;
                }else{
                  this.isGettingAllPrank = false;
                }
                this.paginationData = res.data.pagination;
              })
              .catch(err=>{
                console.log(err)
              });
      },

      closeDialog(){
        this.$router.push('/')
      },
      callSpecPage(val){
        this.getData(this.getCurrentIndex,val)
      },
    }
  }
</script>
