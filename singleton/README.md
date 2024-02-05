# Singleton Design Pattern in PHP

## Overview

The Singleton Design Pattern is a creational design pattern that ensures a class has only one instance and provides a global point of access to that instance. This pattern is particularly useful when you want to control access to a shared resource, such as a database connection, logging service, or configuration manager.

## Implementation

To implement the Singleton Design Pattern in PHP, follow these steps:

### 1. Private Constructor

Create a private constructor to prevent external instantiation of the class.

```php
private function __construct() {
    // private constructor code
}
```
### 2. Static Instance
Create a private static instance of the class.
```php
private static $instance;
```

### 2. Public Access Method
Provide a public static method to access the singleton instance. This method should ensure that only one instance is created and returned.

```php
public static function getInstance() {
    if (self::$instance === null) {
        self::$instance = new self();
    }
    return self::$instance;
}
```

# Example

```php
class SingletonExample {
    public function main() {
        // Get the singleton instance
        $singleton = Singleton::getInstance();
    }
}

// Example usage
$example = new SingletonExample();
$example->main();

```

Wrote By `[Oussama Ben Mazzi]`