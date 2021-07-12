
let msg = document.getElementById("msg");

document.getElementById("move").addEventListener("click", function(event){

    document.location.href = "#questoes";
    
});

document.getElementById("form1").addEventListener("submit", function(event){

    let ajax = new XMLHttpRequest(); 

    ajax.onreadystatechange = function(){

        if(this.status == 200 && this.readyState == 4){

            msg.style.display = "block";
            msg.innerText = this.responseText;

        }

    };
    ajax.open("GET", "response.php?rsp1="+ event.target.rsp1.value +"&rsp2="+ event.target.rsp2.value, true);
    ajax.send();
    event.preventDefault();

});
document.getElementById("form2").addEventListener("submit", function(event){

    let ajax = new XMLHttpRequest(); 

    ajax.onreadystatechange = function(){

        if(this.status == 200 && this.readyState == 4){

            msg.style.display = "block";
            msg.innerText = this.responseText;

        }

    };
    ajax.open("GET", "response.php?rsp3="+ event.target.rsp3.value +"&rsp4="+ event.target.rsp4.value, true);
    ajax.send();
    event.preventDefault();

});
document.getElementById("form3").addEventListener("submit", function(event){

    let ajax = new XMLHttpRequest(); 

    ajax.onreadystatechange = function(){

        if(this.status == 200 && this.readyState == 4){

            msg.style.display = "block";
            msg.innerText = this.responseText;

        }

    };
    ajax.open("GET", "response.php?rsp5="+ event.target.rsp5.value +"&rsp6="+ event.target.rsp6.value, true);
    ajax.send();
    event.preventDefault();

});

document.getElementById("form4").addEventListener("submit", function(event){

    let ajax = new XMLHttpRequest(); 

    ajax.onreadystatechange = function(){

        if(this.status == 200 && this.readyState == 4){

            msg.style.display = "block";
            msg.innerText = this.responseText;

        }

    };
    ajax.open("GET", "response.php?rsp7="+ event.target.rsp7.value +"&rsp8="+ event.target.rsp8.value, true);
    ajax.send();
    event.preventDefault();

});
document.getElementById("form5").addEventListener("submit", function(event){

    let ajax = new XMLHttpRequest(); 

    ajax.onreadystatechange = function(){

        if(this.status == 200 && this.readyState == 4){

            msg.style.display = "block";
            msg.innerText = this.responseText;

        }

    };
    ajax.open("GET", "response.php?rsp9="+ event.target.rsp9.value +"&rsp10="+ event.target.rsp10.value, true);
    ajax.send();
    event.preventDefault();

});
document.getElementById("form6").addEventListener("submit", function(event){

    let ajax = new XMLHttpRequest(); 

    ajax.onreadystatechange = function(){

        if(this.status == 200 && this.readyState == 4){

            msg.style.display = "block";
            msg.innerText = this.responseText;

        }

    };
    ajax.open("GET", "response.php?rsp11="+ event.target.rsp11.value +"&rsp12="+ event.target.rsp12.value, true);
    ajax.send();
    event.preventDefault();

});