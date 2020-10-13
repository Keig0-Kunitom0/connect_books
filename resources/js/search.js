require('./bootstrap');

import './bootstrap';
import Vue from 'vue';
import SearchResult from './components/SearchResult';
import SearchModelBox from './components/SearchModelBox';

const app = new Vue({
  el: '#app',
  data: {
    searchText: "",
  },
  components: {
    'search-result': SearchResult,
    'search-modelbox': SearchModelBox,
  },
  methods:{
    search(keyword){
      this.searchText = keyword;
    },
    
    openModal() {
      console.log("click");
      $('.search-model-box').fadeIn(400);
    }
  },
});