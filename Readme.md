## HOME WORK - 12-10-2022

* Getting started
    - To create a PHP project 1st we need to install the necessary software on a local machine as known as
        - Xampp
        - Wampp
        - Laragon etc
        - Any code editor or text editor aka - vscode, sublime text, notepad++ 

    - After installation need to start `Apache` & `Mysql` to create a php enviroment 'if using xampp'

* After start `Apache` & `Mysql`
    - we have to create a file called index.php file 
    - after creating index.php
    - we can choose code or text editor with our own choice

* Start Coding
    - To start Coding 1st we need to declare PHP like this

    ```
        <?php
            echo "This is a PHP project";
        ?>
    ```

* Variable declaration in PHP
    - To declare a variable in PHP must have to use the $ sign like 
    ```
        <?php
                $name = 'Atikur Rahaman Santo';
                echo "My name is ".name." ";
        ?>
    ```
    - Things we can't do to declare a variable
    . Can't use numbers first like
    . Can't use any symbols except `_`
    . Can't use any space to declare a variable in PHP
    . Can't use `-` symbol
    ```
        <?php
            $1name
            $)name
            $.name
            $#name
            $f-name
        ?>
    ```