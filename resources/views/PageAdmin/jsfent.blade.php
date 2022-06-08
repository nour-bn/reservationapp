
<script>
    document.getElementById("button").addEventListener("click",function (){
        document.querySelector(".form").style.display = "flex";
    })

    function myfunction(num){
        var y = document.getElementById(num);
        if(y.style.display === "none"){
            y.style.display= "flex";
        }else {
            y.style.display = "none";
        }
    }
        /*function myfunction() {
            return document.querySelector(".formdelete").style.display = "flex";
        }*/

    /*function myfunctionedit(n){
        var b = document.getElementById(n);
        if(b.style.display === "none"){
            b.style.display= "flex";
        }else {
            b.style.display = "none";
        }
    }*/
    function myfunctionedit(){
            return document.querySelector(".formedit").style.display = "flex";

    }

    document.querySelector(".bottn").addEventListener("click",function (){
        document.querySelector(".formedit").style.display = "none";
    })

    document.querySelector(".bbton").addEventListener("click",function (){
        document.querySelector(".formedit").style.display = "none";
    })

    document.querySelector(".bot").addEventListener("click",function (){
        document.querySelector(".form").style.display = "none";
    })
    document.querySelector(".bott").addEventListener("click",function (){
        document.querySelector(".formdelete").style.display = "none";
    })

    document.querySelector(".bottd").addEventListener("click",function (){
        document.querySelector(".formdelete").style.display = "none";
    })

</script>
@yield('js')
