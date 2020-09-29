//import Vue from 'vue';
import Quagga from 'quagga'; // ES6

// const app = new Vue({
//   el: '#app',
//   data: {
//   },
//   components: {
//     //'quagga':Quagga,
//     // 'stream-barcode-reader': StreamBarcodeReader, //カメラタイプ
//     // 'image-barcode-reader': ImageBarcodeReader, // 画像ファイルから読み取りタイプ
//   },
//   created(){
//     Quagga.init({
//       inputStream : {
//         name : "Live",
//         type : "LiveStream",
//         target: document.querySelector('#camera-area')    // Or '#yourElement' (optional)
//       },
//       decoder : {
//         readers : ["code_128_reader"]
//       }
//     }, function(err) {
//         if (err) {
//             console.log(err);
//             return
//         }
//         console.log("Initialization finished. Ready to start");
//     });    
//   },
//   methods:{
//     barcode() {
//       console.log("start to analysis");
//       Quagga.start();
//     }
//   },
// });
Quagga.init({
      inputStream : {
        name : "Live",
        type : "LiveStream",
        target: '#cameraArea'
      },
      decoder : {
        readers : ["code_128_reader"]
      }
    }, function(err) {
        if (err) {
            console.log(err);
            return
        }
        console.log("Initialization finished. Ready to start");
    });    
    
Quagga.onDetected(function(data){
  console.log("barcode detected")
  console.log(data);
});