
function init() {
    new Vue({
        el: "#app",
        data: {
            'img': '',
            'albums': []
        },
        mounted() {
            axios.get('data.php')
            .then(data =>{
                this.albums= data.data.response; 
                for (let i = 0; i < this.albums.length; i++) {
                    const element = albums[i];
                }                   
            })
                .catch(() => console.log('error'));
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