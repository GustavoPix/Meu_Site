const vm_header = new Vue({
    el:"#header",
    data:{
        open:false
    },
    methods: {
        toogleMenu(){
            this.open = !this.open;
        },
        closeMenu()
        {
            this.open = false;
        }
    },
    created() {
    },
});