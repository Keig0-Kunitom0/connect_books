import Vue from 'vue';
import { StreamBarcodeReader } from "vue-barcode-reader";
// import { ImageBarcodeReader } from "vue-barcode-reader";

const app = new Vue({
  el: '#app',
  data: {
  },
  components: {
    'stream-barcode-reader': StreamBarcodeReader, //カメラタイプ
    // 'image-barcode-reader': ImageBarcodeReader, // 画像ファイルから読み取りタイプ
  },
  methods:{
    onDecode (result) {
      console.log("decoded");
      console.log(result)
    },
    onLoaded (result) {
      console.log("loaded");
      console.log(result)
    },
    onError (result) {
      console.log("error");
      console.log(result)
    }    
  },
});