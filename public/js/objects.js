(function(){
    "use strict";

    // TODO: Create person object
     var person = {};
     person.firstName = "Ricardo";
     person.lastName = "De Los Santos";
     person.sayHello = function () {
     	console.log('Hello my name is ' + this.firstName + " " + this.lastName);
     }

     person.sayHello();

    // TODO: Create firstName and lastName properties in your person object; assign your name to them

    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    // Say hello from the person object.
    // person.sayHello();
})();