import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    currentIndex:''
  },
  getters:{
    getCurrentIndex(state){
      return state.currentIndex;
    }
  },
  mutations: {
    setCurrentIndex(state,data){
      state.currentIndex = data;
    }
  },
  actions: {
    changeCurrentIndex({commit},data){
      commit('setCurrentIndex',data);
    }
  },
  modules: {
  }
})
