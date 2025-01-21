<?php
   //created by kadari
   class HelloWorldClass {
      //property
      public $Name;
      public function __construct($name){
         //set the name propperty with the  vallue of the incoming paramtere;
         $this->Name=$name;
      }//constructor

      public function Welcome(){
         // using the value in the name property return a hello message.
         return "Hello $this->Name: Welcome!";

      }//end method
   }//end class


?>