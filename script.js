
function init() {
    new Vue({
        el: "#app",
        data: {
            'img': ''
        },
        mounted() {
            axios.get('data.php')
                .then(r => {
                   
                })
                .catch(e => {
                    console.log("Fatal Error");
                })
        }
    });
}
document.addEventListener("DOMContentLoaded",init);
init();