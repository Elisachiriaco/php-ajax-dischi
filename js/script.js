const app = new Vue({
    el: '#app',
    data:{
        dischi:[],
        genere:[],
        selectedGenere:[],
        apiPath:'./server.php'
    },
    methods:{

    },
    mounted(){
        axios.get('server.php').then((res)=>{
            console.log(res)
            this.dischi = res.data;
            console.log(this.dischi)
        })
    }
})