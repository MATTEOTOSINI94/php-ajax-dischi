new Vue({

    el:"#root",

    data:{
        dischiArr:[],
        musica:"?musica=",
        variabile:"",
        
    },

    methods:{

        filterMusicGenre(){
            axios.get("http://localhost/php-ajax-dischi/api/json.php" + this.musica + this.variabile).then((disco) =>{
            this.dischiArr = disco.data
            console.log(this.dischiArr)
        })
        }
    },

    mounted(){
        axios.get("http://localhost/php-ajax-dischi/api/json.php").then((disco) =>{
        this.dischiArr = disco.data
        console.log(this.dischiArr)
        })
    }
})