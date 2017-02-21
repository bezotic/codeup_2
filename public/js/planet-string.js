(function(){
    "use strict";

    var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
    var planetsArray;

    // TODO: Convert planetsString to an array, save it to planetsArray.
    planetsArray = planetsString.split('|');
    console.log(planetsArray);

    // TODO: Create a string with <br> tags between each planet. console.log() your results.
    //       Why might this be useful?
    planetsString = planetsArray.join(',');
    console.log('planet string: ' + planetsString);
   

   var loopedPlanets = '';
   
   planetsArray.forEach(function(planet,index,array){
       
            console.log(loopedPlanets += planet + "|");
        
          

     });

    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.
})();