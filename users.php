<?php

declare(strict_types=1);

// Autoloader function
spl_autoload_register(function ($class) {
    $prefix = 'MyProject\\';
    $base_dir = __DIR__ . '/MyProject/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

// Create regular users
$user1 = new User("KUKI HD", "KUKI", "123456");
$user2 = new User("Alexander Akulov", "Alexander", "123456");
$user3 = new User("Alex HD", "Alex", "123456");

// Create a super user
$superUser = new SuperUser("Admin User", "admin", "adminpass", "Administrator");

// Display information for all users
echo "\nRegular Users Information:\n";
echo "------------------------\n";
$user1->showInfo();
echo "\n";
$user2->showInfo();
echo "\n";
$user3->showInfo();
echo "\n";

echo "Super User Information:\n";
echo "---------------------\n";
$superUser->showInfo();
echo "\n";

// Display SuperUser information using getInfo()
echo "Super User Details (using getInfo()):\n";
echo "--------------------------------\n";
print_r($superUser->getInfo());
echo "\n";

// Display total count of users
echo "\nStatistics:\n";
echo "-----------\n";
echo "Всего обычных пользователей: " . User::getUserCount() . "\n";
echo "Всего супер-пользователей: " . SuperUser::getSuperUserCount() . "\n"; 
