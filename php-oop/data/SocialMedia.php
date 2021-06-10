<?php

class SocialMedia {
  public string $name;
}

// final class Facebook extends SocialMedia {

// }

class Facebook extends SocialMedia {
  final public function login(string $username, string $password): bool
  {
    return true;
  }
}

// error
// karena tidak bisa meng-extends class yang final
class FakeFacebook extends Facebook {
  // error
  // karena tidak bisa meng-override atau menimpa function/method yang final
  public function login(string $username, string $password): bool
  {
    return false;
  }
}