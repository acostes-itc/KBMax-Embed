var config;
document.addEventListener("DOMContentLoaded", function() {
    config = new kbmax.ConfiguratorEmbed({
        kbmaxUrl: "https://itc-dev.kbmax.com",
        elementId: "viewer",
        configuratorId: 65,
        showHeader: false,
        showDrawer: false,
        showMove: false,
        bindToFormSelector: "",
        loadStyle: "none",
    });                     
});

//********************************************************************************************** */
var nbClone = 0;
var nbRangee = 2;

function setClone(){
    console.log("setClone");
    config.setFields({"fCuisine": nbClone});
    document.getElementById('nbClone').innerHTML = nbClone;
}
function setRangee(nb){
    nbRangee = nb;
    config.setFields({"fRangée": nbRangee});
}

//********************************************************************************************** */
function addClone(){
    refMax = nbRangee*16;
    if (nbClone < refMax) 
    {
        nbClone++;
        document.getElementById('error').innerHTML = " ";
    }
    else document.getElementById('error').innerHTML = "Nombre de disjoncteur maximal atteint !";
    setClone();
}
function removeClone(){
    if(nbClone > 0) 
    {
        nbClone--;
        document.getElementById('error').innerHTML = " ";
    }
    else document.getElementById('error').innerHTML = "Aucun disjoncteur à supprimer !";
    setClone();
}

//********************************************************************************************** */
$(document).ready(function(){

    $("#AddClone").click(function(){
        addClone();
      });
    
    $("#RemoveClone").click(function(){
        removeClone();
    });

    $("#nbRangee").on('input',function(){
        setRangee($(this).val());
      });
});