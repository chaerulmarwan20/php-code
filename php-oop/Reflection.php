<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Chaerul";
$request->password = "Marwan";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest {
  public ?string $name;
  public ?string $address;
  public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Chaerul";
$register->address = "Sumedang";
$register->email = "chaerul@gmail.com";

ValidationUtil::validateReflection($register);