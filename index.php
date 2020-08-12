<?php
$object = new User;
print_r(User);
class User
{
    public $name,$password;
    function save_user()
    {
        echo "Detaile saved in file";
    }
}
?> 