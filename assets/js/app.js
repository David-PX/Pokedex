
$(document).ready(function () { 
 

    var setColor = document.getElementById('filaCol').innerHTML;


     if (setColor == 'Kanto' ||setColor == 'kant'){
        $('.Kanto').css("color", "red");

     }else if (setColor == 'Johto' || setColor == 'Johto'){
            $('.Johto').css("color", "yellow");
     }else if (setColor == 'Hoenn' || setColor == 'hoenn'){
            $('.Hoenn').css("color", "#14B76E");
     }else if (setColor == 'Sinnoh' || setColor == 'sinnoh'){
            $('.Sinnoh').css("color", "blue");
     }else if (setColor == 'Teselia' || setColor == 'teselia'){
            $('.Teselia').css("color", "#14B99E");
     }else if (setColor == 'Kalos' || setColor == 'kalos'){
            $('.Kalos').css("color", "#84B76E");
     }else{
      $('.Alola').css("color", "#24C76E");
     }

     






    
 });