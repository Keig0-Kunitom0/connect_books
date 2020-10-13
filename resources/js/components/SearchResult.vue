<template>
<div>
  <div class="container">
    <div class="row">
      <div 
        v-for="book in books"
      　v-bind:key="book.id"
        class="col-xl-3 col-lg-3 col-md-6 col-sm-6"
      >
                <div class="single-new-arrival mb-50 text-center wow fadeInUp" id="image_item" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="popular-img">
                        <img
                        　v-bind:src="book.img_url"
                          alt="書籍画像"
                        >
                    </div>
                    <div class="popular-caption">
                        <h3>
                          <a v-bind:href="'/books/'+ book.id">{{ book.title }}</a>
                        </h3>
                    </div>
                </div>
            </div>
    </div>
  </div>
</div>
  
 
</template>

<script>
export default {
  props: ['searchText'],
  
  data(){
    return {
      books: [],
    };
  },
  watch:{
    searchText:function (newSearchText,oldSearchText) {
      console.log(newSearchText);
      this.getBooks();
    }
  },
  methods:{
    getBooks(){
      fetch(`/api/search?q=${this.searchText}`)
        .then(response => response.json())
        .then(data => {
          this.books = data;
          console.log(this.books)
          console.log(`/api/search?q=${this.searchText}`);
        })
    }
  }
}
</script>

<style scoped>
#image_item {
  
  /*枠をつける*/
  border: 8px solid #EEEEEE;
  
  /*影をつける*/
  box-shadow: 4px 4px 6px 1px #ccc;
  
  margin-left: 9px;
  margin-right: 9px;
  margin-bottom: 18px;
}


</style>