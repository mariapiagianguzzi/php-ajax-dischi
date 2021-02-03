let app = new Vue({
  el: "#app",
  data: {
    listaCd: [],
  },
  mounted() {
    axios.get("dist/php/data.php").then((response) => {
      let cd = response.data;
      this.listaCd = cd;
    });
  },
});
