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
   function oddNumbers() {
     for (var n = 1; n <= 20; n++) {
        var randomNum = Math.floor(Math.random() * 100) + 1;
        if (randomNum % 3 == 0) {
            console.log(randomNum + " is odd ");
        } 
     }
    }

    oddNumbers();

    var works = ['pizza', 'cheese', 'cake'];
    var alphabetOrder = works.sort();
    console.log(alphabetOrder)
    var commaInBetween = alphabetOrder.split(',');
    console.log(commaInBetween);

    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.
})();