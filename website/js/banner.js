const vm_banner = new Vue({
    el:"#bannerPrincipal",
    data:{
        produtoSite:"",
        lastCharModificado:0,
        status:1,
        produtos:[
            "Sites",
            "Games",
            "Integração de APIs",
            "Automação de processos",
            "Softwares"
        ],
        maxTime:70,
        proximoProduto:"",
        caracteres:"1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM!@#$%^&*()-=+[]{}<>?,.~"
    },
    methods: {
        updateProdutoSite(){
            if(this.lastCharModificado == this.proximoProduto.length && this.status == 2)
            {
                setTimeout(function(){
                    vm_banner.escolherProximoProduto();
                    vm_banner.updateProdutoSite();
                },10000);
                return 0;
            }
            else
            {
                if(this.produtoSite.length == this.proximoProduto.length)
                {
                    this.modificarCaractere();
                }
                else if(this.produtoSite.length > this.proximoProduto.length){
                    this.deleteCharProduto();
                }
                else
                {
                    this.addCharProduto();
                }
            }
            this.print();
            setTimeout(function(){
                vm_banner.updateProdutoSite();
            },100);
        },
        deleteCharProduto(){
            this.produtoSite = this.produtoSite.slice(0,this.produtoSite.length-1);
        },
        addCharProduto(){
            this.produtoSite += this.randomChar();
        },
        randomChar(){
            return this.caracteres[Math.floor(Math.random()*this.caracteres.length)];
        },
        modificarCaractere()
        {
            //debugger
            if(this.status == 1)
            {
                //this.produtoSite[this.lastCharModificado] = this.randomChar();
                this.produtoSite = this.produtoSite.slice(0,this.lastCharModificado) + this.randomChar() + this.produtoSite.slice(this.lastCharModificado + 1, this.produtoSite.length);
            }
            else
            {
                //this.produtoSite[this.lastCharModificado] = this.proximoProduto[this.lastCharModificado];
                this.produtoSite = this.produtoSite.slice(0,this.lastCharModificado) + this.proximoProduto[this.lastCharModificado] + this.produtoSite.slice(this.lastCharModificado + 1, this.produtoSite.length);
            }
            this.lastCharModificado++;
            if(this.lastCharModificado == this.produtoSite.length && this.status == 1)
            {
                this.lastCharModificado = 0;
                this.status = 2;
            }
        },
        escolherProximoProduto()
        {
            this.proximoProduto = this.produtos[Math.floor(Math.random()*this.produtos.length)];
            this.lastCharModificado = 0;
            this.status = 1;
        },
        print()
        {
            console.log("-----");
            console.log(`produtoSite => ${this.produtoSite}`);
            console.log(`lastCharModificado => ${this.lastCharModificado}`);
            console.log(`proximoProduto => ${this.proximoProduto}`);

        }
    },
    created() {
        this.escolherProximoProduto();
        this.updateProdutoSite();
    },
});