<?php

// BAD

// 親クラス
// abstract class Animal
// {
//     public function walk()
//     {
//         echo "Walking";
//     }
// }


// // 子クラス
// class Dog extends Animal
// {
//     public function walk()
//     {
//         echo "Dog is walking";
//     }
// }


// // 子クラス
// class Fish extends Animal
// {
//     public function walk()
//     {
//         // 魚は泳げないので例外をスロー
//         throw new Exception('Fish cannot walk');
//     }
// }


// GOOD

// 動物規定クラス
abstract class Animal
{
    public function eat(){}
}

// 歩く動物動物クラス
abstract class WalkingAnimal extends Animal
{
    public function walk(){}
}

// 泳ぐ動物規定クラス
abstract class SwimmingAnimal extends Animal
{
    public function swim(){}
}


// 子クラス
class Dog extends WalkingAnimal
{
    public function walk()
    {
        echo "Dog is walking";
    }
}


// 子クラス
class Fish extends SwimmingAnimal
{
    public function swim()
    {
        echo "Fish is swimming";
    }
}