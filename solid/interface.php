<?php

// BAD
// interface Worker {
//     public function work();
//     public function eat();
// }


// class Robot implements Worker {
//     public function work()
//     {
//         echo "Robot is working";
//     }

//     // ロボットは食べることができないので例外をスロー
//     public function eat()
//     {
//         throw new Exception("Robot cannot eat");
//     }
// }


// class Human implements Worker {
//     public function work()
//     {
//         echo "Human is working";
//     }
//     public function eat()
//     {
//         echo "Human is eating";
//     }
// }

// GOOD

interface Workable {
    public function work();
}

interface Eatable {
    public function eat();
}

// ロボットは Workable のみ実装
class Robot implements Workable {
    public function Work (){
        echo "Robot is working\n";
    }
}

// 人間は Workable, Eatable を実装
class Human implements Workable, Eatable {
    public function work() {
        echo "Human is working\n";
    }

    public function eat() {
        echo "Human is eating\n";
    }
}