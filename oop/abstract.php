<?php
// Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

// An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

// An abstract class or method is defined with the abstract keyword:
echo "Tusaale 1 <br>";
echo "...........................................................................<br>";
abstract class person{
    // creating abstract method
    abstract protected function shaqsi($name): string;
}
class child extends person{
    // using abstrct method we declared above. waa waajib in magaciisa la isticaamol iyo return type kana isku mid ahaadaan
    public function shaqsi($name): string{ //: string waa return type ka oo abstractiga waa string
        if($name=='abdifitah'){
            $perfix ="ENG";
        }
        elseif($name =='sucaado'){
            $perfix ='Drs';
        }else{
            $perfix ='';
        }
        return "{$perfix} {$name}";
    }
}
$person= new child();
echo $person->shaqsi('abdifitah');
echo "<br>";
echo $person->shaqsi('sucaado');
echo "<br>";
echo $person->shaqsi('Jimcaale');
echo "<br>";
echo "<br>";
echo "Tusaale 2 absract <br>";
echo "...........................................................................<br>";
// example kaan waxaan ku eegeenaa in child class ka uu isticmaali karo argumentiyo ka badan kii abstract classka lagu declare gareyay
abstract  class parentt{
    abstract  protected function fname($name);
}
class child2 extends parentt{
    public function fname($name,$dhibic='.',$salaan='Mudane '){
        if ($name=="Abdifitah"){
            $horgale = "Eng";
        }elseif($name=="sucaado"){
            $horgale='Drs';
        }else{
            $horgale='';
        }
        return "{$salaan}{$horgale}{$dhibic}{$name}";
    }
 }
 $childclass = new child2();
 echo $childclass->fname('Abdifitah');
 echo "<br>";
 echo $childclass->fname('sucaado');
 echo "<br>";
 echo $childclass->fname('geedi');
