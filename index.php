<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание JS</title>
</head>
<body>
    <?php
    interface product
    {
      function name();
      
      function price();
     
      function rate();
      
    }
    class water implements product
    {
      public $name;
      public $price;
      public $rate;
      function __construct($name,$price,$rate)
      {
        $this -> name = $name;
        $this -> price = $price;
        $this -> rate = $rate;

      }
      function name()
      {
        echo "Название:".$this -> name."<br>";
      }
      function price()
      {
        echo "Цена:".$this -> price."<br>";
      }
      function rate()
      {
        echo "Рейтинг:".$this -> rate."<br>";
      }
    }
    class bread implements product
    {
      public $name;
      public $price;
      public $rate;
      function __construct($name,$price,$rate)
      {
        $this -> name = $name;
        $this -> price = $price;
        $this -> rate = $rate;

      }
      function name()
      {
        echo "Название:".$this -> name."<br>";
      }
      function price()
      {
        echo "Цена:".$this -> price."<br>";
      }
      function rate()
      {
        echo "Рейтинг:".$this -> rate."<br>";
      }
    }

    class meat implements product
    {
      public $name;
      public $price;
      public $rate;
      function __construct($name,$price,$rate)
      {
        $this -> name = $name;
        $this -> price = $price;
        $this -> rate = $rate;

      }
      function name()
      {
        echo "Название:".$this -> name."<br>";
      }
      function price()
      {
        echo "Цена:".$this -> price."<br>";
      }
      function rate()
      {
        echo "Рейтинг:".$this -> rate."<br>";
      }
    }

    interface users
    {
      function login();
      function password();
    }

    class user implements users
    {
      public $login;
      public $password;
      function __construct($login,$password)
      {
        $this -> login = $login;
        $this -> password = $password;
      }
      function login()
      {
        echo "Логин пользователя:".$this -> login."<br>";
      }
      function password()
      {
        echo "Пароль пользователя:".$this -> password."<br>";
      }
    }

    class admin implements users
    {
      public $login;
      public $password;
      function __construct($login,$password)
      {
        $this -> login = $login;
        $this -> password = $password;
      }
      function login()
      {
        echo "Логин админа:".$this -> login."<br>";
      }
      function password()
      {
        echo "Пароль админа:".$this -> password."<br>";
      }
    }

    class developer implements users
    {
      public $login;
      public $password;
      function __construct($login,$password)
      {
        $this -> login = $login;
        $this -> password = $password;
      }
      function login()
      {
        echo "Логин разработчика:".$this -> login."<br>";
      }
      function password()
      {
        echo "Пароль разработчика:".$this -> password."<br>";
      }
    }

    class order implements product,users
    {
      public $login;
      public $password;
      public $name;
      public $price;
      public $rate;
      function __construct($login,$password,$name,$price,$rate)
      {
        $this -> login = $login;
        $this -> password = $password;
        $this -> name = $name;
        $this -> price = $price;
        $this -> rate = $rate;

      }
      function login()
      {
        echo "Логин:".$this -> login."<br>";
      }
      function password()
      {
        echo "Пароль:".$this -> password."<br>";
      }
      function name()
      {
        echo "Название:".$this -> name."<br>";
      }
      function price()
      {
        echo "Цена:".$this -> price."<br>";
      }
      function rate()
      {
        echo "Рейтинг:".$this -> rate."<br>";
      }
      function order()
      {
        echo "Пользователь: ".$this -> login."<br>"."Купил:".$this -> name."<br>";
      }
    }
    
    $order = new order("RidRed","1234","Свинина","259руб","4,7");
    $order -> order();

            ?>
    
</body>
</html>