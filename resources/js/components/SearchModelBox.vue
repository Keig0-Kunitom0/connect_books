<template>
  <div class="search-model-box" ref="search-model-box">
      <div class="h-100 d-flex align-i tems-center justify-content-center">
        <div class="search-close-btn" @click="closeModal">+</div>
        <form class="search-model-form" @submit.prevent="fugafuga">
          <input type="text"  v-model="keyword"  id="search-input" placeholder="キーワードを入力">
        </form>
      </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      keyword: "",
    }
  },
  methods: {
    fugafuga(){
      this.closeModal();
      this.$emit('hogehoge',this.keyword);
    },
    closeModal(){
      console.log("close modal in vue");
      console.log(this.$refs["search-model-box"]);
      this.$refs["search-model-box"].style.display = "none";
    }
  }
}
</script>

<style scoped>
form {
  margin: 100px;
}
</style>
