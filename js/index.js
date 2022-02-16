function liClick(elementId)
{
    //Enlève la classe "active" de toutes les éléments li
    $( "li" ).removeClass( "active" );
    //Ajoute la classe active à l'élément li cliqué
    $(document.getElementById(elementId)).addClass( "active" );
    //Met à jour la description
    $.ajax({
        url : 'php/description/'+elementId+'.php',
        type : 'GET',
        success : function(msg){
            var desc = document.getElementById("description");
            desc.innerHTML=msg;
       }    
        
    });
}

liClick('Calculatrice');