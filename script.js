
function init() {
    new Vue({
        el: "#app",
        data: {
            'img': '',
            'albums': []
        },
        mounted() {
            axios.get('data.php')
            .then(r  =>{
                console.log(r);
                this.albums= r.data; 
                for (let i = 0; i < this.albums.length; i++) {
                    const element = albums[i];
                }                   
            })
                .catch(e => console.log(e));


        },
        computed: {
            albumSort: function() {
                let albumDateSort = this.albums.sort((a,b) => {
                    return a.albumDateSort - b.albumDateSort
                })
                }
            }
    });
}

document.addEventListener("DOMContentLoaded",init);
init();