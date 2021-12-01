new Vue({

    el:"#root",

    data:{
        dischiArr:[]

    },

    mounted(){
        axios.get("http://localhost/php-ajax-dischi/api/json.php").then((disco) =>{
        this.dischiArr = disco.data
        console.log(this.dischiArr)
        })
    }
})