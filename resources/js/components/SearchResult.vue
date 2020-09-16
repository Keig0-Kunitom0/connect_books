<template>
<div>
  <div class="container">
    <div class="row">
      <div 
        v-for="book in books"
      　v-bind:key="book.id"
        class="col-xl-3 col-lg-3 col-md-6 col-sm-6"
      >
                <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="popular-img">
                        <img
                        　v-bind:src="book.Item.largeImageUrl"
                          alt="書籍画像"
                        >
                        <div class="favorit-items">
                            <!-- <span class="flaticon-heart"></span> -->
                            <img src="/assets/img/gallery/favorit-card.png" alt="">
                        </div>
                    </div>
                    <div class="popular-caption">
                        <h3>
                          <a v-bind:href="book.Item.affiliateUrl" target="_blank">{{ book.Item.title }}</a>
                        </h3>
                        <div class="rating mb-10">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span>¥{{ book.Item.itemPrice }}</span>
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
          this.books = data.Items;
          console.log(this.books)
          console.log(`/api/search?q=${this.searchText}`);
        })
    }
  }
}
</script>

<style scoped>

</style>