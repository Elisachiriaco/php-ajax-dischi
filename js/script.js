const app = new Vue({
    el: '#app',
    data:{
        dischi:[],
        genere:[],
        selectedGenere:[],
        apiPath:'./server.php'
    },
    methods:{
        changeSearch(){
            this.getData(this.selectedGenere);
        },
        getData(genre = null){
            let path;
            if(genre){
                path = `${this.apiPath}?genre=${genre}`
            } else {
                path = this.apiPath;
            }
            axios.get(path).then((res)=>{
                // console.log(res)
                this.dischi = res.data;
                if(this.genere.length < 1){
                    this.dischi.forEach((disco)=>{
                        if(!this.genere.includes(disco.genre)){
                            this.genere.push(disco.genre);
                        }
                    })
                }
            })
        }
    },
    mounted(){
        this.getData();
    }
})